<?php
namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class SignupType extends AbstractType {
    
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
            ->add("name", TextType::class, ["label"=>"Company"])
            ->add("vat", TextType::class, ["label"=>"Vat num"])
            ->add("email", EmailType::class, ["label"=>"Email","data"=>"eaf@ya.com"])
            ->add("password", PasswordType::class, ["label"=>"Password","required"=>true,])
            ->add("rep_password", PasswordType::class, ["label"=>"Repeat password","mapped"=>false,"required"=>true])
            ->add("submit", SubmitType::class, ["label"=>"Submit"])
            ;
    }
}