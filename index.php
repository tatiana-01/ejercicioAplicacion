<?php 
include_once('app.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <script src="js/bootstrap/bootstrap.min.js" defer></script>
    <script src="js/procesarfactura.js" defer></script>
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
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
            <a class="nav-link">Tipos de viviendas</a>
            </li>
            <li class="nav-item">
            <a class="nav-link">Viviendas</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>
</body>
</html>