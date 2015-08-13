<?php

use Symfony\Component\Form\Forms;
use Symfony\Component\Form\Extension\Validator\ValidatorExtension;
use Symfony\Component\Validator\Validation;
use Symfony\Component\Form\Extension\Csrf\CsrfExtension;
use Symfony\Component\Form\Extension\Csrf\CsrfProvider\SessionCsrfProvider;

$app->container->singleton('form_factory', function() use($session) {//, $translator){


  // Csrf
  $csrfSecret = 'ebb&flowsecret!';
  $csrfProvider = new SessionCsrfProvider($session, $csrfSecret);
  

  // Validator
  $vendorDir = realpath(__DIR__ . '/../../vendor');
  $vendorFormDir = $vendorDir . '/symfony/form/Symfony/Component/Form';
  $vendorValidatorDir = $vendorDir . '/symfony/validator/Symfony/Component/Validator';

  // create the validator - details will vary
  $validator = Validation::createValidator();
  /*
  // there are built-in translations for the core error messages
  $translator->addResource(
      'xlf',
      $vendorFormDir . '/Resources/translations/validators.fr.xlf',
      'fr',
      'validators'
  );
  $translator->addResource(
      'xlf',
      $vendorValidatorDir . '/Resources/translations/validators.fr.xlf',
      'fr',
      'validators'
  );
  */
  return Forms::createFormFactoryBuilder()
      //->addExtensions($this->getExtensions())
      //->addExtension($coreExtension)
      ->addExtension(new ValidatorExtension($validator))
      ->addExtension(new CsrfExtension($csrfProvider))
      ->getFormFactory();
}) ;