<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class AjoutReparationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Type de réparation', TextType::class, ['attr' => ['class' => 'form-control'],'label_attr' => ['class' => 'form-label mt-4'],])
            ->add('Description', TextType::class, ['attr' => ['class' => 'form-control'],'label_attr' => ['class' => 'form-label mt-4'],])
            ->add('Date de dépot du vélo', DateType::class, ['attr' => ['class' => 'form-control'],'label_attr' => ['class' => 'form-label mt-4'],])
            ->add('Envoyer', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
