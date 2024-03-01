<?php

namespace App\Form;

use App\Entity\Offre;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\PositiveOrZero;
use Symfony\Component\Validator\Constraints\Range;

class OffreType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title', null, [
                'constraints' => [
                    new NotBlank(['message' => 'Le nom ne peut pas être vide']),
                ]
            ])
            ->add('description', null, [
                'constraints' => [
                    new NotBlank(['message' => 'La description ne peut pas être vide']),
                ]
            ])
            ->add('salary', null, [
                'constraints' => [
                    new PositiveOrZero(['message' => 'Le salaire doit être un nombre positif ou zéro']),
                    new NotBlank(['message' => 'Le salaire ne peut pas être vide']),
                ]
            ])
            ->add('latitude', null, [
                'constraints' => [
                    new NotBlank(['message' => 'La latitude ne peut pas être vide']),
                  
                ],
            ])
            ->add('longtitude', null, [
                'constraints' => [
                    new NotBlank(['message' => 'La longitude ne peut pas être vide']),
                ],
                ])
                 // Add salary range filter fields
            ->add('minSalary', null, [
                'mapped' => false,
                'label' => 'Salaire minimum',
            ])
            ->add('maxSalary', null, [
                'mapped' => false,
                'label' => 'Salaire maximum',
            ]);
           
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Offre::class,
        ]);
    }
}

