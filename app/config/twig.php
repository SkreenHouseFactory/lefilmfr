<?php
/*
* Twig
*
* @source https://github.com/codeguy/Slim-Views
* @source https://github.com/twigphp/Twig
*/

use Symfony\Component\Form\Extension\Csrf\CsrfProvider\DefaultCsrfProvider;
use Symfony\Bridge\Twig\Form\TwigRenderer;
use Symfony\Bridge\Twig\Form\TwigRendererEngine;
use Symfony\Component\Translation\Translator;
use Symfony\Component\Translation\Loader\XliffFileLoader;

$vendorDir = realpath(__DIR__ . '/../../vendor');
$vendorValidatorDir = $vendorDir . '/symfony/validator/Symfony/Component/Validator';

// CSRF
$defaultFormTheme = 'form_div_layout.html.twig';
$csrfProvider = new DefaultCsrfProvider(''); // Insert at least 32 caracters here
$formEngine = new TwigRendererEngine(array($defaultFormTheme));
//$translator = new Translator('fr');
//$translator->addLoader('xlf', new XliffFileLoader());
$app->view->parserOptions = array(
  'debug' => true,
  'charset' => 'utf-8',
//  'cache' => realpath('../templates/cache'),
  'auto_reload' => true,
  'strict_variables' => false,
  'autoescape' => true
);
$app->view->parserExtensions = array(
//  new Symfony\Bridge\Twig\Extension\TranslationExtension($translator),
  new Symfony\Bridge\Twig\Extension\FormExtension(new TwigRenderer($formEngine, $csrfProvider))
);
