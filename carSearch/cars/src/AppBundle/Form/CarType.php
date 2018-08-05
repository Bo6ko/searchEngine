<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\NumberType;

class CarType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {

        $builder->add('mark', null, ['placeholder' => '- избери -'])
                ->add('engine', null, ['placeholder' => '- избери -'])
                ->add('color', null, ['placeholder' => '- избери -']);
    }
/*
    public function configureOptions(OptionsResolver $resolver) {

        $resolver->setDefault(
            ['data_class' => User::class]
            );

    }
*/


}