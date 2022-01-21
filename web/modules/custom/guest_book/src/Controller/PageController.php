<?php

namespace Drupal\guest_book\Controller;

use Drupal\file\Entity\File;
use Drupal\Core\Controller\ControllerBase;

/**
 * Provides route responses for the guest book module.
 */
class PageController extends ControllerBase {

  /**
   * Builds the response.
   */
  public function build(): array {
    $form = \Drupal::formBuilder()
      ->getForm('Drupal\guest_book\Form\GuestBookForm');
//    $header_title = [
//      'img' => $this->t('Photo'),
//      'name' => $this->t('Name'),
//      'email' => $this->t('User’s e-mail'),
//      'created' => $this->t('Date Created'),
//    ];
//    $cats['table'] = [
//      '#type' => 'table',
//      '#header' => $header_title,
//      '#rows' => $this->getCats(),
//      '#empty' => $this->t('There are no items to display.'),
//    ];
    $build['content'] = [
      '#form' => $form,
      '#theme' => 'guest_book_theme',
      '#text' => $this->t('Hello! You can leave feedback, comments, impressions and wishes.'),
//      '#cats' => $cats,
    ];
    return $build;
  }


}
