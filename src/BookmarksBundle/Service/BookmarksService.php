<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace BookmarksBundle\Service;

/**
 * Description of BookmarksService
 *
 * @author jvanbiervliet
 */

use BookmarksBundle\Entity\Bookmark;
use Doctrine\ORM\EntityManager;

class BookmarksService {
  
  private $em;
  
  public function __construct(EntityManager $em) {
    $this->em = $em;
  }

  public function fetchAllBookmarks() {
    /** @var $repo EntityRepository */    
    $repo = $this->em->getRepository(Bookmark::class);    
    $bookmarks = $repo->findAllSorted();
    return $bookmarks;
  }

}
