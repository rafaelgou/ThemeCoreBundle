<?php

namespace Theme\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{

    public function indexAction()
    {
        return $this->render('ThemeCoreBundle:Default:xhtmlTestPage.html.twig');
    }

    public function xhtmlTestPageAction()
    {
        return $this->render('ThemeCoreBundle:Default:xhtmlTestPage.html.twig');
    }


}
