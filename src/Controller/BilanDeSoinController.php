<?php

namespace App\Controller;

use App\Entity\BilanDeSoin;
use App\Form\BilanDeSoinType;
use App\Repository\BilanDeSoinRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\Serializer\SerializerInterface;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\Extension\Core\Type\SearchType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Dompdf\Dompdf;
use Dompdf\Options;
use MercurySeries\FlashyBundle\FlashyNotifier;
use \Swift_Mailer;
use PHPMailer\PHPMailer\PHPMailer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/bilan/de/soin')]
class BilanDeSoinController extends AbstractController
{





    #[Route('/Bilans', name: 'app_bilan_de_soin_index', methods: ['GET'])]
    public function list(Request $request, BilanDeSoinRepository $repository, PaginatorInterface $paginator): Response
    {
        $form = $this->createFormBuilder()
            ->add('search', SearchType::class, [
                'label' => false,
                'required' => false,
                'attr' => [
                    'placeholder' => 'Rechercher...',
                    'class' => 'form-control mr-sm-2',
                    'aria-label' => 'Recherche',
                ],
            ])
            ->getForm();

        $searchTerm = null;
        $bilans = [];

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $searchTerm = $form->getData()['search'];
            $bilans = $repository->findBySearchTerm($searchTerm);
        }

        $pagination = $paginator->paginate(
            $bilans ?: $repository->findAll(),
            $request->query->getInt('page', 1),
            8 // Nombre d'éléments par page
        );

        return $this->render(
            'admin/Bilans.html.twig',
            [
                'pagination' => $pagination,
                'form' => $form->createView(),
            ]
        );
    }



    #[Route('/newBilanClient', name: 'app_bilan_de_soin_new', methods: ['GET', 'POST'])]
    public function newBC(Request $request, BilanDeSoinRepository $bilanDeSoinRepository, FlashyNotifier $flashy): Response
    {
        $bilanDeSoin = new BilanDeSoin();
        $form = $this->createForm(BilanDeSoinType::class, $bilanDeSoin);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $bilanDeSoinRepository->save($bilanDeSoin, true);
            $flashy->success('Bilan creé avec succés!');
            return $this->redirectToRoute('app_bilan_de_soin_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('Client/NewBilan.html.twig', [
            'bilan_de_soin' => $bilanDeSoin,
            'form' => $form,
        ]);
    }



    #[Route('/newBilanAdmin', name: 'app_bilan_de_soin_new2', methods: ['GET', 'POST'])]
    public function newBA(Request $request, BilanDeSoinRepository $bilanDeSoinRepository, FlashyNotifier $flashy): Response
    {
        $bilanDeSoin = new BilanDeSoin();
        $form = $this->createForm(BilanDeSoinType::class, $bilanDeSoin);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $bilanDeSoinRepository->save($bilanDeSoin, true);
            $flashy->success('Bilan creé avec succés!', 'http://your-awesome-link.com');

            return $this->redirectToRoute('app_bilan_de_soin_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('bilan_de_soin/new.html.twig', [
            'bilan_de_soin' => $bilanDeSoin,
            'form' => $form,
        ]);
    }

    #[Route('/{id}/showBilans', name: 'app_bilan_de_soin_showA', methods: ['GET'])]
    public function showA(BilanDeSoin $bilanDeSoin): Response
    {
        return $this->render('bilan_de_soin/show.html.twig', [
            'bilan_de_soin' => $bilanDeSoin,

        ]);
    }


    //Admin
    #[Route('/{id}/show', name: 'app_bilan_de_soin_show', methods: ['GET'])]
    public function show(BilanDeSoin $bilanDeSoin): Response
    {
        return $this->render('Client/BilanDeSoin.html.twig', [
            'bilan_de_soin' => $bilanDeSoin,
        ]);
    }

    //Admin
    #[Route('/{id}/edit', name: 'app_bilan_de_soin_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, BilanDeSoin $bilanDeSoin, BilanDeSoinRepository $bilanDeSoinRepository, FlashyNotifier $flashy, \Swift_Mailer $mailer): Response
    {
        $form = $this->createForm(BilanDeSoinType::class, $bilanDeSoin);
        $form->handleRequest($request);
        // $message = (new \Swift_Message('Bilan mis a jouuur'))
        //     ->setFrom('benkhemisseif@gmail.com')
        //     ->setTo('waelsalem162@gmail.com')
        //     ->setBody(
        //         $this->renderView(
        //             'admin/email.html.twig',

        //         ),
        //         'text/html'
        //     );

        // $mailer->send($message);

        $mailer = new PHPMailer();
        $mailer->isSMTP();
        $mailer->Host = 'smtp.gmail.com';
        $mailer->SMTPAuth = true;
        $mailer->Username = 'benkhemisseif@gmail.com';
        $mailer->Password = 'vnjwekvwzfcyrtds';
        $mailer->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mailer->Port = 587;
        $mailer->setFrom('benkhemisseif@gmail.com');
        $mailer->addAddress('waelsalem162@gmail.com');
        $mailer->Subject = 'update bilan';
        $mailer->Body = 'mise a jour';
        $mailer->send();
        if ($form->isSubmitted() && $form->isValid()) {
            $bilanDeSoinRepository->save($bilanDeSoin, true);
            $flashy->warning('Bilan modifié avec succés!');
            return $this->redirectToRoute('app_bilan_de_soin_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('bilan_de_soin/edit.html.twig', [
            'bilan_de_soin' => $bilanDeSoin,
            'form' => $form,
        ]);
    }

    //Admin
    #[Route('/{id}/delete', name: 'app_bilan_de_soin_delete', methods: ['POST'])]
    public function delete(Request $request, BilanDeSoin $bilanDeSoin, BilanDeSoinRepository $bilanDeSoinRepository, FlashyNotifier $flashy): Response
    {
        if ($this->isCsrfTokenValid('delete' . $bilanDeSoin->getId(), $request->request->get('_token'))) {
            $bilanDeSoinRepository->remove($bilanDeSoin, true);
            $flashy->error('Bilan supprimé avec succés!');
        }

        return $this->redirectToRoute('app_bilan_de_soin_index', [], Response::HTTP_SEE_OTHER);
    }
}
