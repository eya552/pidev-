<?php

namespace App\Controller;

use App\Form\ChangePasswordType;
use App\Form\ModificationFormType;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Form\FormError;

#[Route('/account')]
class AccountController extends AbstractController
{
    #[Route('/', name: 'account', methods: ['GET', 'POST'])]
    public function index(UserRepository $repository, Request $request, UserPasswordEncoderInterface $passwordEncoder): Response
    {
        $id = $this->getUser()->getId();
        $user = $repository->find($id);
        $form = $this->createForm(ModificationFormType::class, $user);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->flush();
            $this->addFlash('success', 'Votre modification a ete effectuer avec sucess');
            return $this->redirectToRoute('account');
        }
        return $this->render('account/index.html.twig', [
            'controller_name' => 'AccountController', 'form' => $form->createView()

        ]);
    }

    #[Route('/reset', name: 'passwordReset',methods: ['GET','POST'])]
    public function editAction(Request $request, UserPasswordEncoderInterface $passwordEncoder): Response
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->getUser();
        $form = $this->createForm(ChangePasswordType::class, $user);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $oldPassword = $request->request->get('change_password')['oldPassword'];
            // Si l'ancien mot de passe est bon
            if ($passwordEncoder->isPasswordValid($user, $oldPassword)) {
                $newEncodedPassword = $passwordEncoder->encodePassword($user, $form->get('plainPassword')->getData()
                );
                $user->setPassword($newEncodedPassword);
                $em->persist($user);
                $em->flush();
                $this->addFlash('success', 'Votre mot de passe à bien été changé !');
                return $this->redirectToRoute('account');
            } else {
                $form->addError(new FormError('Ancien mot de passe incorrect'));
                $this->addFlash('error', 'Votre mot de passe ancienne  est inccorect !');

            }
        }
        return $this->render('account/passwordChange.html.twig', array(
            'form' => $form->createView(),
        ));
    }




}
