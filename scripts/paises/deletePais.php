<?php
    require_once ('../../app.php');
    use Models\Paises;
    $miPais = new Paises();
    header("Content-Type: application/json");
    $_DATA = json_decode(file_get_contents("php://input"), true);
    $miPais->deleteByIdData($_GET['id']);  
    echo "<script> document.location='../../index.php'</script>";
?>