<?php

namespace Drupal\guest_book\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Implements an add cat form.
 */
class GuestBookForm extends FormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId(): string {
    return 'guest_book_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state): array {
    $form['name'] = [
      '#maxlength' => 100,
      '#required' => TRUE,
      '#type' => 'textfield',
      '#title_display' => 'before',
      '#title' => $this->t('Your name:'),
      '#placeholder' => $this->t("should be in the range of 2 and 100 symbols"),
    ];
    $form['email'] = [
      '#type' => 'email',
      '#required' => TRUE,
      '#title_display' => 'before',
      '#title' => $this->t('Your email:'),
      '#suffix' => '<div class="email-massage"></div>',
      '#placeholder' => $this->t("username@domain.com Only latin characters, -, _"),
//      '#ajax' => [
//        'event' => 'keyup',
//        'callback' => '::emailValidator',
//        'progress' => 'none',
//      ],
//      '#attached' => [
//        'library' => [
//          'guest_book/ajax-patch',
//        ],
//      ],
    ];
    $form['phone'] = [
      '#type' => 'tel',
      '#required' => TRUE,
      '#title_display' => 'before',
      '#title' => $this->t('Your phone:'),
      '#placeholder' => $this->t("+380"),
    ];
    $form['text'] = [
      '#type' => 'textarea',
      '#required' => TRUE,
      '#resizable' => FALSE,
      '#title_display' => 'before',
      '#title' => $this->t('Your massage:'),
      '#placeholder' => $this->t("It was a wonderful night spent with you Drupal"),
    ];
    $form['ava'] = [
      '#type' => 'managed_file',
      '#title_display' => 'before',
      '#title' => $this->t('Add your profile picture:'),
      '#upload_location' => 'public://avatars',
      '#upload_validators' => [
        'file_validate_extensions' => ['jpeg jpg png'],
        'file_validate_size' => [2097152],
      ],
    ];
    $form['img'] = [
      '#type' => 'managed_file',
      '#title_display' => 'before',
      '#title' => $this->t('Add an image to the review:'),
      '#upload_location' => 'public://img',
      '#upload_validators' => [
        'file_validate_extensions' => ['jpeg jpg png'],
        'file_validate_size' => [5242880],
      ],
    ];
    $form['submit'] = [
      '#type' => 'submit',
      '#value' => $this->t("Submit"),
//      '#ajax' => [
//        'event' => 'click',
//        'callback' => '::submitAjax',
//        'progress' => 'none',
//      ],
    ];
    return $form;
  }

  /**
   * Setting the message in our form.
   */
//  public function submitAjax(array &$form, FormStateInterface $form_state): AjaxResponse {}

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
  }

}
