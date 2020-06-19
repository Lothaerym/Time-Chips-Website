<?php

namespace App\Form;

use App\Entity\Information;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class InformationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('mondayStart', TextType::class)
            ->add('mondayEnd')
            ->add('tuesdayStart')
            ->add('tuesdayEnd')
            ->add('wednesdayStart')
            ->add('wednesdayEnd')
            ->add('fridayStart')
            ->add('fridayEnd')
            ->add('saturdayStart')
            ->add('saturdayEnd')
            ->add('sundayStart')
            ->add('sundayEnd')
            ->add('phone')
            ->add('address')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Information::class,
        ]);
    }
}
