<?php

namespace Application\ExpertBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class StartController extends Controller
{
    public function indexAction()
    {
        return $this->render('ApplicationExpertBundle:Start:index.html.twig');
    }
}