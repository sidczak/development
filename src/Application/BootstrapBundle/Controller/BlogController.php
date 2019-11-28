<?php

namespace Application\BootstrapBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class BlogController extends Controller
{

    /**
     * @Route("/blog-home-one", name="_blog_blog-home-one")
     * @Template()
     */
    public function blogHomeOneAction()
    {
        return array();
    }
    
    /**
     * @Route("/blog-home-two", name="_blog_blog-home-two")
     * @Template()
     */
    public function blogHomeTwoAction()
    {
        return array();
    }
    
    /**
     * @Route("/blog-post", name="_blog_blog-post")
     * @Template()
     */
    public function blogPostAction()
    {
        return array();
    }

}