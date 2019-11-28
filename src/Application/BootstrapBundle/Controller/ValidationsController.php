<?php

namespace Application\BootstrapBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Application\BootstrapBundle\Entity\BasicValidators;
use Application\BootstrapBundle\Form\BasicValidatorsType;
use Application\BootstrapBundle\Entity\BasicValidatorsDevoops;
use Application\BootstrapBundle\Form\BasicValidatorsDevoopsType;
use Application\BootstrapBundle\Entity\Job;
use Application\BootstrapBundle\Form\JobType;

class ValidationsController extends Controller
{

    /**
     * @Route("/bootstrap-vlidations-PHP", name="_validations_bootstrap-vlidations-PHP")
     * @Template()
     */
    public function bootstrapVlidationsPHPAction()
    {
        $basic_validators = new BasicValidators();
        $form = $this->createForm(new BasicValidatorsType(), $basic_validators);
        
        $request = $this->getRequest();
        if ($request->getMethod() == 'POST') {
        	
        	$form->bind($request);
            if ($form->isValid()) {

            	//$this->get('session')->getFlashBag()->add('contact-success',  sprintf('Your message has been sent.'));
            	
            	return $this->redirect($this->generateUrl('_validations_bootstrap-vlidations-PHP'));
	        }
	        //$this->get('session')->getFlashBag()->add('contact-error',  sprintf('Prosimy o wypełnienie zaznaczonych pól.'));
        }
        
        return array('form' => $form->createView());
    }
    
    /**
     * @Route("/bootstrapvlidator", name="_validations_bootstrap-vlidations-jQuery")
     * @Template()
     */
    public function bootstrapVlidationsjQueryAction()
    {
        return array();
    }
    
    /**
     * @Route("/bootstrap-vlidations-PHP-DevOOPS", name="_validations_bootstrap-vlidations-PHP-DevOOPS")
     * @Template()
     */
    public function bootstrapVlidationsPHPDevOOPSAction()
    {
        $basic_validators_devoops = new BasicValidatorsDevoops();
        $form = $this->createForm(new BasicValidatorsDevoopsType(), $basic_validators_devoops);
        
        $request = $this->getRequest();
        if ($request->getMethod() == 'POST') {
        	
        	$form->bind($request);
            if ($form->isValid()) {

            	$this->get('session')->getFlashBag()->add('contact-success',  sprintf('Your message has been sent.'));
            	
            	return $this->redirect($this->generateUrl('_validations_bootstrap-vlidations-PHP-DevOOPS'));
	        }
	        $this->get('session')->getFlashBag()->add('contact-error',  sprintf('Please fill in the fields marked.'));
        }
        
        return array('form' => $form->createView());
    }
    
    /**
     * @Route("/bootstrapvlidator-DevOOPS", name="_validations_bootstrap-vlidations-jQuery-DevOOPS")
     * @Template()
     */
    public function bootstrapVlidationsjQueryDevOOPSAction()
    {
        return array();
    }
    
    /**
     * @Route("/bootstrap-vlidations-jobeet-job", name="_validations_bootstrap-vlidations-jobeet-job")
     * @Template()
     */
    public function bootstrapVlidationsJobeetJobAction()
    {
        $job = new Job();
        $form = $this->createForm(new JobType(), $job);
        
        $request = $this->getRequest();
        if ($request->getMethod() == 'POST') {
        	
        	$form->bind($request);
            if ($form->isValid()) {

            	//$this->get('session')->getFlashBag()->add('contact-success',  sprintf('Your message has been sent.'));
            	
            	$form['logo']->getData()->move(__DIR__.'/../../../../web/bundles/applicationbootstrap/uploads/basic_sf2', $job->getLogo()->getClientOriginalName());

            	return $this->redirect($this->generateUrl('_validations_bootstrap-vlidations-jobeet-job'));
	        }
	        //$this->get('session')->getFlashBag()->add('contact-error',  sprintf('Prosimy o wypełnienie zaznaczonych pól.'));
        }
        
        return array('form' => $form->createView());
    }

}