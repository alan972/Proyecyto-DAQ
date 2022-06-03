<?php

include('../header/header.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Iniciar Sesion</title>
    
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.1.0.min.js"></script>
    <script src="js/functions.ajax.js"></script>
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <?php
    
    include '../header/include.php';
    
    ?>

</head>
<body>

        <!--  Pagina de Login  -->

<div class="uk-container-expend">
    <div class="uk-container">
       <?php
        if ( isset($_SESSION['username']) && isset($_SESSION['userid']) && $_SESSION['username'] != '' && $_SESSION['userid'] != '0' ){
    
	echo '<div class="session_on">
        Ya iniciaste sesión | Ahora puedes cerrar sesión <a href="javascript:void(0);" id="sessionKiller">logout</a>.<span class="timer" id="timer"  style="margin-left: 10px;"></span>
     o si no, volver al inicio <a href="/daq-pagina/index.php" class="">Inicio</a>
        </div>';}
        else{
            echo'
            <form action="" method="post" class="uk-form-stacked">
                    <h3 class="uk-text-center">Iniciar Sesion</h3>                
                    <div class="uk-margin uk-text-center">
                        <label for="" class="uk-form-label">Usuario: </label><span uk-icon="user"></span>
                        <input type="text" class="uk-input uk-form-width-medium " name="login_username" id="login_username">
                    
                    </div>
                    
                    <div class="uk-margin uk-text-center">
                        <label for="" class="uk-form-label">Contraseña: </label><span uk-icon="lock"></span>
                        <input type="text" class="uk-input uk-form-width-medium" name="login_userpass" id="login_userpass">
                    </div>
                    <div class="uk-text-center">
                       
                        <button class="uk-button uk-button-primary" type="submit" id="login_userbttn" style="margin-bottom:10px;"><span uk-icon="sign-in" class="timer" id="timer"></span>Iniciar Sesion </button>
                    
                    </div> 
            </form> 
            ';
        }
        
        ?>
        <div class="uk-text-center">
            <div class="uk-alert-primary uk-width-1-2">
                <div class="uk-text-center">
                    <div id="alertBoxes"></div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
