<?php

namespace Application\BootstrapBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class FileUploadMultipleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
    	//$builder->add('files', 'file');
        $builder->add('files', 'file', array('attr' => array('multiple' => 'multiple')));
        
    }
    public function getName()
    {
        return 'fileupload';
    }
}