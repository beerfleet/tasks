<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

/**
 * Description of BlogController
 *
 * @author jvanbiervliet
 */
class BlogController extends Controller {

  /**
   * matches /blog exactly
   * @Route("/blog", name="blog_list")
   */
  public function listAction() {
    return new Response("<html><body>BLOG</body></html>");
  }
  
  /**
   * matches /blog/*
   * @Route("/blog/{slug}", name="blog_show")
   */
  public function showAction($slug) {
    return new Response("<html><body><h1>You are a $slug<h1></body></html>");
  }
  
}
