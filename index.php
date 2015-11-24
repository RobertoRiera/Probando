<?php
include_once './resources/lib.php';

View::start("Etnonautas");

$url='http://orienta.hol.es/pruebas/';

$HTMLPage = strip_tags(file_get_contents($url));
//$HTMLPage = file_get_contents($url);

Util::txt($HTMLPage);

echo str_word_count($HTMLPage);
//echo $HTMLPage;

View::end();