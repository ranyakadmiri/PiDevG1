<?php

namespace App\Form;

use App\Entity\Assurance;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AssuranceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Nom', TextType::class, ["attr" =>
            ["class" => "form-control"]])
            ->add('description', TextareaType::class, ["attr" =>
            ["class" => "form-control"]])
            ->add('image', TextType::class)
            ->add('condition_age', TextType::class, ["attr" =>
            ["class" => "form-control"]])
            ->add('condition_medicale', TextType::class, ["attr" =>
            ["class" => "form-control"]])
            ->add('condition_financiere', TextType::class, ["attr" =>
            ["class" => "form-control"]])
            ->add('duree_couv')
            ->add('franchise', TextType::class, ["attr" =>
            ["class" => "form-control"]])
            ->add('prime', TextType::class, ["attr" =>
            ["class" => "form-control"]]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Assurance::class,
        ]);
    }
}
