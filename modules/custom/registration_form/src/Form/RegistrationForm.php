<?php
/**
 * @file
 * Contains \Drupal\registration_form\Form\RegistrationForm.
 */
namespace Drupal\registration_form\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Url;
class RegistrationForm extends FormBase {
  /**
   * {@inheritdoc}
   */
   public function getFormId() {
    return 'student_registration_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
  
    // Get the form values and raw input (unvalidated values).
    $values = $form_state->getValues();

    // Define a wrapper id to populate new content into.
    $ajax_wrapper = 'my-ajax-wrapper';
 // Build a wrapper for the ajax response.
    $form['my_ajax_container'] = [
      '#type' => 'container',
      '#attributes' => [
        'id' => $ajax_wrapper,
      ]
    ];

    // ONLY LOADED IN AJAX RESPONSE OR IF FORM STATE VALUES POPULATED.
    if (!empty($values) && !empty($values['age'])&& !empty($values['student_gender'])) {
      $form['my_ajax_container']['my_response'] = [
        '#markup' => 'YOUR SELECTIONS: <b>Age/&nbsp; </b>&nbsp;' . $values['age']. '&nbsp;<b>Gender/&nbsp;</b>&nbsp;' . $values['student_gender'],
      ];
    }
    elseif (empty($values) && empty($values['age'])&& empty($values['student_gender'])) {
      $form['my_ajax_container']['my_response'] = [
        '#markup' => 'YOUR SELECTIONS: <b>Age/&nbsp; </b>&nbsp;' . $values['age']. '&nbsp;<b>Gender/&nbsp;</b>&nbsp;' . $values['student_gender'],
      ];
    }
     $form['#prefix'] = '<div class="col-md-4 "><h2>TELL US ABOUT THE CAMPER</h2>';
        $form['#suffix'] = '</div>';
    // Sector.
    $form['age'] = [
      '#type' => 'select',
      //'#empty_value' => '',
    //  '#empty_option' => '- Select a value -',
     // '#default_value' => (isset($values['age']) ? $values['age'] : ''),
     '#options' => array(
            'select' => t('Select/Age'),
            '8' => t('8'),
            '9' => t('9'),
            '10' => t('10'),
            '11' => t('11'),
            '12' => t('12'),
            '13' => t('13'),
            '14' => t('14'),
            '15' => t('15'),
            '16' => t('16'),
            '17' => t('17'),
            '18' => t('18'),
          ),
      '#ajax' => [
        'callback' => [$this, 'mySelectChange'],
        'event' => 'change',
        'wrapper' => $ajax_wrapper,
      ],
    ];
 $form['student_gender'] = [
      '#type' => 'select',
    //  '#empty_value' => '',
  //    '#empty_option' => '- Select a value -',
     // '#default_value' => (isset($values['age']) ? $values['age'] : ''),
     '#options' => array(
        'Select Gender' => t('Select/Gender'),
	'Female' => t('Female'),
        'Male' => t('Male'),
          
      ),
      '#ajax' => [
        'callback' => [$this, 'mySelectChange'],
        'event' => 'change',
        'wrapper' => $ajax_wrapper,
      ],
    ];
     $form['actions']['#type'] = 'actions';
    $form['actions']['submit'] = array(
      '#type' => 'submit',
      '#value' => $this->t('Next'),
      '#button_type' => 'primary',
    );


    return $form;
  }

  /**
   * The callback function for when the `my_select` element is changed.
   *
   * What this returns will be replace the wrapper provided.
   */
  public function mySelectChange(array $form, FormStateInterface $form_state) {
    // Return the element that will replace the wrapper (we return itself).
    return $form['my_ajax_container'];
  }

  /**
   * {@inheritdoc}
   */
   public function validateForm(array &$form, FormStateInterface $form_state) {
//    if(strlen($form_state->getValue('student_rollno')) < 8) {
//      $form_state->setErrorByName('student_rollno', $this->t('Please enter a valid Enrollment Number'));
//    }
//    if(strlen($form_state->getValue('student_phone')) < 10) {
//      $form_state->setErrorByName('student_phone', $this->t('Please enter a valid Contact Number'));
//    }
  }
  
  public function submitForm(array &$form, FormStateInterface $form_state) {
      
    \Drupal::messenger()->addMessage(t("Student Registration Done!! Registered Values are:"));
     $student_gender = $form_state->getValues()['student_gender'];
     $age = $form_state->getValues()['age'];
     
	foreach ($form_state->getValues() as $key => $value) {
	 // \Drupal::messenger()->addMessage($key . ': ' . $value);
             \Drupal::messenger()->addMessage('Gender' . ': ' .$student_gender);
             \Drupal::messenger()->addMessage('Age' . ': ' .$age);
    }
    
  }
  
        }