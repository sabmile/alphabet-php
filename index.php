<?php

require_once 'const.php';

spl_autoload_register(function ($class) {
    include 'classes/' . $class . '.php';
});

$alphabet = new Alphabet(new LanguageArab());
$codeLetters = $alphabet->getCodeLetters();
$htmlLetters = $alphabet->getHtmlLetters();

// next, need to make an implementation of$dictionary = new Dictionary(new DicEnglish, new DicArab);
//$title = $dictionary->translate('alphabet');

$counter = new Counter();

$data = [
    'num' => $counter::count(),
    'letters' => $htmlLetters,
    'title' => $title,
];

$view = new View('main', $data);
$content = $view->init();
print_r($content);

//var_dump($codeLetters);
//var_dump($htmlLetters);
//var_dump($htmlLetters[1575][POSITION[SEPARATE]]);

