<?php

namespace Application\ToolsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class StartController extends Controller
{
    public function indexAction()
    {
        //echo $locale = $this->getRequest()->getLocale();
        return $this->render('ApplicationToolsBundle:Start:index.html.twig');
    }
}
