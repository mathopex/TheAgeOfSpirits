<?php

namespace App\Form;

use App\Entity\Contact;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', EmailType::class,
            [
                'label'=>"Votre email",
                'attr'=>
                [
                    'placeholder'=>"exemple@email.com",
                ],
            ])

            ->add('motif', ChoiceType::class,
            [
                'label'=>"Choisissez le motif de votre demande",
                'choices'=>
                [
                    'bug'=>'bug',
                    'signalement joueur pour racisme'=>'racisme',
                    'signalement joueur pour anthisemitisme'=>'anthisemitisme',
                    'signalement joueur pour popos injurieux/difamatoir'=>'injures_difamation',
                    'signalement joueur pour harcelement'=>'harclement',
                ],
            ])
            ->add('message', TextareaType::class, [
                'label' => "Entrez votre message",
                'attr' => [
                    'placeholder' => "Votre message...",
                    'rows' => 7,
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Contact::class,
        ]);
    }
}
