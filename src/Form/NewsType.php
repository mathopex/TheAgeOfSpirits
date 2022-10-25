<?php

namespace App\Form;

use App\Entity\News;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class NewsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add(
                'title',
                TextType::class,
                [
                    'label' => "Votre titre de newsletter",


                ]
            )


            ->add('message', TextareaType::class, [
                'label' => "Entrez votre news",
                'attr' => [

                    'rows' => 7,
                ]
            ])
            ->add('author', TextareaType::class, [
                'label' => "Nom de l'auteur",
                'attr' => [

                    'rows' => 7,
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => News::class,
        ]);
    }
}
