<?php

namespace App\Form;

use App\Entity\Equipe;
use App\Entity\Utilisateur;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UtilisateurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('cin')
            ->add('fonction', ChoiceType::class, [
                'choices' =>[
                    'Chef Chantier'=> 'Chef Chantier',
                    'Technicien'=> 'Technicien',
                    'Ouvrier de batiment'=>'Ouvrier de batiment',
                    'Peintre'=>'Peintre',
                    'Electricient'=>'Electricient',
                    'Charpentier'=>'Charpentier',
                    'client'=>'client',
                ],
                'placeholder'=> 'Select a fonction',
            ])
            ->add('equipe', EntityType::class, [
                // looks for choices from this entity
                'class' => Equipe::class ,  'choice_label' => 'nom'
                  
            ])
            ->add('mot_de_passe')
            ->add('email')
            ->add('save', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Utilisateur::class,
        ]);
    }
}
