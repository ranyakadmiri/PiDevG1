<?php

namespace App\Form;

use App\Entity\Candidature;
use App\Entity\Offre;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\component\Validator\Constraints as Assert;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Regex;

class CandidatureType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('id_client')
            ->add('Description',null,['constraints' => [
                new Length([
                    'min' => 14,
                    'minMessage' => 'La description doit dépasser {{ limit }} caractères',
                    
                ])]
                ])
            ->add('Competences', TextType::class, [
                'constraints' => [
                    new Length([
                        'max' => 255,
                        'maxMessage' => 'Les competences  ne peuvent pas dépasser {{ limit }} caractères',
                    ]),
                    new NotBlank(['message' => 'Les competences ne peuvent pas être vide']),
                   
                ],
            ])
            ->add('email')
            ->add('offre',EntityType::class, [
                // looks for choices from this entity
                'class' => Offre::class ,  'choice_label' => 'title' ,'placeholder' => 'Choose an Offre','mapped' => false,       
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Candidature::class,
        ]);
    }
}
