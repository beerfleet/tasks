<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller {

  /**
   * @Route("/", name="homepage")
   */
  //public function indexAction(Request $request) {
  public function indexAction(SessionInterface $session) {
    // replace this example code with whatever you need
    /* return $this->render('default/index.html.twig', [
      'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
      ]); */
    
    $session->set('foo', 'bar');
    $foobar = $session->get('foobar');
    $filters = $session->get('filters', []);
    return new Response(var_dump($session));
  }

}
