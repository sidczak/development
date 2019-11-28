<?php

namespace Application\BootstrapBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Application\BootstrapBundle\Entity\Contact;
use Application\BootstrapBundle\Form\ContactType;

class OnePageWebsitesController extends Controller
{

    /**
     * @Route("/agency", name="_one-page-websites_agency")
     * @Template()
     */
    public function agencyAction()
    {
        $contact = new Contact();
        $form = $this->createForm(new ContactType(), $contact);
        
        $request = $this->getRequest();
        if ($request->getMethod() == 'POST') {
        	
        	$form->bind($request);
            if ($form->isValid()) {
            	/*
		        $message = \Swift_Message::newInstance()
		            ->setFrom('xszymon.idczak@gmail.com')
		            ->setTo('szymon.idczak@gmail.com')//na ten adres zostanie wysłana wiadomość
		            ->setBody($this->renderView('ApplicationPageBundle:Contact:contactEmail.txt.twig', array('contact' => $contact)));
		        $this->get('mailer')->send($message);
            	*/
            	//$this->get('session')->setFlash('contact-success', 'Dziękujemy za przesłanie wiadomości.');
            	$this->get('session')->getFlashBag()->add('contact-success',  sprintf('Your message has been sent.'));
            	
            	return $this->redirect($this->generateUrl('_one-page-websites_agency'));
	        }
	        $this->get('session')->getFlashBag()->add('contact-error',  sprintf('Prosimy o wypełnienie zaznaczonych pól.'));
        }
        
    	return array('form' => $form->createView());
    }
    
    /**
     * @Route("/freelancer", name="_one-page-websites_freelancer")
     * @Template()
     */
    public function freelancerAction()
    {
        $contact = new Contact();
        $form = $this->createForm(new ContactType(), $contact);
        
        $request = $this->getRequest();
        if ($request->getMethod() == 'POST') {
        	
        	$form->bind($request);
            if ($form->isValid()) {
            	/*
		        $message = \Swift_Message::newInstance()
		            ->setFrom('xszymon.idczak@gmail.com')
		            ->setTo('szymon.idczak@gmail.com')//na ten adres zostanie wysłana wiadomość
		            ->setBody($this->renderView('ApplicationPageBundle:Contact:contactEmail.txt.twig', array('contact' => $contact)));
		        $this->get('mailer')->send($message);
            	*/
            	//$this->get('session')->setFlash('contact-success', 'Dziękujemy za przesłanie wiadomości.');
            	$this->get('session')->getFlashBag()->add('contact-success',  sprintf('Your message has been sent.'));
            	
            	return $this->redirect($this->generateUrl('_one-page-websites_freelancer'));
	        }
	        $this->get('session')->getFlashBag()->add('contact-error',  sprintf('Prosimy o wypełnienie zaznaczonych pól.'));
        }
        
    	return array('form' => $form->createView());
    }
    
    /**
     * @Route("/grayscale", name="_one-page-websites_grayscale")
     * @Template()
     */
    public function grayscaleAction()
    {
        return array();
    }
    
    /**
     * @Route("/stylish-portfolio", name="_one-page-stylish-portfolio")
     * @Template()
     */
    public function stylishPortfolioAction()
    {
        return array();
    }
    

}