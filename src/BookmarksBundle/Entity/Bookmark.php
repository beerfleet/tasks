<?php

namespace BookmarksBundle\Entity;
/**
 * Description of Bookmarks
 *
 * @author jvanbiervliet
 */
class Bookmark {

  private $id;
  private $title;
  private $path;

  function getId() {
    return $this->id;
  }

  function getTitle() {
    return $this->title;
  }

  function getPath() {
    return $this->path;
  }

  function setId($id) {
    $this->id = $id;
  }

  function setTitle($title) {
    $this->title = $title;
  }

  function setPath($path) {
    $this->path = $path;
  }

}
