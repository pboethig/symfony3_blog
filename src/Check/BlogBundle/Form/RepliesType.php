<?php

namespace Check\BlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RepliesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('content')
            ->add('created')
            ->add('updated')
            ->add('userid')
            ->add('postid')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Check\BlogBundle\Entity\Replies'
        ));
    }

    public function getBlockPrefix()
    {
        return 'check_blogbundle_replies';
    }
}
