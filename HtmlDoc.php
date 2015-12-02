<?php

include 'Doc.php';

class HtmlDoc implements Doc
{
    private $url;
    private $htmlPage;
    private $derivatedUrls;

    public function __construct($url)
    {
        $this->$url = $url;
        $this->htmlPage = file_get_contents($url);
        $this->searchDerivatedUrls();

    }

    public function getUrl()
    {
        return $this->url;
    }

    public function searchDerivatedUrls()
    {
        preg_match_all("/http.*>/", $this->htmlPage, $coincidencias, PREG_OFFSET_CAPTURE);
        $this->derivatedUrls=$coincidencias[0];
    }

    public function getWordCount()
    {

    }
    public function getHtmlWithoutUncountableWords()
    {
        return str_word_count(strip_tags($this->htmlPage));
    }


}