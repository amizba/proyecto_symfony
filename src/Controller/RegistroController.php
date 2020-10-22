<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class RegistroController extends AbstractController
{
    /**
     * @Route("/registro", name="registro")
     */
    public function index()
    {
        return $this->render('registro/index.html.twig', [
            'controller_name' => 'RegistroController',
        ]);
    }
}
