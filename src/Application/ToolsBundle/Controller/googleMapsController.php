<?php

namespace Application\ToolsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class GoogleMapsController extends Controller
{
    public function indexAction()
    {
        return $this->render('ApplicationToolsBundle:GoogleMaps:index.html.twig');
    }
}
