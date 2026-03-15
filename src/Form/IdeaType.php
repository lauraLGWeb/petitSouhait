<?php

namespace App\Form;

use App\Entity\Gift;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Entity\User;

class IdeaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
             ->add('title', TextType::class, [
                'attr' => ['placeholder' => 'Tablette de chocolat noir Valrhona'],
            ])
            ->add('picture', TextType::class, [
                'attr' => ['placeholder' => 'copier l\'ADRESSE de l\'image'],
            ])
            ->add('price', NumberType::class, [
                'attr' => [
                    'placeholder' => 'Juste pour donner une idée',
                    'currency' => 'EUR',
                    'step' => '0.01',  // permet les décimales
                    'min' => '0',       // pas de prix négatif
                    ],
            ])
            ->add('comment', TextType::class, [
                'attr' => ['placeholder' => 'Pourquoi cette idée te ferait plaisir ?'],
            ])
            ->add('user', EntityType::class, [
                    'class'        => User::class,
                    'choice_label' => 'firstName',  // affiche le prénom dans le select
                    'label'        => 'Pour qui ?',
                    'placeholder'  => '-- Choisir une personne --',
])

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Gift::class,
        ]);
    }
}
