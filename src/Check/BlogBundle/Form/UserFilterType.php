<?php

namespace Check\BlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormError;
use Lexik\Bundle\FormFilterBundle\Filter\Form\Type as Filters;


class UserFilterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username', Filters\TextFilterType::class)
            ->add('email', Filters\TextFilterType::class)
            ->add('password', Filters\TextFilterType::class)
            ->add('firstname', Filters\TextFilterType::class)
            ->add('lastname', Filters\TextFilterType::class)
            ->add('created', Filters\TextFilterType::class)
            ->add('updated', Filters\TextFilterType::class)
            ->add('id', Filters\NumberFilterType::class)
        ;


    }

    public function getBlockPrefix()
    {
        return 'check_blogbundle_userfiltertype';
    }
    
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'csrf_protection' => false,
            'validation_groups' => array('filtering') // avoid NotBlank() constraint-related message
        ));
    }
}
