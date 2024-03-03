<?php

namespace App\Form;

use App\Entity\Commentaire;
use App\Entity\Post;
use Doctrine\ORM\Mapping\Entity;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType as TypeEntityType;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Validator\Constraints\LessThanOrEqual;
use Symfony\Component\Validator\Constraints\GreaterThanOrEqual;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Validator\Constraints\PositiveOrZero;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;


class CommentaireType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('contenu', null, [
    'constraints' => [
        new Regex([
            'pattern' => '/^\s*(?:\S\s*){3,}$/',
            'message' => 'Le contenu du commentaire doit avoir au moins 3 caractères, y compris les espaces',
        ]),
    ],
])
          /*  ->add('datecreation')*/
    
          
          // Inside your form type class method buildForm()
          ->add('datecreation', DateTimeType::class, [
              'widget' => 'single_text',
              'constraints' => [
                  new GreaterThanOrEqual([
                      'value' => 'today',
                      'message' => 'La date de création ne peut pas être dans le passé',
                  ]),
                  new LessThanOrEqual([
                      'value' => 'today',
                      'message' => 'La date de création ne peut pas être dans le futur',
                  ]),
              ],
          ])
          
          ->add('nom', null, [
            'constraints' => [
                new NotBlank(['message' => 'Le nom ne peut pas être vide']),
                new Length([ // Contrainte pour valider la longueur minimale
                    'min' => 2,
                    'minMessage' => 'Le nom doit avoir au moins 2 caractères.',
                ]),
                new Regex([ // Contrainte pour valider le format du nom
                    'pattern' => '/^[a-zA-Z\s]+$/',
                    'message' => 'Le nom ne peut contenir que des lettres et des espaces.'
                ])
            ]
        ])
            ->add('nbrlikes', IntegerType::class, [
                'constraints' => [
                    new PositiveOrZero(['message' => 'Le nombre de likes doit être un entier positif ou zéro']),
                    new NotBlank(['message' => 'Le nombre de likes ne peut pas être vide']),
                ],
            ])
            ->add('nbrdislikes', IntegerType::class, [
                'constraints' => [
                    new PositiveOrZero(['message' => 'Le nombre de dislikes doit être un entier positif ou zéro']),
                    new NotBlank(['message' => 'Le nombre de dislikes ne peut pas être vide']),
                ],
            ])
            ->add('rate', HiddenType::class, [
                'required' => false, // Le champ est caché mais toujours soumis
                'attr' => [
                    'class' => 'hidden-rate-field', // Classe CSS pour identifier le champ dans le JavaScript
                ],
            ]);
            
    
            /* ->add('Post', TypeEntityType::class, [
                // looks for choices from this entity
                'class' => Post::class ,  'choice_label' => 'titre',
                'constraints' => [
                    new NotBlank(['message' => 'Le post doit être sélectionné']) ]       
            ]); */
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Commentaire::class,
        ]);
    }
}
