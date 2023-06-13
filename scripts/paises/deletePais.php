
    <?php
        require_once ('../../app.php');
        use Models\Paises;
        $miPais = new Paises();
        $miPais->deleteByIdData($_GET['id']);  
        header('location:../../index.php');
    ?>  
