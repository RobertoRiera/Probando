<?php
include_once './resources/lib.php';
include_once 'HtmlDoc.php';

View::start("Etnonautas");

$url='http://orienta.hol.es/pruebas/';

/*
$HTMLPage = strip_tags(file_get_contents($url));
//$HTMLPage = file_get_contents($url);


Util::toTxt($HTMLPage);

//echo str_word_count($HTMLPage);
echo $HTMLPage;
*/

$wordNumber = (new HtmlDoc($url))->getWordCount();

echo $wordNumber;

View::end();