<?php

namespace App\Controller;

use App\Repository\BilanDeSoinRepository;
use App\Entity\BilanDeSoin;
use App\Entity\Reclamation;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Dompdf\Dompdf;
use Dompdf\Options;


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



    #[Route('/BilansDesoinC', name: 'app_BilansDesoinC')]
    public function BilansDesoinC(BilanDeSoinRepository $repository): Response
    {
        $bilans = $repository->findByIdClient('1');
        return $this->render('Client/BilansDeSoin.html.twig', [
            'bilans' => $bilans,
        ]);
    }

    #[Route('/BilansDesoinV', name: 'app_BilansDesoinV')]
    public function BilansDesoinV(BilanDeSoinRepository $repository): Response
    {
        $bilans = $repository->findByIdVeterinaire('3');
        return $this->render('Client/BilansDeSoin.html.twig', [
            'bilans' => $bilans,
        ]);
    }




    #[Route('/BilanDesoin/{id}', name: 'app_BilanDesoin', methods: ['GET'])]
    public function showB(BilanDeSoin $bilanDeSoin): Response
    {
        return $this->render('Client/BilanDeSoin.html.twig', [
            'bilan_de_soin' => $bilanDeSoin,
        ]);
    }

    #[Route('/BilanDesoinpdf/{id}', name: 'app_BilanDesoinpdf', methods: ['GET'])]
    public function Bilanpdf(BilanDeSoin $bilanDeSoin)
    {
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');
        $pdfOptions->setIsRemoteEnabled(true);
        $pdfOptions->set('isHtml5ParserEnabled', true);
        $pdfOptions->set('isFontSubsettingEnabled', true);
        $pdfOptions->set('isPhpEnabled', true);
        $pdfOptions->set('debugKeepTemp', true);
        $dompdf = new Dompdf($pdfOptions);
        $context = stream_context_create([
            'ssl' => [
                'verify_peer' => FALSE,
                'verify_peer_name' => False,
                'allow_self_signed' => true,
            ]
        ]);
        $dompdf->setHttpContext($context);
        $html = $this->renderView('Client/pdf.html.twig', [
            'bilan_de_soin' => $bilanDeSoin,
        ]);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A5', 'Portrait');
        $dompdf->render();
        $fichier = 'Bilan de soin' . '.pdf';
        $dompdf->stream($fichier, [
            'Attachement' => true
        ]);
        return new Response();
    }




    #[Route('/ReclamationsC', name: 'app_ReclamationsC')]
    public function ReclamationsC(BilanDeSoinRepository $repository): Response
    {
        $bilans = $repository->findByIdClient('1');
        return $this->render('Client/Reclamations.html.twig', [
            'bilans' => $bilans,
        ]);
    }

    //reclamation by bilan
    // #[Route('/ReclamationsB', name: 'app_ReclamationsC')]
    // public function ReclamationsB(BilanDeSoinRepository $repository): Response
    // {
    //     $bilans = $repository->findByBilan('1');
    //     return $this->render('Client/Reclamations.html.twig', [
    //         'bilans' => $bilans,
    //     ]);
    // }
    #[Route('/Reclamation/{id}', name: 'app_Reclamation', methods: ['GET'])]
    public function showR(Reclamation $Reclamation): Response
    {
        return $this->render('Client/Reclamation.html.twig', [
            'Reclamation' => $Reclamation,
        ]);
    }

}
