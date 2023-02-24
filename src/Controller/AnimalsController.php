<?php

namespace App\Controller;

use App\Entity\Animals;
use App\Form\AnimalsType;
use App\Repository\AnimalsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


#[Route('/animals')]
class AnimalsController extends AbstractController
{
    #[Route('/', name: 'app_animals_index', methods: ['GET'])]
    public function index(AnimalsRepository $animalsRepository): Response
    {
        return $this->render('animals/index.html.twig', [
            'animals' => $animalsRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_animals_new', methods: ['GET', 'POST'])]
    public function new(Request $request, AnimalsRepository $animalsRepository): Response
    {
        $animal = new Animals();
        $form = $this->createForm(AnimalsType::class, $animal);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $animalsRepository->save($animal, true);

            return $this->redirectToRoute('app_animals_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('animals/new.html.twig', [
            'animal' => $animal,
            'form' => $form,
        ]);
    }

    

    #[Route('/{id}', name: 'app_animals_show', methods: ['GET'])]
    public function show(Animals $animal): Response
    {
        return $this->render('animals/show.html.twig', [
            'animal' => $animal,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_animals_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Animals $animal, AnimalsRepository $animalsRepository): Response
    {
        $form = $this->createForm(AnimalsType::class, $animal);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $animalsRepository->save($animal, true);

            return $this->redirectToRoute('app_animals_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('animals/edit.html.twig', [
            'animal' => $animal,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_animals_delete', methods: ['POST'])]
    public function delete(Request $request, Animals $animal, AnimalsRepository $animalsRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$animal->getId(), $request->request->get('_token'))) {
            $animalsRepository->remove($animal, true);
        }

        return $this->redirectToRoute('app_animals_index', [], Response::HTTP_SEE_OTHER);
    }
}



