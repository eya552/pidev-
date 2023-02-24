<?php

namespace App\Controller;

use App\Entity\Typecontrat;
use App\Form\TypecontratType;
use App\Repository\TypecontratRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/typecontrat')]
class TypecontratController extends AbstractController
{
    #[Route('/', name: 'app_typecontrat_index', methods: ['GET'])]
    public function index(TypecontratRepository $typecontratRepository): Response
    {
        return $this->render('admin/Typecontrat.html.twig', [
            'typecontrats' => $typecontratRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_typecontrat_new', methods: ['GET', 'POST'])]
    public function new(Request $request, TypecontratRepository $typecontratRepository): Response
    {
        $typecontrat = new Typecontrat();
        $form = $this->createForm(TypecontratType::class, $typecontrat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $typecontratRepository->save($typecontrat, true);

            return $this->redirectToRoute('app_typecontrat_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('typecontrat/new.html.twig', [
            'typecontrat' => $typecontrat,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_typecontrat_show', methods: ['GET'])]
    public function show(Typecontrat $typecontrat): Response
    {
        return $this->render('typecontrat/show.html.twig', [
            'typecontrat' => $typecontrat,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_typecontrat_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Typecontrat $typecontrat, TypecontratRepository $typecontratRepository): Response
    {
        $form = $this->createForm(TypecontratType::class, $typecontrat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $typecontratRepository->save($typecontrat, true);

            return $this->redirectToRoute('app_typecontrat_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('typecontrat/edit.html.twig', [
            'typecontrat' => $typecontrat,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_typecontrat_delete', methods: ['POST'])]
    public function delete(Request $request, Typecontrat $typeContrat, TypecontratRepository $typecontratRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$typeContrat->getId(), $request->request->get('_token'))) {
            $typecontratRepository->remove($typeContrat, true);
        }

        return $this->redirectToRoute('app_typecontrat_index', [], Response::HTTP_SEE_OTHER);
    }
   
    }
