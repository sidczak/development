<?php

namespace Application\BootstrapBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class ThemesController extends Controller
{

    /**
     * @Route("/default", name="_themes_default")
     * @Template()
     */
    public function defaultAction()
    {
    	//session_destroy();
    	$session = $this->getRequest()->getSession();
    	$session->remove('theme');
    	return array();
    }
    
    /**
     * @Route("/bootstrap-theme", name="_themes_bootstrap-theme")
     * @Template()
     */
    public function bootstrapThemeAction()
    {
    	$session = $this->getRequest()->getSession();
		$session->set('theme', 'bootstrap-theme');
		$theme = $session->get('theme');
    	
        return array($theme);
    }
    
    /**
     * @Route("/amelia", name="_themes_amelia")
     * @Template()
     */
    public function ameliaAction()
    {
    	$session = $this->getRequest()->getSession();
		$session->set('theme', 'amelia');
		$theme = $session->get('theme');
    	
        return array($theme);
    }
    
    /**
     * @Route("/cerulean", name="_themes_cerulean")
     * @Template()
     */
    public function ceruleanAction()
    {
    	$session = $this->getRequest()->getSession();
		$session->set('theme', 'cerulean');
		$theme = $session->get('theme');
    	
        return array($theme);
    }
    
    /**
     * @Route("/cosmo", name="_themes_cosmo")
     * @Template()
     */
    public function cosmoAction()
    {
        $session = $this->getRequest()->getSession();
		$session->set('theme', 'cosmo');
		$theme = $session->get('theme');
    	
        return array($theme);
    }
    
    /**
     * @Route("/cyborg", name="_themes_cyborg")
     * @Template()
     */
    public function cyborgAction()
    {
        $session = $this->getRequest()->getSession();
		$session->set('theme', 'cyborg');
		$theme = $session->get('theme');
    	
        return array($theme);
    }
    
    /**
     * @Route("/darkly", name="_themes_darkly")
     * @Template()
     */
    public function darklyAction()
    {
        $session = $this->getRequest()->getSession();
		$session->set('theme', 'darkly');
		$theme = $session->get('theme');
    	
        return array($theme);
    }
    
    /**
     * @Route("/flatly", name="_themes_flatly")
     * @Template()
     */
    public function flatlyAction()
    {
        $session = $this->getRequest()->getSession();
		$session->set('theme', 'flatly');
		$theme = $session->get('theme');
    	
        return array($theme);
    }
    
    /**
     * @Route("/journal", name="_themes_journal")
     * @Template()
     */
    public function journalAction()
    {
        $session = $this->getRequest()->getSession();
		$session->set('theme', 'journal');
		$theme = $session->get('theme');
    	
        return array($theme);
    }
    
    /**
     * @Route("/lumen", name="_themes_lumen")
     * @Template()
     */
    public function lumenAction()
    {
        $session = $this->getRequest()->getSession();
		$session->set('theme', 'lumen');
		$theme = $session->get('theme');
    	
        return array($theme);
    }
    
    /**
     * @Route("/paper", name="_themes_paper")
     * @Template()
     */
    public function paperAction()
    {
        $session = $this->getRequest()->getSession();
		$session->set('theme', 'paper');
		$theme = $session->get('theme');
    	
        return array($theme);
    }
    
    /**
     * @Route("/readable", name="_themes_readable")
     * @Template()
     */
    public function readableAction()
    {
        $session = $this->getRequest()->getSession();
		$session->set('theme', 'readable');
		$theme = $session->get('theme');
    	
        return array($theme);
    }
    
    /**
     * @Route("/sandstone", name="_themes_sandstone")
     * @Template()
     */
    public function sandstoneAction()
    {
        $session = $this->getRequest()->getSession();
		$session->set('theme', 'sandstone');
		$theme = $session->get('theme');
    	
        return array($theme);
    }
    
    /**
     * @Route("/simplex", name="_themes_simplex")
     * @Template()
     */
    public function simplexAction()
    {
        $session = $this->getRequest()->getSession();
		$session->set('theme', 'simplex');
		$theme = $session->get('theme');
    	
        return array($theme);
    }
    
    /**
     * @Route("/slate", name="_themes_slate")
     * @Template()
     */
    public function slateAction()
    {
        $session = $this->getRequest()->getSession();
		$session->set('theme', 'slate');
		$theme = $session->get('theme');
    	
        return array($theme);
    }
    
    /**
     * @Route("/spacelab", name="_themes_spacelab")
     * @Template()
     */
    public function spacelabAction()
    {
        $session = $this->getRequest()->getSession();
		$session->set('theme', 'spacelab');
		$theme = $session->get('theme');
    	
        return array($theme);
    }
    
    /**
     * @Route("/superhero", name="_themes_superhero")
     * @Template()
     */
    public function superheroAction()
    {
        $session = $this->getRequest()->getSession();
		$session->set('theme', 'superhero');
		$theme = $session->get('theme');
    	
        return array($theme);
    }
    
    /**
     * @Route("/united", name="_themes_united")
     * @Template()
     */
    public function unitedAction()
    {
        $session = $this->getRequest()->getSession();
		$session->set('theme', 'united');
		$theme = $session->get('theme');
    	
        return array($theme);
    }
    
    /**
     * @Route("/yeti", name="_themes_yeti")
     * @Template()
     */
    public function yetiAction()
    {
        $session = $this->getRequest()->getSession();
		$session->set('theme', 'yeti');
		$theme = $session->get('theme');
    	
        return array($theme);
    }

}
