<?php

namespace Application\BootstrapBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class StartController extends Controller
{
    public function indexAction()
    {
        return $this->render('ApplicationBootstrapBundle:Start:index.html.twig');
    }
}
