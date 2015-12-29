<?php
include_once './resources/lib.php';
include_once 'HtmlDoc.php';
include_once 'WordDoc.php';



View::start("Etnonautas");



$url='http://orienta.hol.es/pruebas/';

//$HTMLPage = strip_tags(file_get_contents($url));
$HTMLPage = file_get_contents($url);
//$HTMLPage = 'en esta http://stringer.com ha de href=http://stringer.com buscar stringer, >';



if(preg_match_all('/<a[^>]*href="([^"]*)"[^>]*>.*<\/a>/', $HTMLPage, $coincidencias, PREG_OFFSET_CAPTURE)){
//if(preg_match_all("#(?<=href=)[\'|\"]?.*[\'|\"]?#", $HTMLPage, $coincidencias, PREG_OFFSET_CAPTURE)){
    echo 'se han encontrado '.sizeof($coincidencias[0]).' coincidencias : ';
    print_r($coincidencias);
}else{
    echo'Pues nada...';
}



Util::toTxt($HTMLPage);

//echo str_word_count($HTMLPage);
//echo $HTMLPage;

/*
$wordNumber = (new HtmlDoc($url))->getWordCount();

echo $wordNumber;
*/
View::end();