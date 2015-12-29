<?php

use PhpOffice\PhpPdf;

include_once 'Doc.php';

class PdfDoc implements Doc
{


    public function getWordCount()
    {
        // TODO: Implement getWordCount() method.
    }

    public function generatePdf()
    {
        $phpPdf = new PhpPdf();
        $section = $phpPdf->createSection();
        $section->addText('Hello World!');
        $file = 'HelloWorld.pdf';
        header("Content-Description: File Transfer");
        header('Content-Disposition: attachment; filename="' . $file . '"');
        header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');
        header('Content-Transfer-Encoding: binary');
        header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
        header('Expires: 0');
        $xmlWriter = IOFactory::createWriter($phpPdf, 'Pdf');
        $xmlWriter->save("prueba.docx");
    }
}