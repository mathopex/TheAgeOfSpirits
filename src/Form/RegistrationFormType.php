<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder

        ->add('name', TextType::class,
            [
                'label' => "Votre nom",
            ])

        ->add('firstname', TextType::class,
            [
                'label' => "Votre prénom",
            ])
            ->add('civility', ChoiceType::class, [
                'label' => "votre Civilité",
               'choices' => 
               [
                   'Mr'=>'Monsieur',
                   'Mme'=>'Madame'
               ]
            ])
        
        ->add('address', TextType::class,
        [
            'label' => "Votre adresse",
        ])
        ->add('email', EmailType::class,
        [
            'label' => "Votre Email",
        ])
        ->add('password', RepeatedType::class,
        [
            'type' => PasswordType::class,
            'invalid_message'=>"Les mots de passes ne sont pas identiques",
            'mapped'=>false,
            'first_options'=>
            [
                'label' => "Mot de passe",
                'attr' => ['autocomplete' => 'new-password'],
                'help' => "Minimum 6 caractères",
                'constraints'=>
                [
                    new NotBlank(
                        [
                            'message'=>"Entrez votre mot de passe",
                        ]),
                    new Length(
                    [
                        'min'=> 6,
                        'minMessage'=>"le mot de passe doit faire minimum {{ limit }} caractères",
                        'max' =>4096,
                    ]),
                ],
            ],
            'second_options'=>
            [
                'label'=>"Confirmez votre mot de passe",
                'attr'=>['autocomplete'=>'new-password'],
            ]
        ])
        ->add('phoneNumber', TextType::class,
        [
            'label' => "Votre Numero de telephone",
        ])
     

       ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class'=>User::class,
        ]);
    }
}
