<?php
namespace App\Service;
use App\Service\BaseService;

use App\Entity\AppCompany;
use App\Form\SignupType as SigunpForm;

final class AppCompanyService extends BaseService
{
    public function __construct($arinput = []) 
    {
        parent::__construct($arinput);
    }
    
    public function insert()
    {
        /**
         * @var Symfony\Component\HttpFoundation\Request
         */
        $request = $this->arinput["request"];
        //@var Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
        $container = $this->arinput["container"];
        //@var Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
        $encoder = $this->arinput["encoder"];
        
        $company = new AppCompany();
        $form = $container->get("form.factory")->create(SigunpForm::class, $company);
        $form->handleRequest($request);
       
        if($form->isSubmitted() && $form->isValid())
        {
            $passencoded = $encoder->encodePassword($company,$company->getPassword());
            $company->setPassword($passencoded);
            $company->setRole("ROLE_USER");
            
            $em = $container->get("doctrine")->getManager();
            $em->persist($company);
            $em->flush();
            $this->log("loggggg","tiiiituu");
            $this->aroutput["inserted"] = true;
        }
        
        $this->aroutput["form"] = $form;
    }
    
    public function update(){}
    
    public function delete(){}
    
    public function select(){}
    
}