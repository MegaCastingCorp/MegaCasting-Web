<?php

namespace App\Form;

use App\Entity\Users;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstname', TextType::class, [
                'label' => 'Prénom'
            ])
            ->add('lastname', TextType::class, [
                'label' => 'Nom de famille'
            ])
            ->add('username', TextType::class, [
                'label' => 'Username'
            ])
            ->add('password', TextType::class, [
                'label' => 'Mot de passe'
            ])
            //->add('Confirm_Password')
            ->add('email')
            ->add('birthdate', DateType::class, [
                'widget' => 'single_text',
                'label' => 'Date de naissance'
            ])
            //->add('avatar')
            ->add('identifiergender', ChoiceType::class, [
                'label' => 'Civilité',
                'choices'  => [
                    'Homme' => 1,
                    'Femme' => 2,
                    'Autre' => 3,
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Users::class,
        ]);
    }
}
