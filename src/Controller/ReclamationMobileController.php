<?php

namespace App\Controller;

use App\Entity\Reclamation;
use App\Form\ReclamationType;
use App\Repository\ReclamationRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\Serializer\SerializerInterface;
use Doctrine\ORM\EntityManagerInterface;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/Mobile/Reclamations')]
class ReclamationMobileController extends AbstractController
{
    #[Route('/reclamations', name: 'app_reclamations_indexM', methods: ['GET'])]
    public function index(Request $request, ReclamationRepository $repos, SerializerInterface $serializerInterface)
    {

        $Reclamations = $repos->findAll();
        $json = $serializerInterface->serialize($Reclamations, 'json', ["groups" => 'Reclamations']);
        return $response = new  Response($json, 200, [
            "Content-Type" => "application/json"
        ]);
    }





    #[Route('/newReclamationC', name: 'app_reclamation_newM', methods: ['POST'])]
    public function newBC(Request $request, SerializerInterface $serializer, EntityManagerInterface $em)
    {
        $json = $request->getContent();
        $reclamation = $serializer->deserialize($json, Reclamation::class, 'json');
        $em->persist($reclamation);
        $em->flush();
        return new Response('ajout avec succes');
    }
}
