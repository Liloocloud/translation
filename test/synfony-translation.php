<?php
require_once "vendor/autoload.php";

use Symfony\Component\Translation\Translator;
use Symfony\Component\Translation\Loader\ArrayLoader;

$translator = new Translator('fr_FR');
$translator->addLoader('array', new ArrayLoader());

$translator->addResource('array', [
    'Hello World!' => 'Bonjour !',
], 'fr_FR');

echo $translator->trans('Hello World!');