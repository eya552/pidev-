<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Utilisateur;
use App\Form\SendMailType;
use App\Repository\UserRepository;
use App\Repository\UtilisateurRepository;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\PieChart;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;
#[Route('/admin')]
class AdminController extends AbstractController
{
    #[Route('/', name: 'admin_dasboard')]
    public function index(UserRepository $repository): Response
    {  $user_activer= $repository->countUtilisateurByetat("activer");
        $user_desactiver= $repository->countUtilisateurByetat("desactiver");
        $pieChart = new PieChart();
        $pieChart->getData()->setArrayToDataTable(
            [['users', 'etat'],
                ['users activer', $user_activer],
                ['users descativer',  $user_desactiver],
            ]
        );
        $pieChart->getOptions()->setHeight(300);
        $pieChart->getOptions()->setWidth(300);
        $pieChart->getOptions()->setColors(['#009900', '#990000', '#FF8C00']);
        $pieChart->getOptions()->getTitleTextStyle()->setBold(true);
        $pieChart->getOptions()->getTitleTextStyle()->setColor('#009900');
        $pieChart->getOptions()->getTitleTextStyle()->setItalic(true);
        $pieChart->getOptions()->getTitleTextStyle()->setFontName('Arial');
        $pieChart->getOptions()->getTitleTextStyle()->setFontSize(20);
        $users = $this->getDoctrine()
            ->getRepository(User::class)
            ->findAll();
        $count = count($users);
        return $this->render('admin/index.html.twig', [
            'users' => $count,
            'pieChart' => $pieChart,
        ]);


    }



    #[Route('/afficheAll', name: 'afficheall')]
    public function  affichier(UserRepository $repository):Response
    {
        # affichier tous les users
        $users = $repository->findAll();
        return $this->render('admin/affiche_tous_utilisateurs.html.twig', ['users' => $users]);
    }

    #[Route('/activer/{id}', name: 'activerUser',methods: ['GET','POST'])]
    public function activerUser(UserRepository $repository,$id, EntityManagerInterface $entityManager):Response
    {
        $user= $repository->find($id);
        $user->setEtat("activer");

        $repository->add($user);

        return $this->redirectToRoute('afficheall');
    }
    #[Route('/desactiver/{id}', name: 'desactiverUser',methods: ['GET','POST'])]
    public function desactiverUser(UserRepository $repository,$id, EntityManagerInterface $entityManager):Response
    {
        $user= $repository->find($id);

        $user->setEtat("desactiver");


        $em = $this->getDoctrine()->getManager();
        $em->flush();


        return $this->redirectToRoute('afficheall');
    }

    #[Route('/email/{email_use}', name: 'sendMailToUser')]
    public function sendEmail(MailerInterface $mailer,Request $request,$email_use): Response
    {
        $form =$this->createForm(SendMailType::class,null);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {
            $message=$form->get('message')->getData();
            $subject=$form->get('subject')->getData();
            $email = (new Email())
                ->from('eya.yahmadi@esprit.tn')
                ->to((string)$email_use)
                ->subject((string)$subject)
                ->text('Sending emails is fun again!')
                ->html("<p>$message</p>");
            $mailer->send($email);
            $this->addFlash('success', 'votre email a ete bien envoyer');
            return $this->redirectToRoute('afficheall');
        }
        return $this->render('admin/sendMail.html.twig', ['form' => $form->createView(),'user_email'=>$email_use]);
    }











}
