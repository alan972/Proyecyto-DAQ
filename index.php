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
        <h1>Datos de los sensores</h1>
        <?php
        include 'recursos/php/paginas-mostrar/mostrar-datos.php';
        ?>
    </div>
    <div>
        <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin" style="margin-" uk-grid>
            <div class="uk-card-media-left uk-cover-container" style="margin-top:10px;">
                <img src="recursos/imagenes/thumb-1920-594732.jpg" alt="" uk-cover>
                <canvas width="600" height="400"></canvas>
            </div>
            <div style="margin-top:10px;">
                <div class="uk-card-body">
                    <h3 class="uk-card-title">Pagina web:</h3>
                    <p>Esto es una página web, enfocada en mostrar datos, a tiempo real, sobre: temperatura, gas y humedad, de un arduino.</p>
                </div>

            </div>

        </div>

    </div>

</body>

</html>