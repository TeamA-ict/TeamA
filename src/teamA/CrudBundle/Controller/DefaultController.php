<?php

namespace teamA\CrudBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('teamACrudBundle:Default:index.html.twig');
    }
}
