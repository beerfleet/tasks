<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

/**
 * Description of YmlRoutingController
 *
 * @author jvanbiervliet
 */
class YmlRoutingController extends Controller {
  
  public function routeAction() {
    return new Response('Yml Routing: Check ');
  }
}
