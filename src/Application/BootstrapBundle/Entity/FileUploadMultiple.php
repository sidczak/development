<?php

namespace Application\BootstrapBundle\Entity;

use Symfony\Component\Validator\Mapping\ClassMetadata;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints as Assert;

class FileUploadMultiple
{
/*
    /**
     * @var string
     */
    private $files;
    
    /**
     * Set files
     *
     * @param string $files
     * @return FileUploadMultiple
     */
    public function setFiles($files)
    {
        $this->files = $files;
    }
    
    /**
     * Get files
     *
     * @return string 
     */
    public function getFiles()
    {
        return $this->files;
    }

    public static function loadValidatorMetadata(ClassMetadata $metadata)
    {
		$metadata->addPropertyConstraint('files', new NotBlank(array(
		    'message' => 'Please enter your files'
		)));
		$metadata->addPropertyConstraint('files', new Assert\Image());
		//$metadata->addPropertyConstraint('files', new Assert\File());
    }
}