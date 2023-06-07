<?php 
    require_once 'vendor/autoload.php';
    use App\Database;
    use Models\Paises;
    use Models\Tipos;
    $db = new Database();
    $conn = $db->getConnection('mysql');
    Paises::setConn($conn);
    Tipos::setConn($conn);
?>