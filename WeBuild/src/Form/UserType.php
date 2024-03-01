<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        
            ->add('nom')
            ->add('prenom')
            ->add('telephone')
            ->add('cin')
            ->add('date', DateType::class,[
                'years' => range(date('Y') - 60, date('Y'))
            ])
            ->add('address', CountryType::class, [
                'label' => 'Address',
                'placeholder' => 'Choose your country', 
            ])
            ->add('bio')
            ->add('fonction')
            ->add('email')
            
            ->add('isVerified')
            ->add('isBanned')


            
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
