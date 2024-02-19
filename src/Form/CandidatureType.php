<?php

namespace App\Form;

use App\Entity\Candidature;
use App\Entity\Offre;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType; 


class CandidatureType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('id_client')
            ->add('Description')
            ->add('Competences')
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
