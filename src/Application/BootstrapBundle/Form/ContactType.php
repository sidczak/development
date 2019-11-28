<?php

namespace Application\BootstrapBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name');
        $builder->add('phone');
    	$builder->add('email', 'email');
        $builder->add('message', 'textarea', array(
        	'attr' => array('class' => 'form-control', 'rows' => '10'),
            'label_attr' => array('class' => 'label_class')
        ));
    }
    public function getName()
    {
        return 'contact';
    }
}