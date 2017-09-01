<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace BookmarksBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
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
    return $this->render('@Bookmarks/Bookmarks/bookmark-add-new.html.twig', []);
  }

}
