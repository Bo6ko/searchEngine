<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class ColorType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {

        $builder->add('name', TextType::class);
    }
/*
    public function configureOptions(OptionsResolver $resolver) {

        $resolver->setDefault(
            ['data_class' => User::class]
            );

    }
*/


}