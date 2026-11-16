<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Form\ajoutReparationType;

final class BaseController extends AbstractController
{
    #[Route('/', name: 'app_accueil')]
    public function index(): Response
    {
        return $this->render('base/index.html.twig', [
        ]);
    }

    #[Route('/ajoutReparation', name: 'app_reparation')]
    public function ajoutReparation(): Response
    {
        $form = $this->createForm(AjoutReparationType::class);
        return $this->render('base/AjoutReparation.html.twig', [
            'form' =>$form->createView(),
        ]);
    }
}
