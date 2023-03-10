<?php

namespace App\Controller;

use App\Entity\BilanDeSoin;
use App\Form\BilanDeSoinType;
use App\Repository\BilanDeSoinRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\Serializer\SerializerInterface;
use Doctrine\ORM\EntityManagerInterface;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/Mobile/Bilans')]
class BilanMobileController extends AbstractController
{
    #[Route('/', name: 'app_bilan_de_soin_indexM', methods: ['GET'])]
    public function findall(Request $request, BilanDeSoinRepository $repository, SerializerInterface $serializerInterface)
    {
        $bilans = $repository->findAll();

        $json = $serializerInterface->serialize($bilans, 'json', ["groups" => 'Bilans']);
        return $response = new  Response($json, 200, [
            "Content-Type" => "application/json"
        ]);
    }




    #[Route('/newBilanClient', name: 'app_bilan_de_soin_newM', methods: ['POST'])]
    public function newBC(Request $request, SerializerInterface $serializer, EntityManagerInterface $em)
    {
        $json = $request->getContent();
        $bilan = $serializer->deserialize($json, BilanDeSoin::class, 'json');
        $em->persist($bilan);
        $em->flush();
        return new Response('ajout avec succes');
    }


    #[Route('/BilansDesoinC', name: 'app_BilansDesoinCM', methods: ['GET'])]
    public function BilansDesoinC(BilanDeSoinRepository $repository, SerializerInterface $serializerInterface)
    {
        $bilans = $repository->findByIdClient('2');
        $json = $serializerInterface->serialize($bilans, 'json', ["groups" => 'BilansClient']);
        return $response = new  Response($json, 200, [
            "Content-Type" => "application/json"
        ]);
    }


    #[Route('/BilansDesoinV', name: 'app_BilansDesoinVM', methods: ['GET'])]
    public function BilansDesoinV(BilanDeSoinRepository $repository, SerializerInterface $serializerInterface)
    {
        $bilans = $repository->findByIdVeterinaire('3');
        $json = $serializerInterface->serialize($bilans, 'json', ["groups" => 'BilansVeterinaire']);
        return $response = new  Response($json, 200, [
            "Content-Type" => "application/json"
        ]);
    }
}
