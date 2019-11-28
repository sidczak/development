<?php

namespace Application\BootstrapBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class JobType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('category', 'choice', array(
			    'choices' => array('' => '-- Select category --', 'design' => 'Design', 'programming' => 'Programming', 'manager' => 'Manager'),
			    'expanded' => false,
			    'multiple' => false
			))
            ->add('programming_languages', 'choice', array(
	            'attr' => array('size' => '8'),
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
            	'expanded' => false,
			    'multiple' => true
            ))
			->add('gender', 'choice', array(
			    'choices' => array('m' => 'Male', 'f' => 'Female'),
			    'expanded' => true,
			    'multiple' => false
			))
            ->add('type', 'choice', array(
            	'choices' => array('full-time' => 'Full time', 'part-time' => 'Part time', 'freelance' => 'Freelance'),
            	'expanded' => true,
			    'multiple' => true
            ))
            ->add('company')
            ->add('logo', 'file')
            ->add('url')
            ->add('position')
            ->add('location', null, array('disabled' => 'true'))
            ->add('description', 'textarea', array('attr' => array('rows' => '3')))
            ->add('how_to_apply', 'textarea', array('attr' => array('rows' => '3')))
            ->add('token')
            ->add('is_public', 'checkbox', array(
			    'label' => 'Whether the job can also be published on affiliate websites or not.',
			))
            ->add('is_activated', 'checkbox', array(
			    'label' => 'Accept the terms and policies ',
			    'attr' => array('checked'   => 'checked'),
			))
            ->add('email')
            ->add('expires_at', 'datetime', array(
                'empty_value' => array('year' => 'Year', 'month' => 'Month', 'day' => 'Day', 'hour' => 'Hour', 'minute' => 'Minute', 'second' => 'Second'),
                'with_seconds' => true
            ))
            ->add('created_at', 'date', array(
                'empty_value' => array('year' => 'Year', 'month' => 'Month', 'day' => 'Day')
            ))
            ->add('updated_at', 'date', array(
			    'widget' => 'single_text',
			    // this is actually the default format for single_text
			    //'format' => 'yyyy/MM/dd',
			    'format' => 'yyyy/MM/dd hh:mm',
                //'attr' => array('placeholder': 'Twoja wiadomość'),
                'attr' => array('placeholder' => 'YYYY/MM/DD HH:MM'),
		        'invalid_message' => 'The updated at is not valid',
		    ))
        ;
    }

    public function getName()
    {
        return 'job';
    }
    
}


