<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ParticularController extends AbstractController
{
    /**
     * @Route("/particular", name="app_particular")
     */
    public function index(): Response
    {
        return $this->render('particular/index.html.twig', [
            'controller_name' => 'ParticularController',
        ]);
    }
}
