<?php

namespace App\Form;

use App\Entity\Perso;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PersoFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder

            ->add('pseudo', TextType::class,
            [
                'label' => "Votre pseudo",
            ])

            ->add('class', ChoiceType::class,
            [
                'label' => "Votre class",
                'choices' =>
                [
                    'Barbare' => 'Barbare',
                    'Archer' => 'Archer',
                    'Moine' => 'Moine'
                ]
            ])

            ->add('clan', ChoiceType::class,
            [
                'label' => "Votre clan",
                'choices' =>
                [
                    'Humain' => 'Humain',
                    'Esprit' => 'Esprit',
                ]
            ])

            ->add('sex', ChoiceType::class,
            [
                'label' => "Votre sex",
                'choices' =>
                [
                    'Homme' => 'Homme',
                    'Femme' => 'Femme',
                    'NonBinaire' => 'Non Binaire'
                ]
            ])

            ->add('height', TextType::class,
            [
                'label' => "Votre taille",
            ])

            ->add('weight', TextType::class,
            [
                'label' => "Votre poids",
            ])

            ->add('health', TextType::class, 
            [
                'label' => "Votre vie",
            ])

            ->add('attack', TextType::class,
            [
                'label' => "Votre attaque",
            ])

            ->add('defense', TextType::class,
            [
                'label' => "Votre défense",
            ])

            ->add('specialitis', TextType::class,
            [
                'label' => "Votre Spécialité",
            ])

            ->add('specialitis_value', TextType::class,
            [
                'label' => "Votre valeur de spécialité",
            ])

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' =>Perso::class,
        ]);
    }
}
