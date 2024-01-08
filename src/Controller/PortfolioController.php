<?php

namespace App\Controller;

use App\Form\PortType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PortfolioController extends AbstractController
{
    #[Route('/portfolio', name: 'app_portfolio')]
    public function index(): Response
    {
        $form = $this->createForm(PortType::class);
        return $this->render('portfolio/index.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
