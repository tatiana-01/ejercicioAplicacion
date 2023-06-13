
<?php
include_once('../../app.php');
use Models\Regiones;
$objRegiones=new Regiones();
$valor = json_decode(file_get_contents("php://input"), true);
$regiones=$objRegiones->loadDataById(intval($valor));

 ?>