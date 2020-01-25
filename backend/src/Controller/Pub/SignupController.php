<?php

namespace App\Controller\Pub;

use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
//use Symfony\Component\Routing\Annotation\Route;
//use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;


//use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

use App\Service\AppCompanyService;

class SignupController extends AbstractController
{

    public function index(Request $request, UserPasswordEncoderInterface $encoder)
    {
        
        $service = new AppCompanyService(["request"=>$request,"encoder"=>$encoder,"container"=>$this->container]);
        $service->insert();
        $output = $service->getOutput();
        //var_dump($output);die;
        
        return $this->render('pub/signup/index.html.twig', [
            "pagetitle" => "Signup form",
            "form" => $output["form"]->createView()
        ]);
    }
}
