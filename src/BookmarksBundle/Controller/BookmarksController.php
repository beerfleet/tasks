<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace BookmarksBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use BookmarksBundle\Entity\Bookmark;
/**
 * Description of BookmarksController
 *
 * @author jvanbiervliet
 */

class BookmarksController extends Controller {    
  
  public function showBookmarksAction() {    
    $srv = $this->get('bookmarks.service');
    $bookmarks = $srv->fetchAllBookmarks();
    return $this->render('@Bookmarks/Bookmarks/bookmarks.html.twig', ['bookmarks' => $bookmarks]);
  }
  
  public function addNewBookmarkAction() {
    $srv = $this->get('bookmarks.service');
    $bookmark = new Bookmark();
    
    return $this->render('@Bookmarks/Bookmarks/bookmark-add-new.html.twig', []);
  }
  
  public function storeBookmarkAction() {
    /* @var BookmarksService $srv */
    $srv = $this->get('bookmarks.service');
    $status = $srv->storeBookmarks();
    if ($status == 0) {
      throw new \Exception("FAILED");
    }
    return new \Symfony\Component\HttpFoundation\Response("<h1>TIS GELUKT</h1>");
  }

}
