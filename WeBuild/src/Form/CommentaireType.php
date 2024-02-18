<?php

namespace App\Form;

use App\Entity\Commentaire;
use App\Entity\Post;
use Doctrine\ORM\Mapping\Entity;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType as TypeEntityType;

class CommentaireType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('contenu')
            ->add('datecreation')
            ->add('nom')
            ->add('nbrlikes')
            ->add('nbrdislikes')
            ->add('Post', TypeEntityType::class, [
                // looks for choices from this entity
                'class' => Post::class ,  'choice_label' => 'titre'        
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Commentaire::class,
        ]);
    }
}
