<?php

namespace Application\BootstrapBundle\Entity;

use Symfony\Component\Validator\Mapping\ClassMetadata;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints as Assert;

class BasicValidators
{
    
	protected $first_name;
	
	protected $last_name;
	
	protected $username;
    
    protected $email;
    
    protected $website;
    
    protected $password;
    
    protected $gender;
    
    protected $age;
    
    protected $birthday;
    
    protected $internet_browsers;
    
    protected $operating_system;
    
    protected $languages;
    
    protected $programming_languages;
    
    protected $comment;

    public function getFirstName()
    {
        return $this->first_name;
    }

    public function setFirstName($firstName)
    {
        $this->first_name = $firstName;
    }
    
    public function getLastName()
    {
        return $this->last_name;
    }

    public function setLastName($lastName)
    {
        $this->last_name = $lastName;
    }
    
    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username)
    {
        $this->username = $username;
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
    
	public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }
    
    public function getGender()
    {
        return $this->gender;
    }

    public function setGender($gender)
    {
        $this->gender = $gender;
    }
    
    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }
    
    public function getBirthday()
    {
        return $this->birthday;
    }

    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;
    }
    
    public function getInternetBrowsers()
    {
        return $this->internet_browsers;
    }

    public function setInternetBrowsers($internetBrowsers)
    {
        $this->internet_browsers = $internetBrowsers;
    }
    
    public function getOperatingSystem()
    {
        return $this->operating_system;
    }

    public function setOperatingSystem($operatingSystem)
    {
        $this->operating_system = $operatingSystem;
    }
    
    public function getLanguages()
    {
        return $this->languages;
    }

    public function setLanguages($languages)
    {
        $this->languages = $languages;
    }
    
    public function getProgrammingLanguages()
    {
        return $this->programming_languages;
    }

    public function setProgrammingLanguages($programmingLanguages)
    {
        $this->programming_languages = $programmingLanguages;
    }
    
	public function getComment()
    {
        return $this->comment;
    }

    public function setComment($comment)
    {
        $this->comment = $comment;
    }

    public static function loadValidatorMetadata(ClassMetadata $metadata)
    {
        $metadata->addPropertyConstraint('first_name', new NotBlank(array(
		    'message' => "The first name is required and can't be empty"
		)));
		
		$metadata->addPropertyConstraint('last_name', new NotBlank(array(
		    'message' => "The last name is required and can't be empty"
		)));
    	
    	$metadata->addPropertyConstraint('username', new NotBlank(array(
		    'message' => "The username is required and can't be empty"
		)));
		
        $metadata->addPropertyConstraint('email', new NotBlank(array(
		    'message' => "The email address is required and can't be empty"
		)));
        $metadata->addPropertyConstraint('email', new Email(array(
		    'message' => 'xThe input is not a valid email address'
		)));
		
		$metadata->addPropertyConstraint('website', new Assert\Url(array(
			'message' => 'The input is not a valid URL'
		)));
		
		$metadata->addPropertyConstraint('password', new NotBlank(array(
		    'message' => "The password and confirm password is required and cannot be empty"
		)));
		
		$metadata->addPropertyConstraint('gender', new NotBlank(array(
		    'message' => "The gender is required and can't be empty"
		)));
		
		$metadata->addPropertyConstraint('age', new NotBlank(array(
		    'message' => "The age is required and can't be empty"
		)));
		$metadata->addPropertyConstraint('age', new Assert\Range(array(
            'min'        => 18,
            'max'        => 100,
            'minMessage' => 'Please enter a value greater than or equal to {{ limit }}',
            'maxMessage' => 'Please enter a value less than or equal to {{ limit }}',
        )));
        
        $metadata->addPropertyConstraint('birthday', new NotBlank(array(
		    'message' => "The birthday is required and can't be empty"
		)));
		$metadata->addPropertyConstraint('birthday', new Assert\Date());
        
		$metadata->addPropertyConstraint('internet_browsers', new NotBlank(array(
		    'message' => "The internet browsers is required and can't be empty"
		)));
		
		$metadata->addPropertyConstraint('operating_system', new NotBlank(array(
		    'message' => "The operating system is required and can't be empty"
		)));
		$metadata->addPropertyConstraint('operating_system', new Assert\Count(array(
            'min'        => 2,
            'minMessage' => 'Please choose {{ limit }} operating system you know',
        )));
		
		$metadata->addPropertyConstraint('languages', new NotBlank(array(
		    'message' => "The languages is required and can't be empty"
		)));
		
		$metadata->addPropertyConstraint('programming_languages', new NotBlank(array(
		    'message' => "The programming languages is required and can't be empty"
		)));
		$metadata->addPropertyConstraint('programming_languages', new Assert\Count(array(
            'min'        => 2,
            'max'        => 4,
            'minMessage' => 'Please choose 2 - 4 programming languages you are good at',
            'maxMessage' => 'Please choose 2 - 4 programming languages you are good at',
        )));
		
		$metadata->addPropertyConstraint('comment', new NotBlank(array(
		    'message' => "The comment is required and can't be empty"
		)));
		$metadata->addPropertyConstraint('comment', new Assert\Length(array(
            'min'        => 10,
    	    'max'        => 100,
            'minMessage' => 'The comment must have at least {{ limit }} characters long',
    	    'maxMessage' => 'The comment must be less than {{ limit }} characters long',
        )));
        
    }    
}