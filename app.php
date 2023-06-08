<?php 
    require_once 'vendor/autoload.php';
    use App\Database;
    use Models\Paises;
    use Models\Tipos;
    use Models\Regiones;
    use Models\Ciudades;
    $db = new Database();
    $conn = $db->getConnection('mysql');
    Paises::setConn($conn);
    Tipos::setConn($conn);
    Regiones::setConn($conn);
    Ciudades::setConn($conn);
?>