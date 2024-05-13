<?php

namespace App\Form;

use App\Entity\Assurance;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class AssuranceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Nom', TextType::class, ["attr" =>
            ["class" => "form-control"]])
            ->add('description', TextareaType::class, ["attr" =>
            ["class" => "form-control"]])
            // Add image field to your form type

            ->add('image', FileType::class, [
                'label' => 'Image (JPEG, PNG)',
                'mapped' => false, // Tell Symfony not to try to map this field to any entity property
                'required' => false, // This field is not required
            ])
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
