<?php

session_start();
error_reporting(0);
$rol = $_SESSION['rol'];
if (!isset($rol) == "administrador") {

    echo 'No puede ver esta página. Regrese al inicio. <a href="/daq-pagina/index.php">Inicio</a>';
} else {


?>

    <!DOCTYPE html>

    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Registro | Usuarios</title>
        <?php
        include_once '../header/include.php';
        ?>
    </head>

    <body>
        <?php
        include '../header/header.php';
        ?>
        <!-- Pagina de registro  -->
        <div class="container-fluid containerldark bg-dark">
            <h3 class="text-center text-white">Registro de usuarios</h3>
            <div class="container-light bg-light width">
                <div class="container">
                    <form action="" method="post" class="form-group">
                        <hr>
                        <div class="row">
                            <div class="col-12 col-sm-5 col-lg-4 col-xl-4">
                                <p class="text-center">Nombre</p>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="col-12 col-sm-5 col-lg-4 col-xl-4">
                                <p class="text-center">Apellido</p>
                                <input type="text" name="apellido" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-5 col-lg-4 col-xl-4">
                                <p class="text-left">Sexo</p>
                                <select name="sexo" id="">
                                    <option value="femenino">Femenino</option>
                                    <option value="masculino">Masculino</option>
                                </select>
                            </div>
                            <div class="col-12 col-sm-5 col-lg-4 col-xl-4">
                                <p class="text-center">Dni</p>
                                <input type="text" name="dni" class="form-control">
                            </div>
                            <div class="col-12 col-sm-5 col-lg-4 col-xl-4">
                                <p class="text-center">Carrera</p>
                                <input type="text" name="carrera" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-5 col-lg-4 col-xl-4">
                                <p class="text-center">Telefono</p>
                                <input type="text" name="tel" class="form-control">
                            </div>
                            <div class="col-12 col-sm-5 col-lg-4 col-xl-4">
                                <p class="text-center">Email</p>
                                <input type="text" name="email" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-5 col-lg-4 col-xl-4">
                                <p class="text-center">Usuario</p>
                                <input type="text" name="user" class="form-control">
                            </div>
                            <div class="col-12 col-sm-5 col-lg-4 col-xl-4">
                                <p class="text-center">Contraseña</p>
                                <input type="password" name="contra" class="form-control">
                            </div>
                            <div class="col-12 col-sm-5 col-lg-4 col-xl-4">
                                <p class="text-center">Repetir Contraseña</p>
                                <input type="password" name="repecontra" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-5 col-lg-4 col-xl-4">
                                <p class="text-center">Rol</p>
                                <select name="rol" id="">
                                    <option value="administrador">Administrador</option>
                                    <option value="usuario">Usuario</option>
                                </select>
                            </div>
                        </div>
                        <hr>
                        <div class="text-center">
                            <button class="uk-button uk-button-secondary" name="registro">Registro</button>
                        </div>
                        <br>
                    </form>
                    <?php
                    $name = $_POST['name'];
                    $apellido = $_POST['apellido'];
                    $sexo = $_POST['sexo'];
                    $dni = $_POST['dni'];
                    $carrera = $_POST['carrera'];
                    $tel = $_POST['tel'];
                    $email = $_POST['email'];
                    $user = $_POST['user'];
                    $contra = md5($_POST['contra']);
                    $repecontra = $_POST['repecontra'];
                    $rol = $_POST['rol'];

                    if (isset($_POST['registro'])) {
                        if ($name == "" || $apellido == "" || $sexo == "" || $dni == "" || $carrera == "" || $tel == "" || $email == "" || $user == "" || $contra == "" || $rol == "") {
                            echo '<div class="alert alert-danger">Por favor, complete los campos</div>';
                        } else if ($contra != $repecontra) {
                            echo '<div class="alert alert-danger">Las contraseñas no son iguales</div>';
                        } else {
                            $insertar = mysqli_query($conexion, "insert into personas(nombre,apellido,sexo,dni,carrera,telefono,email,user,passwd,rol) values ('$name','$apellido','$sexo','$dni','$carrera','$tel','$email','$user','$contra','$rol')");
                            if ($insertar) {
                                echo '<div class="alert alert-success">Se registro correctamente</div>';
                            }
                        }
                    }


                    ?>
                </div>
            </div>
        </div>
    </body>

    </html>

<?php

}

?>