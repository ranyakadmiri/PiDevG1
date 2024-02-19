<?php

namespace App\Form;

use App\Entity\Offre;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\PositiveOrZero;


class OffreType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title',null, [
                'constraints' => [
                    new NotBlank(['message' => 'Le nom ne peut pas être vide']),
                    new Regex([
                        'pattern' => '/^\pL+$/u',
                        'message' => 'Le nom ne peut contenir que des lettres'
                    ])
                ]
            ])
            ->add('description',null,['constraints' => [
                new Length([
                    'min' => 14,
                    'minMessage' => 'Le titre doit dépasser {{ limit }} caractères',
                ])]
                ])
            ->add('salary',null, ['constraints' => [
                    new PositiveOrZero(['message' => 'Le nombre de likes doit être un entier positif ou zéro']),
                    new NotBlank(['message' => 'Le nombre de likes ne peut pas être vide']),
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
