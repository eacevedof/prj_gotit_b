<?php

namespace App\Form;

use App\Entity\AppUser;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AppUserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
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
            ->add('name')
            ->add('email')
            ->add('password')
            ->add('nickname')
            ->add('notes')
            ->add('phone')
            ->add('urlProfile')
            ->add('idStatus')
            ->add('role')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => AppUser::class,
        ]);
    }
}
