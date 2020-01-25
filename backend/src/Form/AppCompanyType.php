<?php

namespace App\Form;

use App\Entity\AppCompany;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AppCompanyType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('role')
            ->add('processflag')
            ->add('insertPlatform')
            ->add('insertUser')
            ->add('insertDate')
            ->add('updatePlatform')
            ->add('updateUser')
            ->add('updateDate')
            ->add('deletePlatform')
            ->add('deleteUser')
            ->add('deleteDate')
            ->add('cruCsvnote')
            ->add('isErpsent')
            ->add('isEnabled')
            ->add('i')
            ->add('codeErp')
            ->add('idSector')
            ->add('vat')
            ->add('name')
            ->add('email')
            ->add('password')
            ->add('nickname')
            ->add('contact')
            ->add('phone')
            ->add('idCountry')
            ->add('idCity')
            ->add('phoneTest')
            ->add('phoneToken')
            ->add('address')
            ->add('urlLogo')
            ->add('idStatus')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => AppCompany::class,
        ]);
    }
}
