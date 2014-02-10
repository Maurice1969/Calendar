<?php

namespace Maurice\CalendarBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MauriceCalendarBundle:Default:index.html.twig');
    }
}
