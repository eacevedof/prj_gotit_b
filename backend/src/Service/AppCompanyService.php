<?php
namespace App\Service;

use App\Service\BaseService;

use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

use App\Entity\AppCompany;
use App\Form\SignupType as SigunpForm;

final class AppCompanyService extends BaseService
{
    public function __construct($arinput = []) {
        parent::__construct($arinput);
    }
    
    public function insert()
    {
        $container = $this->arinput["container"];
        $request = $this->arinput["request"];
        $encoder = $this->arinput["encoder"];
        
        $company = new AppCompany();
        $form = $container->get("form.factory")->create(SigunpForm::class, $company);
        $form->handleRequest($request);
        //$form = $this->createForm(SignupType::class,$company);
        
       
        if($form->isSubmitted() && $form->isValid())
        {

            $company->setRole("ROLE_USER");
            $passencoded = $encoder->encodePassword($company,$company->getPassword());
            $company->setPassword($passencoded);
            
            $em = $container->get('doctrine')->getManager();
            $em->persist($company);

            $em->flush();
            
            //return $this->redirectToRoute("pub_index");
            $this->aroutput["insert"]="ok";
        }

        $this->aroutput["form"] = $form;
    }
    
    public function update(){}
    
    public function delete(){}
    
    public function select(){}
    
}