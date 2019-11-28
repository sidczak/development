<?php

namespace Application\BootstrapBundle\Entity;

use Symfony\Component\Validator\Mapping\ClassMetadata;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints as Assert;

class BasicValidatorsDevoops
{
    protected $username;
    
    protected $country;
    
    protected $accept_terms;
    
    protected $email;
    
    protected $website;
    
    protected $phone_number;
    
    protected $zip_code;
    
    protected $password;
    
    protected $age;

    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }
    
    public function getCountry()
    {
        return $this->country;
    }

    public function setCountry($country)
    {
        $this->country = $country;
    }
    
    public function getAcceptTerms()
    {
        return $this->accept_terms;
    }
    
    public function setAcceptTerms($acceptTerms)
    {
        $this->accept_terms = $acceptTerms;
    }
    
    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }
    
    public function getWebsite()
    {
        return $this->website;
    }

    public function setWebsite($website)
    {
        $this->website = $website;
    }
    
    public function getPhoneNumber()
    {
        return $this->phone_number;
    }

    public function setPhoneNumber($phoneNumber)
    {
        $this->phone_number = $phoneNumber;
    }
    
    public function getZipCode()
    {
        return $this->zip_code;
    }

    public function setZipCode($zipCode)
    {
        $this->zip_code = $zipCode;
    }
    
    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }
    
	public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public static function loadValidatorMetadata(ClassMetadata $metadata)
    {
        $metadata->addPropertyConstraint('username', new NotBlank(array(
		    'message' => "The username is required and can't be empty"
		)));
		$metadata->addPropertyConstraint('username', new Assert\Length(array(
            'min' => 6,
    	    'max' => 30,
            'minMessage' => 'The username must be more than 6 and less than 30 characters long',
    	    'maxMessage' => 'The username must be more than 6 and less than 30 characters long',
        )));
		
		$metadata->addPropertyConstraint('country', new NotBlank(array(
		    'message' => "The country is required and can't be empty"
		)));
		
		$metadata->addPropertyConstraint('accept_terms', new NotBlank(array(
		    'message' => 'You have to accept the terms and policies'
		)));
		
        $metadata->addPropertyConstraint('email', new NotBlank(array(
		    'message' => "The email address is required and can't be empty"
		)));
        $metadata->addPropertyConstraint('email', new Email(array(
		    'message' => 'Not a valid email address'
		)));
		
		$metadata->addPropertyConstraint('website', new Assert\Url(array(
			'message' => 'The input is not a valid URL'
		)));
		
        $metadata->addPropertyConstraint('phone_number', new Assert\Length(array(
            'min' => 9,
    	    'max' => 10,
            'minMessage' => 'The phone number must be more than 9 and less than 10 characters long',
    	    'maxMessage' => 'The phone number must be more than 9 and less than 10 characters long',
        )));
		
        $metadata->addPropertyConstraint('zip_code', new Assert\Length(array(
            'min' => 4,
    	    'max' => 6,
            'minMessage' => 'The zip code must be more than 4 and less than 6 characters long',
    	    'maxMessage' => 'The zip code must be more than 4 and less than 6 characters long',
        )));
		
		$metadata->addPropertyConstraint('password', new NotBlank(array(
		    'message' => "The password and its confirm is required and can't be empty"
		)));
		
		$metadata->addPropertyConstraint('age', new Assert\Range(array(
            'min' => 11,
            'max' => 100,
            'minMessage' => 'The ages has to be greater than or equals to 10',
            'maxMessage' => 'The ages has to be less than {{ limit }}',
			'invalidMessage' => 'The ages must be greater than 10 and less than 101',
        )));
        
    }    
}