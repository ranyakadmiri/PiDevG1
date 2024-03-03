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
    $fieldAttributes = [
        'class' => 'form-control',
        'placeholder' => 'Placeholder...',
        'style' => 'border-color: white;', // Add white border color
    ];

    $builder
       
        ->add('title', null, [
            'label' => 'Title',
            'attr' => $fieldAttributes,
            'constraints' => [
                new NotBlank(['message' => 'Le titre ne peut pas être vide']),
            ],
        ])
        ->add('description', null, [
            'label' => 'Description',
            'attr' => $fieldAttributes,
            'constraints' => [
                new NotBlank(['message' => 'La description ne peut pas être vide']),
            ],
        ])
        ->add('salary', null, [
            'label' => 'Salaire',
            'attr' => $fieldAttributes,
            'constraints' => [
                new PositiveOrZero(['message' => 'Le salaire doit être un nombre positif ou zéro']),
                new NotBlank(['message' => 'Le salaire ne peut pas être vide']),
            ],
        ])
        ->add('latitude', null, [
            'label' => 'Latitude',
            'attr' => $fieldAttributes,
            'constraints' => [
                new NotBlank(['message' => 'La latitude ne peut pas être vide']),
            ],
        ])
        ->add('longtitude', null, [
            'label' => 'Longtitude',
            'attr' => $fieldAttributes,
            'constraints' => [
                new NotBlank(['message' => 'La longitude ne peut pas être vide']),
            ],
        ])
    ;
}

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Offre::class,
        ]);
    }
}

