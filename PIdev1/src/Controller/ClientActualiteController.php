<?php

namespace App\Controller;

use App\Entity\Actualite;
use App\Entity\Commentaire;
use App\Form\Actualite1Type;
use App\Repository\ActualiteRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Messenger\Transport\Serialization\SerializerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

#[Route('/Client')]
class ClientActualiteController extends AbstractController
{   
    #[Route('/Actualites', name: 'app_client_actualite_index', methods: ['GET'])]
    public function index(Request $request, ActualiteRepository $actualiteRepository, NormalizerInterface $normalizer): Response
    {   
        $sortBy = $request->get('optionsRadios');
        $limit=3; //limite actualité par page
        $page=(int)$request->query->get("page",1); // prendre la page 1 par défaut
        $actualitess=$actualiteRepository->getPaginatedActualites($page,$limit); //
        $total=$actualiteRepository->getTotalActualites(); //nombre total des actualites
        $actualites=$actualiteRepository->findAllActualities($sortBy); //Tri
        //dd($actualites);
        
        $actualitesnormalisees= $normalizer->normalize($actualites,null,['groups' => 'actualites']);
        $json=json_encode($actualitesnormalisees);
        return $this->render('/client/Actualites.html.twig', 
             compact('actualites','total','limit','page','actualitess','sortBy'));
             
        
    }

    #[Route('/home', name: 'app_home')]
    public function home(): Response
    {
        return $this->render('client/home.html.twig', [
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

    #[Route('/Contactus', name: 'app_Contactus')]
    public function contactus(): Response
    {
        return $this->render('client/Contactus.html.twig', [
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
    #[Route('/ActualiteInfo', name: 'app_ActualiteInfo')]
    public function ActualiteInfo(): Response
    {
        return $this->render('client/ActualiteInfo.html.twig', [
            'controller_name' => 'ClientController',
        ]);
    }


    // #[Route('/new', name: 'app_client_actualite_new', methods: ['GET', 'POST'])]
    // public function new(Request $request, ActualiteRepository $actualiteRepository): Response
    // {
    //     $actualite = new Actualite();
    //     $form = $this->createForm(Actualite1Type::class, $actualite);
    //     $form->handleRequest($request);

    //     if ($form->isSubmitted() && $form->isValid()) {
    //         $actualiteRepository->save($actualite, true);

    //         return $this->redirectToRoute('app_client_actualite_index', [], Response::HTTP_SEE_OTHER);
    //     }

    //     return $this->renderForm('client_actualite/new.html.twig', [
    //         'actualite' => $actualite,
    //         'form' => $form,
    //     ]);
    // }

    #[Route('/{id}', name: 'app_client_actualite_show', methods: ['GET'])]
    public function show(Actualite $actualite): Response
    {   $commentaires=$actualite->getCommentaires();
        return $this->render('client_actualite/show.html.twig', [
            'actualite' => $actualite,
            'commentaires'=>$commentaires
        ]);
    }

    // #[Route('/{id}/edit', name: 'app_client_actualite_edit', methods: ['GET', 'POST'])]
    // public function edit(Request $request, Actualite $actualite, ActualiteRepository $actualiteRepository): Response
    // {
    //     $form = $this->createForm(Actualite1Type::class, $actualite);
    //     $form->handleRequest($request);

    //     if ($form->isSubmitted() && $form->isValid()) {
    //         $actualiteRepository->save($actualite, true);

    //         return $this->redirectToRoute('app_client_actualite_index', [], Response::HTTP_SEE_OTHER);
    //     }

    //     return $this->renderForm('client_actualite/edit.html.twig', [
    //         'actualite' => $actualite,
    //         'form' => $form,
    //     ]);
    // }

    // #[Route('/{id}', name: 'app_client_actualite_delete', methods: ['POST'])]
    // public function delete(Request $request, Actualite $actualite, ActualiteRepository $actualiteRepository): Response
    // {
    //     if ($this->isCsrfTokenValid('delete'.$actualite->getId(), $request->request->get('_token'))) {
    //         $actualiteRepository->remove($actualite, true);
    //     }

    //     return $this->redirectToRoute('app_client_actualite_index', [], Response::HTTP_SEE_OTHER);
    // }

    // #[Route('/Actualites', name: 'app_client_actualite_index', methods: ['POST'])]
 
    // public function store(Request $request, SerializerInterface $serializer, EntityManagerInterface $em)
    // {
    //     $jsonRecu=$request->getContent();
    //     $actualites= $serializer->deserialize($jsonRecu, Actualite::class, 'json');
    //     // $actualite->SetDateActualite(new \DateTime());
    //     $em->persist($actualites);
    //     $em->flush();

        
    //     return $this->json($actualites,201,[],['groups'=>'actualites']);
    // }

    #[Route('/Client/Acualites', name: 'app_client_actualite_tri_recherche', methods: ['GET'])]
    public function TriRecherche(Request $request,ActualiteRepository $actualiteRepository)
    {

        $back = null;  
            
if($request->isMethod("POST")){
    if ( $request->request->get('optionsRadios')){
        $SortKey = $request->request->get('optionsRadios');
        switch ($SortKey){
            case 'titreActualite':
                $actualites = $actualiteRepository->SortByTitreActualite();
                break;

            case 'contenuActualite':
                $actualites = $actualiteRepository->SortByContenuActualite();
                break;

            case 'DateActualite':
                $actualites = $actualiteRepository->SortByDateActualite();
                break;


        }
    }
    else
    {
        $type = $request->request->get('optionsearch');
        $value = $request->request->get('Search');
        switch ($type){
            case 'titreActualite':
                $actualites = $actualiteRepository->findByTitreActualite($value);
                break;

            case 'contenuActualite':
                $actualites = $actualiteRepository->findByContenuActualite($value);
                break;



        }
    }

    if ( $actualites){
        $back = "success";
    }else{
        $back = "failure";
    }
}
return $this->render('client_actualite/show.html.twig', [
    'actualites' => $actualites
    
]);

}

#[Route('/Actualites/PDF', name: 'users_data_download')]

    public function usersDataDownload(ActualiteRepository $actualite)
    {
        // On définit les options du PDF
        $pdfOptions = new Options();
        // Police par défaut
        $pdfOptions->set('defaultFont', 'Arial');
        $pdfOptions->setIsRemoteEnabled(true);
    
        // On instancie Dompdf
        $dompdf = new Dompdf($pdfOptions);
        $actualite= $actualite->findAll();
       
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
        $html =$this->renderView('client_actualite/show.html.twig',[
            'actualite'=>$actualite
        ]);
    
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
    
        // On génère un nom de fichier
        $fichier = 'Liste-contrat' .'.pdf';
    
        // On envoie le PDF au navigateur
        $dompdf->stream($fichier, [
            'Attachment' => true
        ]);
    
        return new Response() ;
    }


    }

