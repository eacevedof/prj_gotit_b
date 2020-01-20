<?php

namespace App\Controller\Priv;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PannelController extends AbstractController
{
    /**
     * @Route("/pannel", name="pannel")
     */
    public function index()
    {
        return $this->render('priv/pannel/index.html.twig', [
            'controller_name' => 'PannelController',
        ]);
    }
}
