<?php

namespace App\Form;

use App\Entity\Animals;
use App\Entity\AnimalsCategory;
use Doctrine\ORM\Mapping\Entity;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AnimalsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('NomAnimal')
            ->add('DateDeNaissance')
            ->add('GenreAnimal')
            ->add('category', EntityType::class, [
                'class' => AnimalsCategory::class,
                'choice_label' => function (AnimalsCategory $category) {
                    return $category->getEspece() . ' - ' . $category->getRace();
                },
            ])
            
            ->add('EstSterilise')
            ->add('EstVaccine')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Animals::class,
        ]);
    }
}
