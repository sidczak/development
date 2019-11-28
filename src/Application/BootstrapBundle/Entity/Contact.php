<?php

namespace Application\BootstrapBundle\Entity;

use Symfony\Component\Validator\Mapping\ClassMetadata;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Email;

class Contact
{
    protected $name;
    
    protected $phone;
	
	protected $email;

    protected $message;

    public function getName()
    {
        return $this->name;
    }
    
    public function getPhone()
    {
        return $this->phone;
    }

    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
    
    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getMessage()
    {
        return $this->message;
    }

    public function setMessage($message)
    {
        $this->message = $message;
    }

    public static function loadValidatorMetadata(ClassMetadata $metadata)
    {
        $metadata->addPropertyConstraint('name', new NotBlank(array(
		    'message' => 'Please enter your name'
		)));

        $metadata->addPropertyConstraint('email', new NotBlank(array(
		    'message' => 'Please enter your email address'
		)));
        $metadata->addPropertyConstraint('email', new Email(array(
		    'message' => 'Not a valid email address'
		)));

        $metadata->addPropertyConstraint('message', new NotBlank(array(
		    'message' => 'Please enter your message'
		)));
    }    
}