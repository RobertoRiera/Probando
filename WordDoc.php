<?php

use PhpOffice\PhpWord\PhpWord;

include_once 'Doc.php';
//include_once 'phpword/src/PhpWord/PhpWord.php';

class WordDoc implements Doc
{


    public function getWordCount()
    {
        // TODO: Implement getWordCount() method.
    }

    public function generateDoc()
    {
        $phpWord = new PhpWord();
        $section = $phpWord->createSection();
        $section->addText('Hello World!');
        $file = 'HelloWorld.docx';
        header("Content-Description: File Transfer");
        header('Content-Disposition: attachment; filename="' . $file . '"');
        header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');
        header('Content-Transfer-Encoding: binary');
        header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
        header('Expires: 0');
        $xmlWriter = IOFactory::createWriter($phpWord, 'Word2007');
        $xmlWriter->save("prueba.docx");
    }
}