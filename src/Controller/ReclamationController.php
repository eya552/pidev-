<?php

namespace App\Controller;

use App\Entity\Reclamation;
use App\Form\ReclamationType;
use App\Repository\ReclamationRepository;
use Knp\Component\Pager\PaginatorInterface;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/reclamation')]
class ReclamationController extends AbstractController
{
    #[Route('/reclamations', name: 'app_reclamations_index', methods: ['GET'])]
    public function index(Request $request,ReclamationRepository $repos,PaginatorInterface $paginator): Response
    {

        $Reclamations=$repos->findAll();
        $pagination = $paginator->paginate(
            $Reclamations, $request->query->getInt('page', 1),10); // Numéro de page par défaut
        return $this->render('admin/Reclamations.html.twig', [
            'pagination' => $pagination,
        ]);
    }

    #[Route('/newReclamationClient', name: 'app_reclamation_new', methods: ['GET', 'POST'])]
    public function newRC(Request $request, ReclamationRepository $reclamationRepository): Response
    {
        $reclamation = new Reclamation();
        $form = $this->createForm(ReclamationType::class, $reclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $reclamationRepository->save($reclamation, true);

            return $this->redirectToRoute('app_reclamations_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('Client/NewReclamation.html.twig', [
            'reclamation' => $reclamation,
            'form' => $form,
        ]);
    }
    #[Route('/newReclamationAdmin', name: 'app_reclamation_new2', methods: ['GET', 'POST'])]
    public function newRA(Request $request, ReclamationRepository $reclamationRepository): Response
    {
        $reclamation = new Reclamation();
        $form = $this->createForm(ReclamationType::class, $reclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $reclamationRepository->save($reclamation, true);

            return $this->redirectToRoute('app_reclamations_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('reclamation/new.html.twig', [
            'reclamation' => $reclamation,
            'form' => $form,
        ]);
    }
    #[Route('/{id}', name: 'app_reclamation_show', methods: ['GET'])]
    public function show(Reclamation $reclamation): Response
    {
        return $this->render('reclamation/show.html.twig', [
            'reclamation' => $reclamation,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_reclamation_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Reclamation $reclamation, ReclamationRepository $reclamationRepository): Response
    {
        $form = $this->createForm(ReclamationType::class, $reclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $reclamationRepository->save($reclamation, true);

            return $this->redirectToRoute('app_reclamations_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('reclamation/edit.html.twig', [
            'reclamation' => $reclamation,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_reclamation_delete', methods: ['POST'])]
    public function delete(Request $request, Reclamation $reclamation, ReclamationRepository $reclamationRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reclamation->getId(), $request->request->get('_token'))) {
            $reclamationRepository->remove($reclamation, true);
        }

        return $this->redirectToRoute('app_reclamations_index', [], Response::HTTP_SEE_OTHER);
    }
}
