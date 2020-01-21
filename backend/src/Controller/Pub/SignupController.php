<?php

namespace App\Controller\Pub;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use App\Entity\AppCompany;
use App\Form\SignupType;

class SignupController extends AbstractController
{

    public function index(Request $request)
    {
        $company = new AppCompany();
        $objform = $this->createForm(SignupType::class,$company);
        
        return $this->render('pub/signup/index.html.twig', [
            "pagetitle" => "Signup form",
            "form" => $objform->createView()
        ]);
    }
}
