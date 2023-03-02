<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;


class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email')
            ->add('roles')
            ->add('password')
            ->add('FirestName')
            ->add('LastName')
            ->add('image', FileType::class, [
                'label' => 'Profile Picture',
                'required' => false,
            ])
            ->add('Adress')
            ->add('tel')
            ->add('DateOfBirth')
            ->add('PetsListId')
            ->add('IdContrat')
            ->add('paimentMethod')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
