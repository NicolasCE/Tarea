<?php

use models\LinksModel as LinksModel;

session_start();
    require_once("../models/LinksModel.php");
    if(isset($_SESSION['usuario'])){
    $model = new LinksModel;
    $links = $model->getAllLinksByEmail($_SESSION['usuario']['email']);
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="#e0e0e0 grey lighten-2">
    
    <?php 
    if(isset($_SESSION['usuario'])){?>
        <nav class="#d84315 deep-orange darken-3">
            <div class="nav-wrapper">
                <a href="#" class="brand-logo">Bienvenido <?=$_SESSION['usuario']['nombre'] ?> </a>
                 <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="nuevo_link.php">Nuevo Link</a></li>
                    <li><a href="mislinks.php">Mis links</a></li>
                    <li><a href="salir.php">Salir</a></li>
                </ul>
            </div>
        </nav>
        
        <div class="container">
            <div class="row">
            <?php 
            foreach($links as $link){ ?>
                <div class="col l4 m4 s12">
                            <div class="card">
                                <div class="card-image">
                                <img src="https://comofuncionaque.com/wp-content/uploads/2015/04/La-URL-es-la-direccion-de-una-informacion-que-se-encuentra-en-un-determinado-alojamiento-o-dominio-de-la-red.png">
                                <span class="card-title"><?= $link['nombre'] ?></span>
                                </div>
                                <div class="card-content">
                                
                                </div>
                                <div class="card-action">
                                <a target="_BLANK" href="<?= $link['link']?>">Ir a la pagina</a>
                                </div>
                            </div>

                        </div>
            <?php } ?>
            </div>
        </div>


    <?php } else { ?>
        <h3 class="red-text">Error de Acceso</h3>
        <p>
            Usted no tiene permisos para estar aqui
            <a href="../index.php">Home</a>
        </p>

        
    <?php } ?>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>