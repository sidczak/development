<?php

namespace Application\BootstrapBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Application\BootstrapBundle\Entity\Contact;
use Application\BootstrapBundle\Form\ContactType;

class StarterTemplateController extends Controller
{

    /**
     * @Route("/one-page-wonder", name="_starter-template_one-page-wonder")
     * @Template()
     */
    public function onePageWonderAction()
    {
        return array();
    }
    
    /**
     * @Route("/round-about", name="_starter-template_round-about")
     * @Template()
     */
    public function roundAboutAction()
    {
        return array();
    }
    
    /**
     * @Route("/about", name="_starter-template_about")
     * @Template()
     */
    public function aboutAction()
    {
        return array();
    }
    
    /**
     * @Route("/services", name="_starter-template_services")
     * @Template()
     */
    public function servicesAction()
    {
        return array();
    }
    
    /**
     * @Route("/contact", name="_starter-template_contact")
     * @Template()
     */
    public function contactAction()
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
            	
            	return $this->redirect($this->generateUrl('_starter-template_contact'));
	        }
	        $this->get('session')->getFlashBag()->add('contact-error',  sprintf('Prosimy o wypełnienie zaznaczonych pól.'));
        }
        
    	return array('form' => $form->createView());
        
    }
    
    /**
     * @Route("/full-width-page", name="_starter-template_full-width-page")
     * @Template()
     */
    public function fullWidthPageAction()
    {
        return array();
    }
    
    /**
     * @Route("/sidebar", name="_starter-template_sidebar")
     * @Template()
     */
    public function sidebarAction()
    {
        return array();
    }
    
    /**
     * @Route("/FAQ", name="_starter-template_FAQ")
     * @Template()
     */
    public function faqAction()
    {
        return array();
    }
    
    /**
     * @Route("/error-404", name="_starter-template_error-404")
     * @Template()
     */
    public function error404Action()
    {
        return array();
    }
    
    /**
     * @Route("/pricing", name="_starter-template_pricing")
     * @Template()
     */
    public function pricingAction()
    {
        return array();
    }
    
    /**
     * @Route("/login-basic", name="_starter-template_basic-login")
     * @Template()
     */
    public function basicLoginAction()
    {
        return array();
    }
    
    /**
     * @Route("/register-basic", name="_starter-template_basic-register")
     * @Template()
     */
    public function basicRegisterAction()
    {
        return array();
    }
    
    /**
     * @Route("/remind-basic", name="_starter-template_basic-remind")
     * @Template()
     */
    public function basicRemindAction()
    {
        return array();
    }
    
    /**
     * @Route("/contact-devoops", name="_starter-template-contact-devoops")
     * @Template()
     */
    public function contactDevoopsAction()
    {
    	return array();
    }
    
    /**
     * @Route("/search-results-devoops", name="_starter-template-search-results-devoops")
     * @Template()
     */
    public function searchResultsDevoopsAction()
    {
    	return array();
    }

}