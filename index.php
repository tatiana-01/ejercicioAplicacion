<?php 
ini_set("display_errors",1);
ini_set("display_startup_errors",1);
error_reporting(E_ALL);

include_once('app.php');
use Models\Paises;
use Models\Regiones;
$obj = new Paises;
$obj1=new Regiones();
$paises=$obj->loadAllData();
$_valor = json_decode(file_get_contents("php://input"), true);
 echo var_dump($_valor);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src="js/bootstrap/bootstrap.min.js" defer></script>


    
    
    <title>SGAV</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
        <svg height="90" width="130">
            <defs>
            <linearGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="0%" x3="0%" y3="100%">
                <stop offset="0%" style="stop-color:rgb(93, 0, 255);stop-opacity:1" />
                <stop offset="50%" style="stop-color:rgb(166, 0, 255, 0.561);stop-opacity:1" />
                <stop offset="100%" style="stop-color:rgb(93, 0, 255);stop-opacity:1" />
            </linearGradient>
            </defs>
            <ellipse cx="50%" cy="50%" rx="60" ry="40" fill="url(#grad1)" />
            <text fill="#ffffff" font-size="35" font-family="Verdana" x="20" y="60">SGAV</text>
            Sorry, your browser does not support inline SVG.
        </svg>
        </a>
        <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#">Paises</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Personas</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Regiones</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Ciudades</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Tipos de viviendas</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Viviendas</a>
            </li>
        </ul>
        </div> -->
    </div>
    </nav>
    <div class="container mt-5" style="margin-left: 0;">

        <div class="d-flex">
            <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <button class="nav-link active mb-3" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-paises" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Paises</button>
                <button class="nav-link mb-3" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-regiones" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Regiones</button>
                <button class="nav-link mb-3" id="v-pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#v-pills-ciudades" type="button" role="tab" aria-controls="v-pills-disabled" aria-selected="false" >Ciudades</button>
                <button class="nav-link mb-3" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-tipo" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Tipos de viviendas</button>
                <button class="nav-link mb-3" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-viviendas" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Viviendas</button>
                <button class="nav-link mb-3" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-personas" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Personas</button>
            </div>
            <div class="tab-content" id="v-pills-tabContent">

                <div class="tab-pane fade show active" id="v-pills-paises" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">
                    <form action="" id="formCountry">
                        <div class="input-group mb-3">
                            <span class="input-group-text ">Nombre Pais</span>
                            <input type="text" aria-label="First name" class="form-control" name="name_country">
                        </div>
                        <div class="input-group">
                            <button type="submit" class="btn btn-info">Enviar</button>
                        </div>
                    </form>
                </div>


                <div class="tab-pane fade" id="v-pills-regiones" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">
                    <form action="" id="formRegions">
                        <div class="input-group mb-3">
                            <span class="input-group-text ">Nombre Region</span>
                            <input type="text" aria-label="First name" class="form-control" name="name_region">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text ">Pais</span>
                            <select name="id_country" class="form-select"  id="">
                            <?php 
                                    foreach ($paises as $value) {
                                        echo "<option value='$value[id_country]'>".$value['name_country']."</option>";
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="input-group">
                            <button type="submit" class="btn btn-info">Enviar</button>
                        </div>
                    </form>
                </div>


                <div class="tab-pane fade" id="v-pills-ciudades" role="tabpanel" aria-labelledby="v-pills-disabled-tab" tabindex="0">                
                    <form action="" id="formCity">
                        <div class="input-group mb-3">
                            <span class="input-group-text ">Nombre Ciudad</span>
                            <input type="text" aria-label="First name" class="form-control" name="name_city">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text ">Pais</span>
                            <select  class="form-select"  id="selectCountry">
                            <?php 
                                    foreach ($paises as $value) {
                                        echo "<option value='$value[id_country]'>".$value['name_country']."</option>";
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text ">Region</span>
                            <select name="id_region" class="form-select"  id="selectRegion">
                            <?php 
                                   
                                        /* $valor=$idSelect;
                                        echo $valor; */
                                        $regiones=$obj1->loadDataById(intval($valor));
                                        foreach ($regiones as $value) {
                                            echo "<option value='$value[id_region]'>".$value['name_region']."</option>";
                                        }
                                ?>
                            </select>
                        </div>
                        <?php echo var_dump($_GET['valor']);?>
                        <div class="input-group">
                            <button type="submit" class="btn btn-info">Enviar</button>
                        </div>
                    </form>
                </div>


                <div class="tab-pane fade" id="v-pills-tipo" role="tabpanel" aria-labelledby="v-pills-messages-tab" tabindex="0">
                    <form action="" id="formHousetype">
                        <div class="input-group mb-3">
                            <span class="input-group-text">Nombre tipo de vivienda</span>
                            <input type="text" aria-label="First name" class="form-control" name="name_housetype">
                        </div>
                        <div class="input-group">
                            <button type="submit" class="btn btn-info">Enviar</button>
                        </div>
                    </form>
                </div>


                <div class="tab-pane fade" id="v-pills-viviendas" role="tabpanel" aria-labelledby="v-pills-settings-tab" tabindex="0">hola</div>
                <div class="tab-pane fade" id="v-pills-personas" role="tabpanel" aria-labelledby="v-pills-settings-tab" tabindex="0">...</div>
            </div>
        </div>

    </div>    
    <script src="controllers/paisController.js" type="text/javascript" ></script>
        <script src="controllers/regionController.js" type="text/javascript" ></script>
    <script src="controllers/ciudadController.js" type="text/javascript" ></script>
    <script src="controllers/selectRegion.js" type="text/javascript" ></script>
    <script src="controllers/tipoController.js" type="text/javascript" ></script>
</body>
</html>