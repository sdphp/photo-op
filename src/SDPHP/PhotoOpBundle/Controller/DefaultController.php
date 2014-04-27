<?php

namespace SDPHP\PhotoOpBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('PhotoOpBundle:Default:index.html.twig', array('name' => $name));
    }
}
