<?php

namespace Check\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CheckBlogBundle:Default:index.html.twig');
    }
}
