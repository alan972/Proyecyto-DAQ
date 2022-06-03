<?php

error_reporting(0);
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Inicio</title>
    <?php
    include_once 'recursos/php/header/include.php';
    ?>
</head>

<body>

    <header>

        <?php
        include 'recursos/php/header/header.php';
        ?>

    </header>
    <div class="uk-background-cover uk-height-large uk-panel uk-flex uk-flex-center uk-flex-middle" style="background-image: url(recursos/imagenes/834373-plantas-verdes-naturaleza.jpg);background-size: cover;background-position: center;background-attachment: fixed;">
        <h1 class="uk-text-lighter">¡Bienvenido a la página!</h1>
    </div>
    <div>
        <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin" style="margin: 10px;" uk-grid>
            <div class="uk-card-media-left uk-cover-container" style="">
                <img src="recursos/imagenes/thumb-1920-594732.jpg" alt="" uk-cover>
                <canvas width="800" height="600"></canvas>
            </div>
            <div style="">
                <div class="uk-card-body">
                    <h3 class="uk-card-title">Datos del Arduino:</h3>
                    <p>Datos a tiempo real un arduino</p>
                <?php
                    include 'recursos/php/paginas-mostrar/mostrar-datos.php';
                ?>
                </div>
            </div>
        </div>

    </div>

</body>

</html>