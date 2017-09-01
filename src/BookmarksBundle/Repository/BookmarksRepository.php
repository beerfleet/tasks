<?php

namespace BookmarksBundle\Repository;

use Doctrine\ORM\EntityRepository;
use BookmarksBundle\Entity\Bookmark;

class BookmarksRepository extends EntityRepository {
  
  public function findAllSorted() {
    $repo = $this->getEntityManager()->getRepository(Bookmark::class);
    $bookmarks = $repo->findBy([], ['title' => 'ASC']);
    return $bookmarks;
  }
  
  
}
