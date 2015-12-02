<?php

require 'HtmlDoc.php';
class HtmlCountTest extends PHPUnit_Framework_TestCase
{
    public function testHtmlCount(){
        $url='http://orienta.hol.es/pruebas/';
        $this->assertEquals(205, ((new HtmlDoc($url))->getWordCount()));

    }
}
