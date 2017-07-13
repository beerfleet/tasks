<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Description of LuckyController
 *
 * @author jvanbiervliet
 */
class LuckyController extends Controller {

  /**
   * @Route("/lucky/number")
   */
  public function numberAction() {
    $number = mt_rand(0, 100);
    return $this->render('Lucky/number.html.twig', ['number' => $number]);
  }

  public function euroMillionsAction() {
    // numbers
    $numbers = [];
    for ($i=0; $i < 5; $i++) {
      $random = mt_rand(1, 50);
      while (in_array($random, $numbers)) {
        $random = mt_rand(1, 50);
      };
      $numbers[] = $random;
    }
    
    sort($numbers);
    
    //stars
    $stars = [];
    for ($i=0; $i < 2; $i++) {
      $random = mt_rand(1, 12);
      while (in_array($random, $stars)) {
        $random = mt_rand(1, 50);
      };
      $stars[] = $random;
    }
    
    sort($stars);
    
    $winning = ['numbers' => $numbers, 'stars' => $stars];
    
    return $this->render('Lucky/numbers.html.twig', ['winning' => $winning]);
  }

}
