<?php

spl_autoload_register(function ($class) {
    include 'classes/' . $class . '.php';
});

$alphabet = new Alphabet(new LanguageArab());

$letters = $alphabet->getLetters();

//$letter = $alphabet->getLetter(2, 'begin');

$data = [
    'letters' => $letters
];

$view = new View('main', $data);
$content = $view->init();
print_r($content);

var_dump($letters[1575]['begin']);