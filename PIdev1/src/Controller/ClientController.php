<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ActualiteRepository;
use Exception;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Actualite;
#[Route('/Client')]
class ClientController extends AbstractController
{
    // #[Route('/home', name: 'app_home')]
    // public function home(): Response
    // {
    //     return $this->render('client/home.html.twig', [
    //         'controller_name' => 'ClientController',
    //     ]);
    // }
    #[Route('/header', name: 'app_header')]
    public function header(): Response
    {
        return $this->render('client/header.html.twig', [
            'controller_name' => 'ClientController',
        ]);
    }

    // #[Route('/Contactus', name: 'app_Contactus')]
    // public function contactus(): Response
    // {
    //     return $this->render('client/Contactus.html.twig', [
    //         'controller_name' => 'ClientController',
    //     ]);
    // }


    // #[Route('/Aboutus', name: 'app_Aboutus')]
    // public function Aboutus(): Response
    // {
    //     return $this->render('client/Aboutus.html.twig', [
    //         'controller_name' => 'ClientController',
    //     ]);
    // }

    #[Route('/E404', name: 'app_E404')]
    public function E404(): Response
    {
        return $this->render('client/E404.html.twig', [
            'controller_name' => 'ClientController',
        ]);
    }

    #[Route('/Actualites', name: 'liste')]
    public function pagination(ActualiteRepository $actualiteRepository, Request $request ): Response
    {   
        $limit=2;
        $page=(int)$request->query->get("page",1);
        $actualitess=$actualiteRepository->getPaginatedActualites($page,$limit);
        $total=$actualiteRepository->getTotalActualites();
        return $this->render('/Actualites.html.twig', 
             compact('actualites','total','limit','page','actualitess'));
    }
    #[Route('/Actualites', name: 'app_Actualites')]
    public function TriRecherche(Request $request,ActualiteRepository $actualiteRepository)
    {

       
        $back = null;  
          
// if($request->isMethod("POST")){
//     if ( $request->request->get('optionsRadios')){
//         //throw new Exception('test:'.$request->request->get('optionsRadios'));
//         $SortKey = $request->request->get('optionsRadios');
//         //dump($SortKey);exit;
//         switch ($SortKey){
//             case 'titreActualite':
//                 $actualites = $actualiteRepository->SortByTitreActualite();
//                 break;

//             case 'contenuActualite':
//                 $actualites = $actualiteRepository->SortByContenuActualite();
//                 break;

//             case 'DateActualite':
//                 $actualites = $actualiteRepository->SortByDateActualite();
//                 break;


//         }
//     }




    
    
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
    
   
    if ( $actualites){
        $back = "success";
    }else{
        $back = "failure";
    }
    return $this->render('Client/Actualites.html.twig', [
        'actualites' => $actualites
        
        
    ]);
}



}
   


