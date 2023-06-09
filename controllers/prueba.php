<?php
session_start();
$_valor = json_decode(file_get_contents("php://input"), true);
$_SESSION['VALID'] =$valor;
 ?>