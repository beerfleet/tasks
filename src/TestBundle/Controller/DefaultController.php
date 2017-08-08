<?php

namespace TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller {

  public function indexAction() {
    return $this->render('TestBundle:Default:index.html.twig');
  }

  public function baseAction() {
    return $this->render('TestBundle:Template:base.html.twig');
  }

}
