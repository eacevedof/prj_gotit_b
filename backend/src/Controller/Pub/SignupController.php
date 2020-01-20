<?php

namespace App\Controller\Pub;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SignupController extends AbstractController
{
    /**
     * @Route("/signup", name="signup")
     */
    public function index()
    {
        return $this->render('pub/signup/index.html.twig', [
            'controller_name' => 'SignupController',
        ]);
    }
}
