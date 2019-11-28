<?php

namespace Application\BootstrapBundle\Entity;

use Symfony\Component\Validator\Mapping\ClassMetadata;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints as Assert;

class FileUpload
{
    /**
     * @var string
     */
    private $file;
    
    /**
     * Set file
     *
     * @param string $file
     * @return FileUpload
     */
    public function setFile($file)
    {
        $this->file = $file;
    }
    
    /**
     * Get file
     *
     * @return string 
     */
    public function getFile()
    {
        return $this->file;
    }

    public static function loadValidatorMetadata(ClassMetadata $metadata)
    {
		$metadata->addPropertyConstraint('file', new NotBlank(array(
		    'message' => 'Please enter your file'
		)));
		$metadata->addPropertyConstraint('file', new Assert\Image());
		//$metadata->addPropertyConstraint('file', new Assert\File());
    }
}