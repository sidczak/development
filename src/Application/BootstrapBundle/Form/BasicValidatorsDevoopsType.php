<?php

namespace Application\BootstrapBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class BasicValidatorsDevoopsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('username');
        $builder->add('country', 'choice', array(
		    'choices' => array(
		    	'' => '-- Select a country --', 
		    	'fr' => 'France',
        		'de' => 'Germany', 
		    	'it' => 'Italy',
		    	'jp' => 'Japan',
		    	'ru' => 'Russia',
		    	'gb' => 'United Kingdom',
		    	'us' => 'United State'
            ),
		    'required'  => false,
		));
        
        $builder->add('accept_terms', 'checkbox', array(
		    'label'     => 'Accept the terms and policies ',
		    //'attr'      => array('checked'   => 'checked'),
		));

        $builder->add('email', 'email');
        $builder->add('website');
        $builder->add('phone_number');
        $builder->add('zip_code');
        
        $builder->add('password', 'repeated', array(
		    'type' => 'password',
		    'invalid_message' => 'The password and its confirm are not the same',
		    'first_options'  => array('label' => 'Password'),
		    'second_options' => array('label' => 'Retype password'),
		));
		
        /*
		$builder->add('password', 'repeated', array(
		    'type' => 'password',
		    'first_name' => 'first',
			'second_name' => 'second',
		));
		*/
		
        $builder->add('age');
    }
    public function getName()
    {
        return 'basicvalidatorsdevoops';
    }
}