<?php

namespace App\Form;

use App\Entity\Perso;
use App\Helper\PersoHelper;
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
                'placeholder' => 'Choisir...',
                'choices' => array_combine(
                    array_map(fn(string $x) => "perso.class." . $x, PersoHelper::getClasses()),
                    PersoHelper::getClasses()
                )
            ])

            ->add('clan', ChoiceType::class,
            [
                'label' => "Votre clan",
                'placeholder' => 'Choisir...',
                'choices' => array_combine(
                    array_map(fn(string $x) => "perso.clan." . $x, PersoHelper::getClans()),
                    PersoHelper::getClans()
                )
            ])

            ->add('sex', ChoiceType::class,
            [
                'label' => "Votre sex",
                'placeholder' => 'Choisir...',
                'choices' => array_combine(
                    array_map(fn(string $x) => "perso.sex." . $x, PersoHelper::getSexes()),
                    PersoHelper::getSexes()
                )
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
