<?php
    require_once ('../../app.php');
    use Models\Regiones;
    $miRegion = new Regiones();
    header("Content-Type: application/json"); //definimos el archivo como un tipo json
    //le decimos al archivo de php que obtenga cualquier tipo de entrada que le llegue y la transformamos a un 
    //array asociativo con el parametro "true", sin este parametro seria un objeto por defecto
    $_DATA = json_decode(file_get_contents("php://input"), true);
    $miRegion->saveData($_DATA);  
?>