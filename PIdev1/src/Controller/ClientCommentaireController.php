<?php

namespace App\Controller;

use App\Entity\Actualite;
use App\Entity\Commentaire;
use App\Form\Commentaire1Type;
use App\Repository\CommentaireRepository;
use DateTimeImmutable;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/client/actualite/{id}/client/commentaire')]
class ClientCommentaireController extends AbstractController
{
    // #[Route('/', name: 'app_client_commentaire_index', methods: ['GET'])]
    // public function index(CommentaireRepository $commentaireRepository): Response
    // {
    //     return $this->render('client_commentaire/index.html.twig', [
    //         'commentaires' => $commentaireRepository->findAll(),
    //     ]);
    // }

    #[Route('/new', name: 'app_client_commentaire_new', methods: ['GET', 'POST'])]
    public function new(Request $request, Actualite $actualite, CommentaireRepository $commentaireRepository): Response
    {   
        $commentaire = new Commentaire();
        $commentaire->SetDateCommentaire(new DateTimeImmutable());
        // $commentaire->setIdUser($this->getIdUser());
        $commentaire->setActualite($actualite) ;    
        $form = $this->createForm(Commentaire1Type::class, $commentaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $commentaireRepository->save($commentaire, true);
            $commentaireRepository->sms();
            return $this->redirectToRoute('app_client_actualite_show', ['id'=> $actualite->getId()], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('client_commentaire/new.html.twig', [
            'commentaire' => $commentaire,
            'form' => $form,
        ]);
    }

    // #[Route('/{id}', name: 'app_client_commentaire_show', methods: ['GET'])]
    // public function show(Commentaire $commentaire): Response
    // {
    //     return $this->render('client_commentaire/show.html.twig', [
    //         'commentaire' => $commentaire,
    //     ]);
    // }

    // #[Route('/{id}/edit', name: 'app_client_commentaire_edit', methods: ['GET', 'POST'])]
    // public function edit(Request $request, Commentaire $commentaire, CommentaireRepository $commentaireRepository): Response
    // {
    //     $form = $this->createForm(Commentaire1Type::class, $commentaire);
    //     $form->handleRequest($request);

    //     if ($form->isSubmitted() && $form->isValid()) {
    //         $commentaireRepository->save($commentaire, true);

    //         return $this->redirectToRoute('app_client_commentaire_index', [], Response::HTTP_SEE_OTHER);
    //     }

    //     return $this->renderForm('client_commentaire/edit.html.twig', [
    //         'commentaire' => $commentaire,
    //         'form' => $form,
    //     ]);
    // }

    // #[Route('/{id}', name: 'app_client_commentaire_delete', methods: ['POST'])]
    // public function delete(Request $request, Commentaire $commentaire, CommentaireRepository $commentaireRepository): Response
    // {
    //     if ($this->isCsrfTokenValid('delete'.$commentaire->getId(), $request->request->get('_token'))) {
    //         $commentaireRepository->remove($commentaire, true);
    //     }

    //     return $this->redirectToRoute('app_client_commentaire_index', [], Response::HTTP_SEE_OTHER);
    // }
}
