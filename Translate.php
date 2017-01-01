<?php
require 'vendor/autoload.php';

use Google\Cloud\Translate\TranslateClient;

$translate = new TranslateClient([
    'key' => 'AIzaSyDSx4hTbkFDks28smIEFaLR-wRJ0B_o7pY'
]);

// Translate text from english to french.
$result = $translate->translate('Hello world!', [
    'target' => 'fr'
]);

echo $result['text'] . "<br />";

// Detect the language of a string.
$result = $translate->detectLanguage('Greetings from Michigan!');

echo $result['languageCode'] ."<br />";


?>