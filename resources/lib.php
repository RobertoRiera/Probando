<?php
class View{

    public static function  start($title){
        $html = "<!DOCTYPE html>
            <html>
                <head>
                    <meta charset=\"ISO-8859-1\">
                    <link rel='stylesheet' type='text/css' href='./css/style.css'>
                    <script type='text/javascript' src='./js/scripts.js'></script>
                    <title>$title</title>
                </head>
                <body>";
        echo $html;
    }

    public static function end(){
        echo '</body>
        </html>';
    }


}
class Util{

    public static function showForm(){

        echo '<form method="post" onsubmit="return validarPass()">';
        echo 'Nombre <input id="nombre" type="text" name="usuario">\n';
        echo 'Forma de contacto <input id="clave" type="text" name="clave">';
        echo 'Forma de contacto <input id="clave" type="text" name="clave">';
        echo 'Servicio a realizar <input id="clave" type="text" name="clave">';
        echo'Servicio a realizar?
        <select name="service">
            <option value="Void">Select...</option>
            <option value="Localización de Software">Localización de Software</option>
            <option value="Consultoría en adaptación cultural">Consultoría en adaptación cultural</option>
            <option value="Consultoría en adaptación cultural">Consultoría web multilingüe</option>
            <option value="Consultoría en adaptación cultural">Consultoría web multilingüe</option>
        </select>';
        echo '<input type="submit" value="Entrar">';
        echo '</form>';

        echo'<form method="post" action="upload.php" enctype="multipart/form-data">
            ¡Sube tu foto!: <input type="file" name="foto" /> <input type="submit" name="enviar" value="Enviar" />
      </form>';

    }

    public static function toTxt($txt){

        $file = fopen("./resources/pruebas.txt", "w") or die("Problemas");
        fwrite($file, $txt);
        fclose($file);

    }

    public static function returnArrayOfLinks(){

    }

}
