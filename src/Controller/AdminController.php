<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;
use App\Repository\BilanDeSoinRepository;
use App\Repository\ReclamationRepository;

#[Route('/Admin')]
class AdminController extends AbstractController
{

    // #[Route('/homeAdmin', name: 'display_home')]
    // public function indexhome(): Response
    // {
    //     return $this->render('admin/home.html.twig', [
    //         'controller_name' => 'AdminController',
    //     ]);
    // }
    // #[Route('/statsClient', name: 'app_bilan_de_soin_statsClient')]
    // public function StatsClient(BilanDeSoinRepository $bilanDeSoinRepository): Response
    // {
    //     $Bilans = $bilanDeSoinRepository->findAll();
    //     // $BilansClient=[];
    //     $BilansColor = [];
    //     $BilansDescription = [];
    //     $BilansCount = [];
    //     $rand = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f');
    //     foreach ($Bilans as $Bilan) {
    //         $BilansDescription[] = $Bilan->getDescription();
    //         $BilansColor[] = '#' . $rand[rand(0, 15)] . $rand[rand(0, 15)] . $rand[rand(0, 15)] . $rand[rand(0, 15)] . $rand[rand(0, 15)] . $rand[rand(0, 15)];
    //         $BilansCount[] = count($BilansDescription);
    //     }
    //     return $this->render('admin/home.html.twig', [
    //         'BilansDescription' => $BilansDescription,
    //         'BilansCount' => $BilansCount,
    //         'BilansColor' => $BilansColor,
    //     ]);
    // }
    #[Route('/homeAdmin', name: 'display_home')]
    public function indexhome(BilanDeSoinRepository $bilanDeSoinRepository, ReclamationRepository $reclamationRepository): Response
    {
        $Bilans = $bilanDeSoinRepository->findAll();
        $BilansColor = [];
        $BilansDescription = [];
        $BilansCount = [];
        $BilansVetColor = [];
        $BilansVetId = [];
        $BilansVetCount = [];


        $Reclamations = $reclamationRepository->findAll();
        $ReclamationsColor = [];
        $ReclamationsClient = [];
        $ReclamationsCount = [];
        $rand = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f');
        foreach ($Bilans as $Bilan) {
            $BilansDescription[] = $Bilan->getDescription();
            $BilansColor[] = '#' . $rand[rand(0, 15)] . $rand[rand(0, 15)] . $rand[rand(0, 15)] . $rand[rand(0, 15)] . $rand[rand(0, 15)] . $rand[rand(0, 15)];
            $BilansCount[] = count($BilansDescription);
        }
        foreach ($Bilans as $BilanVet) {
            $BilansVetId[] = $BilanVet->getIdVeterinaire();
            $BilansVetColor[] = '#' . $rand[rand(0, 15)] . $rand[rand(0, 15)] . $rand[rand(0, 15)] . $rand[rand(0, 15)] . $rand[rand(0, 15)] . $rand[rand(0, 15)];
            $BilansVetCount[] = count($BilansVetId);
        }

        foreach ($Reclamations as $Reclamation) {
            $ReclamationsClient[] = $Reclamation->getIdClient();
            $ReclamationsColor[] = '#' . $rand[rand(0, 15)] . $rand[rand(0, 15)] . $rand[rand(0, 15)] . $rand[rand(0, 15)] . $rand[rand(0, 15)] . $rand[rand(0, 15)];
            $ReclamationsCount[] = count($ReclamationsClient);
        }

        return $this->render('admin/home.html.twig', [
            'controller_name' => 'AdminController',
            'BilansDescription' => $BilansDescription,
            'BilansCount' => $BilansCount,
            'BilansColor' => $BilansColor,


            'BilansVetId' => $BilansVetId,
            'BilansVetCount' => $BilansVetCount,
            'BilansVetColor' => $BilansVetColor,


            'ReclamationsCount' => $ReclamationsCount,
            'ReclamationsClient' => $ReclamationsClient,
            'ReclamationsColor' => $ReclamationsColor,

        ]);
    }








    #[Route('/profile', name: 'display_profile')]
    public function indexProfile(): Response
    {
        return $this->render('admin/profile.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }



    #[Route('/dashboard', name: 'display_dashboard')]
    public function indexdashboard(): Response
    {
        return $this->render('admin/dashboard.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }



    // #[Route('/tables', name: 'display_tables')]
    // public function indextables(): Response
    // {
    //     return $this->render('admin/tables.html.twig' , [
    //         'controller_name' => 'AdminController',
    //     ]);
    // }



    // #[Route('/billing.', name: 'display_billing')]
    // public function indexbilling(): Response
    // {
    //     return $this->render('admin/billing.html.twig' , [
    //         'controller_name' => 'AdminController',
    //     ]);
    // }



    // #[Route('/notifications', name: 'display_notifications')]
    // public function indexnotifications(): Response
    // {
    //     return $this->render('admin/notifications.html.twig' , [
    //         'controller_name' => 'AdminController',
    //     ]);
    // }



    #[Route('/signin', name: 'display_sign-in')]
    public function indexsignin(): Response
    {
        return $this->render('admin/sign-in.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }



    #[Route('/signup', name: 'display_sign-up')]
    public function indexsignup(): Response
    {
        return $this->render('admin/sign-up.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }




    // #[Route('/Bilans', name: 'display_Bilans')]
    // public function indexBilan(): Response
    // {
    //     return $this->render('admin/Bilans.html.twig' , [
    //         'controller_name' => 'AdminController',
    //     ]);

    // }
}
