<?php

namespace App\Controller\Pub;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class LoginController extends AbstractController
{
    /**
     * @Route("/login", name="login")
     */
    public function index()
    {
        return $this->render('pub/login/index.html.twig', [
            'controller_name' => 'LoginController',
        ]);
    }
}
