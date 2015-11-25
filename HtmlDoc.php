<?php

include 'Doc.php';

class HtmlDoc implements Doc
{
    private $url;
    private $htmlPage;

    public function __construct($url)
    {
        $this->$url = $url;
        $this->htmlPage = file_get_contents($url);
    }

    public function getUrl()
    {
        return $this->url;
    }

    public function getWordCount()
    {

        return str_word_count($this->getHtmlWithoutCountableWords());
    }
    public function getHtmlWithoutCountableWords()
    {
        return strip_tags($this->htmlPage);
    }
}