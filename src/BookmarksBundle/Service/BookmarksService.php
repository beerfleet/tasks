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
use Symfony\Component\HttpFoundation\RequestStack;
use Doctrine\DBAL\Exception\DriverException;

class BookmarksService {

  private $em;
  private $rs;

  public function __construct(EntityManager $entity_manager, RequestStack $request_stack) {
    $this->em = $entity_manager;
    $this->rs = $request_stack;
  }

  public function fetchAllBookmarks() {
    /** @var $repo EntityRepository */
    $repo = $this->em->getRepository(Bookmark::class);
    $bookmarks = $repo->findAllSorted();
    return $bookmarks;
  }

  public function storeBookmark() {
    $status = 0;
    $bookmark = new Bookmark();
    $request = $this->rs->getCurrentRequest();
    $path = $request->get('path');
    $title = $request->get('title');
    $bookmark->setPath($path);
    $bookmark->setTitle($title);
    return $this->persist_object($bookmark);
  }

  public function persist_object($object) {
    try {
      $this->em->persist($object);
      $this->em->flush();
    } catch (DriverException $e) {
      $error = $e->getErrorCode();
      switch ($error) {
        case 1062:
          $message = "De opgegeven titel bestaat al.";
          break;
        case 1146:
          $message = "Onbestaande tabel verwijzing.";
          break;
        case 2002:
          $message = "De gegegevensbron is niet bereikbaar.";
          break;
      }
      return $message;
    } catch (\Exception $e) {
      return 'Er is een ondekend probleem opgetreden.';
    }

    return 1;
  }

}
