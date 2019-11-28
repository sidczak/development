<?php

namespace Application\BootstrapBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class FileUploadType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
    	$builder->add('file', 'file');
        //$builder->add('file', 'file', array('attr' => array('multiple' => 'multiple')));
        
    }
    public function getName()
    {
        return 'fileupload';
    }
}