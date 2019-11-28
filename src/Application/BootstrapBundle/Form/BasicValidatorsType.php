<?php

namespace Application\BootstrapBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class BasicValidatorsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('first_name');
        
        $builder->add('last_name');
        
    	$builder->add('username');
        
        $builder->add('email', 'email');
        
        $builder->add('website', 'url');
        
        $builder->add('password', 'repeated', array(
		    'type'            => 'password',
		    'invalid_message' => 'The password and its confirm password are not the same',
		    'first_options'   => array('label' => 'Password'),
		    'second_options'  => array('label' => 'Retype password')
		));
		
		$builder->add('gender', 'choice', array(
		    'choices' => array('m' => 'Male', 'f' => 'Female'),
		    'expanded' => true,
		    'multiple' => false
		));
		
		$builder->add('age');
		
		$builder->add('birthday', 'date', array(
        	//'empty_value' => array('year' => 'Year', 'month' => 'Month', 'day' => 'Day'),
			'widget' => 'single_text',
			// this is actually the default format for single_text
			'format' => 'yyyy/MM/dd',
		    'invalid_message' => 'The birthday is not valid',
		));
		
		$builder->add('internet_browsers', 'choice', array(
		    'choices' => array(
		        ''              => '-- Select a internet browsers --',
		    	'ie'            => 'Internet Explorer',
		    	'firefox'       => 'Firefox',
		    	'google_chrome' => 'Google Chrome',
		    	'opera'         => 'Opera',
		    	'other'         => 'Other'
		    ),
		    'expanded' => false,
		    'multiple' => false
		));
		
		$builder->add('operating_system', 'choice', array(
		    'attr' => array('size' => '4'),    
		    'choices' => array(
		    	'dos'     => 'Dos',
		    	'windows' => 'Windows',
				'linux'   => 'Linux',
				'other'   => 'Other'
		    ),
		    'expanded' => false,
		    'multiple' => true
		));
		
		$builder->add('languages', 'choice', array(
		    'choices' => array(
		    	'en'    => 'English',
		    	'fr'    => 'French',
				'de'    => 'German',
				'ru'    => 'Russian',
				'other' => 'Other'
		    ),
		    'expanded' => true,
		    'multiple' => true
		));
		
		$builder->add('programming_languages', 'choice', array(
		    'choices' => array(
		    	'net'        => '.Net',
		    	'java'       => 'Java',
				'c_c++'      => 'C/C++',
				'php'        => 'PHP',
				'perl'       => 'Perl',
				'ruby'       => 'Ruby',
				'python'     => 'Python',
				'javascript' => 'Javascript'
		    ),
		    'expanded' => true,
		    'multiple' => true
		));
		
		$builder->add('comment', 'textarea', array(
		    'attr' => array('rows' => '3')
		));

    }
    public function getName()
    {
        return 'basicvalidators';
    }
}