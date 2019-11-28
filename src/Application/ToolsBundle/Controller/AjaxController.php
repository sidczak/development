<?php

namespace Application\ToolsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class AjaxController extends Controller
{

    /**
     * @Route("/", name="_ajax")
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }
    /**
     * @Route("/post", name="_ajax_post")
     * @Template()
     */
    public function postAction()
    {
        return array();
    }
	
	/**
     * @Route("/xxx/{id}", name="_security_check")
     * @Template()
     */
    public function securityCheckAction($id)
    {
        // The security layer will intercept this request
		echo "Ajax ok ".$id;

		$this->get('session')->setFlash('notice', 'Message sent!');
		return $this->render('ApplicationToolsBundle:Ajax:_menu.html.twig');
    }
	

}
