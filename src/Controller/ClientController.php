<?php

namespace App\Controller;

use App\Entity\Animals;
use App\Form\AnimalsType;
use App\Repository\AnimalsRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


#[Route('/Client')]
class ClientController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function home(): Response
    {
        return $this->render('client/home.html.twig', [
            'controller_name' => 'ClientController',
        ]);
    }
    #[Route('/header', name: 'app_header')]
    public function header(): Response
    {
        return $this->render('client/header.html.twig', [
            'controller_name' => 'ClientController',
        ]);
    }

    #[Route('/Contactus', name: 'app_Contactus')]
    public function contactus(): Response
    {
        return $this->render('client/Contactus.html.twig', [
            'controller_name' => 'ClientController',
        ]);
    }


    #[Route('/Aboutus', name: 'app_Aboutus')]
    public function Aboutus(): Response
    {
        return $this->render('client/Aboutus.html.twig', [
            'controller_name' => 'ClientController',
        ]);
    }

    #[Route('/E404', name: 'app_E404')]
    public function E404(): Response
    {
        return $this->render('client/E404.html.twig', [
            'controller_name' => 'ClientController',
        ]);
    }
    #[Route('/devis', name: 'app_devis')]
    public function devis(): Response
    {
        return $this->render('client/devis.html.twig', [
            'controller_name' => 'ClientController',
        ]);
    }
    #[Route('/Actualites', name: 'app_Actualites')]
    public function Actualites(): Response
    {
        return $this->render('client/Actualites.html.twig', [
            'controller_name' => 'ClientController',
        ]);
    }
    


    #[Route('/ActualiteInfo', name: 'app_ActualiteInfo')]
    public function ActualiteInfo(): Response
    {
        return $this->render('client/ActualiteInfo.html.twig', [
            'controller_name' => 'ClientController',
        ]);
    }


    #[Route('/EspaceClient', name: 'app_EspaceClient')]
    public function EspaceClient(): Response
    {
        return $this->render('client/EspaceClient.html.twig', [
            'controller_name' => 'ClientController',
        ]);
    }


    #[Route('/EspaceVeterinaire', name: 'app_EspaceVeterinaire')]
    public function EspaceVeterinaire(): Response
    {
        return $this->render('client/EspaceVeterinaire.html.twig', [
            'controller_name' => 'ClientController',
        ]);
    }

    
    #[Route('/Next', name: 'app_Next')]
    public function Formulaire(): Response
    {
        return $this->render('client/Next.html.twig', [
            'controller_name' => 'ClientController',
        ]);
    }

    #[Route('/clientanimal', name: 'app_clienta')]
    public function cilentanimal(): Response
    {
        return $this->render('client/clientAnimal.html.twig', [
            'controller_name' => 'ClientController',
        ]);
    }


    #[Route('/afficher', name: 'app_animals1_afficher', methods: ['GET'])]
    public function index(AnimalsRepository $animalsRepository): Response
    {
        return $this->render('client/afficher.html.twig', [
            'animals' => $animalsRepository->findAll(),
        ]);
    }

    #[Route('/create', name: 'app_animals1_new', methods: ['GET', 'POST'])]
    public function new(Request $request, AnimalsRepository $animalsRepository): Response
    {
        $animal = new Animals();
        $form = $this->createForm(AnimalsType::class, $animal);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $animalsRepository->save($animal, true);

            return $this->redirectToRoute('app_animals1_afficher', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('client/NewAnimals.html.twig', [
            'animal' => $animal,
            'form' => $form,
        ]);
    }

    

    #[Route('/{id}', name: 'app_animals1_show', methods: ['GET'])]
    public function show(Animals $animal): Response
    {
        return $this->render('client/showAnimals.html.twig', [
            'animal' => $animal,
        ]);
    }

    #[Route('/{id}/modifier', name: 'app_animals1_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Animals $animal, AnimalsRepository $animalsRepository): Response
    {
        $form = $this->createForm(AnimalsType::class, $animal);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $animalsRepository->save($animal, true);

            return $this->redirectToRoute('app_animals1_afficher', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('client/editAnimals.html.twig', [
            'animal' => $animal,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_animals1_delete', methods: ['POST'])]
    public function delete(Request $request, Animals $animal, AnimalsRepository $animalsRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$animal->getId(), $request->request->get('_token'))) {
            $animalsRepository->remove($animal, true);
        }

        return $this->redirectToRoute('app_animals1_afficher', [], Response::HTTP_SEE_OTHER);
    }




   
}
