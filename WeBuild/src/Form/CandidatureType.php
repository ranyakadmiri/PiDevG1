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
use Symfony\Component\Form\Extension\Core\Type\FileType;


class CandidatureType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
              
             ->add('Description', null, [
                'label' => 'Description',
                'attr' => ['class' => 'form-control', 'placeholder' => 'Description...', 'rows' => 4],
                'constraints' => [
                    new Length(['min' => 14, 'minMessage' => 'La description doit dépasser {{ limit }} caractères']),
                ],
            ])
            ->add('Competences', FileType::class, [
                'label' => 'Votre CV',
                'mapped' => false,
                'required' => false,
                'constraints' => [
                    new Length(['max' => 255, 'maxMessage' => 'Les compétences ne peuvent pas dépasser {{ limit }} caractères']),
                    new NotBlank(['message' => 'Les compétences ne peuvent pas être vide']),
                ],
            ])
            ->add('email', EmailType::class, [
                'label' => 'Email',
                'attr' => ['class' => 'form-control', 'placeholder' => 'Email...'],
                'constraints' => [
                    new NotBlank(['message' => 'L\'email ne peut pas être vide']),
                    new Email(['message' => 'L\'email "{{ value }}" n\'est pas valide.']),
                ],
            ])
            ->add('offre', EntityType::class, [
                'class' => Offre::class,
                'choice_label' => 'title',
                'placeholder' => 'Choisir une offre',
                'attr' => ['class' => 'form-control'],
                'constraints' => [
                    new NotBlank(['message' => 'Vous devez choisir une offre']),
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Candidature::class,
        ]);
    }
}
