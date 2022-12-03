<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PaymentFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('firstname', null, [
                'label' => 'Prénom',
                'attr' => [
                    'placeholder' => 'Prénom',
                ],
            ])

            ->add('lastname', null, [
                'label' => 'Nom',
                'attr' => [
                    'placeholder' => 'Nom',
                ],
            ])

            ->add('address', null, [
                'label' => 'Adresse postale',
                'attr' => [
                    'placeholder' => 'Adresse postale',
                ],
            ])

            ->add('city', null, [
                'label' => 'Ville',
                'attr' => [
                    'placeholder' => 'Ville',
                ],
            ])

            ->add('zip', null, [
                'label' => 'Code postal',
                'attr' => [
                    'placeholder' => 'Code postal',
                ],
            ])

            ->add('country', null, [
                'label' => 'Pays',
                'attr' => [
                    'placeholder' => 'Pays',
                ],
            ])

            ->add('phone', null, [
                'label' => 'Téléphone',
                'attr' => [
                    'placeholder' => 'Téléphone',
                ],
            ])

            ->add('email', null, [
                'label' => 'Email',
                'attr' => [
                    'placeholder' => 'Email',
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
