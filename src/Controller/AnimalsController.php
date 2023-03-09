<?php

namespace App\Controller;

use App\Entity\Animals;
use App\Form\AnimalsType;
use App\Repository\AnimalsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Dompdf\Dompdf;
use Dompdf\Options;

use Knp\Snappy\Pdf;
use Mpdf\Mpdf;



#[Route('/animals')]
class AnimalsController extends AbstractController
{
    #[Route('/', name: 'app_animals_index', methods: ['GET'])]
    public function index(Request $request,AnimalsRepository $animalsRepository): Response
    {
        $query = $request->query->get('q');
        return $this->render('animals/index.html.twig', [
            'animals' => $animalsRepository->findAll(),
            'query' => $query,
        ]);
    }
    #[Route('/search', name: 'event_search')]
    public function search(Request $request,AnimalsRepository $rep): Response
    {
        $query = $request->query->get('q');
        $events = $rep->searchAnimals($query);

        return $this->render('animals/search.html.twig', [
            'animals' => $events,
            'query' => $query,
        ]);
    }

    #[Route('/trie', name: 'trie')]
    public function trie(AnimalsRepository $repositoryE, Request $request)
    {
        $event = $repositoryE->findAll();
        $event=$repositoryE->TrieparDate(); 
        $query = $request->query->get('q');                                       
       
    
        return $this->render("animals/index.html.twig",array("animals"=>$event,
        'query' => $query,));
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
        if ($this->isCsrfTokenValid('delete' . $animal->getId(), $request->request->get('_token'))) {
            $animalsRepository->remove($animal, true);
        }

        return $this->redirectToRoute('app_animals_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/devis1/{id}', name: 'app_devis1', methods: ['GET', 'POST'])]
    public function calculerDevis(Animals $animal): Response
    {

        $basePrice = 180;
        $malePrice = 90;
        $femalePrice = 160;
        $sterilizationYesPrice = 100;
        $sterilizationNoPrice = 200;
        $vaccinationYesPrice = 70;
        $vaccinationNoPrice = 160;
        $prixTotal=0;
        // Déclarer et initialiser la variable $prixTotal

        // Vérifier la valeur de la stérilisation
        if ($animal->getEstSterilise() === 'oui') {
            $prixTotal = $basePrice;
            $prixTotal += $sterilizationYesPrice;
            if ($animal->getEstVaccine() === 'oui') {
                $prixTotal += $vaccinationYesPrice;
                if ($animal->getGenreAnimal() === 'male') {
                    $prixTotal += $malePrice;
                    // Rendre la vue avec le prix initial
                    return $this->render('animals/resultat.html.twig', [
                        'animal' => $animal,
                        'prixTotal' => $prixTotal,
                    ]);
                } else {
                    $prixTotal += $femalePrice;
                    // Rendre la vue avec le prix initial
                    return $this->render('animals/resultat.html.twig', [
                        'animal' => $animal,
                        'prixTotal' => $prixTotal,
                    ]);
                }
            } else {
                $prixTotal += $vaccinationNoPrice;
                if ($animal->getGenreAnimal() === 'male') {
                    $prixTotal += $malePrice;
                    // Rendre la vue avec le prix initial
                    return $this->render('animals/resultat.html.twig', [
                        'animal' => $animal,
                        'prixTotal' => $prixTotal,
                    ]);
                } else {
                    $prixTotal += $femalePrice;
                    // Rendre la vue avec le prix initial
                    return $this->render('animals/resultat.html.twig', [
                        'animal' => $animal,
                        'prixTotal' => $prixTotal,
                    ]);
                }
            }
        } else {
            $prixTotal = $basePrice;
            $prixTotal += $sterilizationNoPrice;
            if ($animal->getEstVaccine() === 'oui') {
                $prixTotal += $vaccinationYesPrice;
                if ($animal->getGenreAnimal() === 'male') {
                    $prixTotal += $malePrice;
                    // Rendre la vue avec le prix initial
                    return $this->render('animals/resultat.html.twig', [
                        'animal' => $animal,
                        'prixTotal' => $prixTotal,
                    ]);
                } else {
                    $prixTotal += $femalePrice;
                    // Rendre la vue avec le prix initial
                    return $this->render('animals/resultat.html.twig', [
                        'animal' => $animal,
                        'prixTotal' => $prixTotal,
                    ]);
                }
            } else {
                $prixTotal += $vaccinationNoPrice;
                if ($animal->getGenreAnimal() === 'male') {
                    $prixTotal += $malePrice;
                    // Rendre la vue avec le prix initial
                    return $this->render('animals/resultat.html.twig', [
                        'animal' => $animal,
                        'prixTotal' => $prixTotal,
                    ]);
                } else {
                    $prixTotal += $femalePrice;
                    // Rendre la vue avec le prix initial
                    return $this->render('animals/resultat.html.twig', [
                        'animal' => $animal,
                        'prixTotal' => $prixTotal,
                    ]);
                }
            }
        }



    }

    #[Route('/data/download', name: 'users_data_download')]

    public function usersDataDownload(AnimalsRepository $animal)
    {
        // On définit les options du PDF
        $pdfOptions = new Options();
        // Police par défaut
        $pdfOptions->set('defaultFont', 'Arial');
        $pdfOptions->setIsRemoteEnabled(true);
    
        // On instancie Dompdf
        $dompdf = new Dompdf($pdfOptions);
        $animal= $animal->findAll();
       
        // $classrooms= $this->getDoctrine()->getRepository(classroomRepository::class)->findAll();
    
        $context = stream_context_create([
            'ssl' => [
                'verify_peer' => FALSE,
                'verify_peer_name' => FALSE,
                'allow_self_signed' => TRUE
            ]
        ]);
        $dompdf->setHttpContext($context);
    
        // On génère le html
        $html =$this->renderView('animals/listp.html.twig',[
            'animals'=>$animal
        ]);
    
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
    
        // On génère un nom de fichier
        $fichier = 'Liste-animal' .'.pdf';
    
        // On envoie le PDF au navigateur
        $dompdf->stream($fichier, [
            'Attachment' => true
        ]);
    
        return new Response() ;
    }

  


   

    
   








 } 
