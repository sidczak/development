<?php

namespace Application\ToolsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class GalleryController extends Controller
{

    /**
     * @Route("/column2", name="_gallery_column2")
     * @Template()
     */
    public function column2Action()
    {
        return array();
    }
    /**
     * @Route("/column3", name="_gallery_column3")
     * @Template()
     */
    public function column3Action()
    {
        return array();
    }
    /**
     * @Route("/column4", name="_gallery_column4")
     * @Template()
     */
    public function column4Action()
    {
        return array();
    }

}
