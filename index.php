<?php
include_once './resources/lib.php';
include_once 'HtmlDoc.php';

View::start("Etnonautas");


$url='http://orienta.hol.es/pruebas/';

//$HTMLPage = strip_tags(file_get_contents($url));
$HTMLPage = file_get_contents($url);
$HTMLPage = 'en esta http://stringer.com ha de buscar stringer, >no string, aunque puede';


//href=(")?(\')?.*(")?(\')?
if(preg_match_all("#(http://|http://).*>#", $HTMLPage, $coincidencias, PREG_OFFSET_CAPTURE)){
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