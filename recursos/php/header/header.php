<?php
session_start();
?>
<!--  Menu de Navegacion -->
<nav class="uk-navbar-container uk-background-secondary" uk-navbar>

    <div class="uk-navbar-right">

        <ul class="uk-navbar-nav">
            <li class="uk-active uk-text-uppercase"><a><span>Arduino + PHP</span></a></li>
            <li class="">
                <a href="">Opciones <span uk-icon="triangule-down"></span></a>
                <div class="uk-navbar-dropdown" uk-dropdown="mode: click">
                    <hr>
                    <ul class="uk-nav uk-navbar-dropdown-nav">
                        <li class="uk-acive"><a href="/daq-pagina/index.php" uk-icon="home">Inicio </a></li>
                    </ul>
                    <hr>
                    <?php

                    if (!isset($_SESSION['username'])) {
                        echo '                            
                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                <li class="uk-active uk-text-uppercase">Sesiones</li>
                                <hr>
                                <li><a href="/daq-pagina/recursos/php/login/login.php">Iniciar Sesion: <span uk-icon="sign-in"></span></a></li>
                            </ul>
                            ';
                    } else if (isset($_SESSION['username']) && $_SESSION['rol'] == "administrador") {
                        echo '
                        <hr>
                        <ul class="uk-nav uk-navbar-dropdown-nav">
                            <li class="uk-active uk-text-uppercase">Configuracion</li>
                            <hr>
                            <li><a href="/daq-pagina/recursos/php/configuracion/configuracion.php">Configurar usuario</a></li>
                            <li><a href="/daq-pagina/recursos/php/registro-usuario/registro.php">Registrar Usuarios</a></li>
                        </ul>
                        <hr>
                        <ul class="uk-nav uk-navbar-dropdown-nav">
                            <li class="uk-active uk-text-uppercase">Sesiones</li>
                            <hr>
                            <li><a href="/daq-pagina/recursos/php/login/logout.php">Cerrar Sesion <span uk-icon="sign-out"></span></a></li>
                        </ul>                        
                        ';
                    }

                    ?>
                </div>

            </li>
        </ul>

    </div>

</nav>