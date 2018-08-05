<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\CallbackTransformer;
use AppBundle\Transformer\TagsTransformer;

class TagType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {

        $builder->add('tags', TextType::class)
                ->add('Save', SubmitType::class);
        
        $builder->get('tags')->addModelTransformer(new TagsTransformer());
        
    }
/*
    public function configureOptions(OptionsResolver $resolver) {

        $resolver->setDefault(
            ['data_class' => User::class]
            );

    }
*/


}