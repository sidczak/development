<?php

namespace Application\BootstrapBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class EditorsController extends Controller
{

    /**
     * @Route("/CKEditor", name="_editors_ckeditor")
     * @Template()
     */
    public function ckeditorAction()
    {
        return array();
    }

    /**
     * @Route("/wysiHTML5", name="_editors_wysiHTML5")
     * @Template()
     */
    public function wysiHTML5Action()
    {
        return array();
    }
    
    /**
     * @Route("/wysiHTML5-bootstrap", name="_editors_wysiHTML5Bootstrap")
     * @Template()
     */
    public function wysiHTML5BootstrapAction()
    {
        return array();
    }
    
    /**
     * @Route("/tinymce", name="_editors_tinymce")
     * @Template()
     */
    public function tinymceAction()
    {
        return array();
    }

}