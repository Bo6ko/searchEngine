<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use AppBundle\Entity\Review;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class UserType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {

        $builder->add('first_name', TextType::class,
            array('attr' => array('class' => 'form-control',
                                    'id' => 'exampleInputEmail1',
                                    'placeholder' => 'first name',
                                    'style' => 'margin: 15px 0px 0px 20px')))
                ->add('last_name', TextType::class,
            array('attr' => array('class' => 'form-control',
                                    'id' => 'exampleInputEmail1',
                                    'placeholder' => 'last name',
                                    'style' => 'margin: 15px 0px 0px 22px')))
                ->add('color', ChoiceType::class,
                    array('choices' => array('blue' => 'blue', 'green' => 'green', 'red' => 'red',
                        'yellow' => 'yellow', 'black' =>'black', 'white' => 'white'),
                        'attr' => array('class' => 'form-control',
                                    'id' => 'exampleInputEmail1',
                                    'style' => 'margin: 15px 0px 15px 55px')
                    ));

    }
/*
    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefault(
            array('data_class' => Review::class)
            );
    }
*/

    public function getName()
    {
        return 'app_bundle_review_type';
    }

}