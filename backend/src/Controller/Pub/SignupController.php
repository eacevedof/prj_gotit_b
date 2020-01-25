<?php

namespace App\Controller\Pub;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use App\Entity\AppCompany;
use App\Form\SignupType;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SignupController extends AbstractController
{

    public function index(Request $request, UserPasswordEncoderInterface $encoder)
    {
   
        $company = new AppCompany();
        $form = $this->createForm(SignupType::class,$company);
        
        $form->handleRequest($request);
        
        //if($form->isSubmitted() && $form->isValid())
        if($form->isSubmitted())
        {
//var_dump($_POST);
//die("xxx");                 
            $company->setRole("ROLE_USER");
            $passencoded = $encoder->encodePassword($company,$company->getPassword());
            $company->setPassword($passencoded);
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($company);

            $em->flush();
            
            return $this->redirectToRoute("pub_index");
        }
        
        return $this->render('pub/signup/index.html.twig', [
            "pagetitle" => "Signup form",
            "form" => $form->createView()
        ]);
    }
}
