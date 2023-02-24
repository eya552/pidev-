<?php

namespace App\Controller;

use App\Entity\AnimalsCategory;
use App\Form\AnimalsCategoryType;
use App\Repository\AnimalsCategoryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/animals/category')]
class AnimalsCategoryController extends AbstractController
{
    #[Route('/', name: 'app_animals_category_index', methods: ['GET'])]
    public function index(AnimalsCategoryRepository $animalsCategoryRepository): Response
    {
        return $this->render('animals_category/index.html.twig', [
            'animals_categories' => $animalsCategoryRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_animals_category_new', methods: ['GET', 'POST'])]
    public function new(Request $request, AnimalsCategoryRepository $animalsCategoryRepository): Response
    {
        $animalsCategory = new AnimalsCategory();
        $form = $this->createForm(AnimalsCategoryType::class, $animalsCategory);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $animalsCategoryRepository->save($animalsCategory, true);

            return $this->redirectToRoute('app_animals_category_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('animals_category/new.html.twig', [
            'animals_category' => $animalsCategory,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_animals_category_show', methods: ['GET'])]
    public function show(AnimalsCategory $animalsCategory): Response
    {
        return $this->render('animals_category/show.html.twig', [
            'animals_category' => $animalsCategory,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_animals_category_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, AnimalsCategory $animalsCategory, AnimalsCategoryRepository $animalsCategoryRepository): Response
    {
        $form = $this->createForm(AnimalsCategoryType::class, $animalsCategory);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $animalsCategoryRepository->save($animalsCategory, true);

            return $this->redirectToRoute('app_animals_category_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('animals_category/edit.html.twig', [
            'animals_category' => $animalsCategory,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_animals_category_delete', methods: ['POST'])]
    public function delete(Request $request, AnimalsCategory $animalsCategory, AnimalsCategoryRepository $animalsCategoryRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$animalsCategory->getId(), $request->request->get('_token'))) {
            $animalsCategoryRepository->remove($animalsCategory, true);
        }

        return $this->redirectToRoute('app_animals_category_index', [], Response::HTTP_SEE_OTHER);
    }
}
