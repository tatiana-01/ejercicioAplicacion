<?php
ini_set("display_errors",1);
ini_set("display_startup_errors",1);
error_reporting(E_ALL);
    require_once ('../../app.php');
    use Models\Paises;
    
    header("Content-Type: application/json");
        $_DATAEDIT = json_decode(file_get_contents("php://input"), true);
        $miPais = new Paises();
        $miPais->editData($_DATAEDIT);
        echo $_DATAEDIT;
     
?>