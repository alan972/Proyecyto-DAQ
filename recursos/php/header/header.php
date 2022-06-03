<?php
session_start();
?>
<!-- Navegación-->
<header>
    <nav class="uk-navbar-container" uk-navbar>

        <div class="uk-navbar-left">
             <ul class="uk-navbar-nav">
                <li class="uk-active uk-text-uppercase"><a href="/daq-pagina/index.php" uk-icon="database">PHP y Arduino</a></li>
            </ul>

        </div>
        <div class="uk-navbar-right">

            <ul class="uk-navbar-nav">

                <li class="">

                    <a href="">Opciones <span uk-icon="chevron-down"></span></a>

                    <div class="uk-dropdown" uk-dropdown="mode: click">

                        <hr>

                            <div class="uk-text-center">

                                <?php
                                if(!isset($_SESSION['username'])){
                                    echo    '
                                    <ul class="uk-nav uk-navbar-dropdown-nav">
                                    
                                        <li class="uk-active uk-text-uppercase">Sesiones</li>
                                        <hr>

                                        <li class="uk-active uk-text-uppercase"><a href="/daq-pagina/recursos/php/login/login.php" class="">Iniciar Sesion<span uk-icon="user"></span></a></li>

                                    </ul>
                                    ';
                                }else if(isset($_SESSION['username']) && $_SESSION['rol'] == "administrador"){
                                    echo '
                                    
                                        <ul class="uk-nav uk-navbar-dropdown-nav">

                                            <li class="uk-active uk-text-uppercase">Configuración</li>
                                            <hr>

                                            <li class="uk-active"><a href="/daq-pagina/recursos/php/configuracion/configuracion.php" class="">Configuración de un Usuario<span uk-icon="info"></span></a></li>
                                            <hr>
                                            <li class="uk-active"><a href="/daq-pagina/recursos/php/registro-usuario/registro.php" class="">Registrar un Usuario <span uk-icon="users"></span></a></li>
                                            <hr>
                                            <li class="uk-active uk-text-uppercase"><a href="/daq-pagina/recursos/php/login/logout.php" class="">Cerrar Sesion<span uk-icon="sign-out"></span></a></li>
                                        </ul>

                                    ';

                                }

                                ?>

                            </div>

                    </div>

                </li>

            </ul>

        </div>
    </nav>

</header>
