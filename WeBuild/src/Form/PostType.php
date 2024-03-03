<?php

namespace App\Form;

use App\Entity\Post;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Validator\Constraints\GreaterThanOrEqual;
use Symfony\Component\Form\Extension\Core\Type\DateType;


class PostType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('titre', TextType::class, [
            'constraints' => [
                new Length([
                    'max' => 100,
                    'maxMessage' => 'Le titre ne peut pas dépasser {{ limit }} caractères',
                ]),
                new Regex([
                    'pattern' => '/^[a-zA-Z\s]+$/',
                    'message' => 'Le titre doit contenir uniquement des lettres et des espaces',
                ]),
            ],
        ])
           /* ->add('description')/*/
           ->add('description', TextType::class, [
            'constraints' => [
                new Length([
                    'max' => 255,
                    'maxMessage' => 'La description ne peut pas dépasser {{ limit }} caractères',
                ]),
            ],
        ])
          /*  ->add('auteur')*/
          ->add('auteur', TextType::class, [
            'constraints' => [
                new Length([
                    'min' => 2,
                    'minMessage' => 'L\'auteur doit contenir au moins {{ limit }} lettres',
                ]),
                new Regex([
                    'pattern' => '/^[a-zA-Z\s]+$/',
                    'message' => 'L\'auteur doit contenir uniquement des lettres',
                ]),
            ],
        ])
            
           /* ->add('date')*/
           ->add('date', DateType::class, [
            'widget' => 'single_text',
            'constraints' => [
                new GreaterThanOrEqual([
                    'value' => new \DateTime('today midnight'),
                    'message' => 'La date ne peut pas être dans le passé',
                ]),
            ],
        ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Post::class,
        ]);
    }
}