<?php
session_start();
error_reporting(0);
$rol = $_SESSION['rol'];
if (!isset($rol) == 'administrador') {

    echo 'No puede ver esta página. Regrese al inicio. <a href="/daq-pagina/index.php">Inicio </a>';
} else {

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Configuración | Usuario</title>

    <?php
        include_once '../header/include.php';
        ?>
</head>

<body>
    <header>
        <?php
            include '../header/header.php';
            ?>
    </header>

    <!-- Mostrar Usuarios -->

    <div class="uk-container-expand ">
        <h3 class="uk-text-center ">Configuracion</h3>
        <hr>
        <div class="uk-container ">
            <h5 class="uk-text-center">Buscar usuario</h5>
            <form action="configuracion.php?tipo=buscar" method="post" class="uk-form-stacked">
                <div class="uk-margin uk-text-center">
                    <label for="" class="uk-form-label">Usuario: </label><span uk-icon="user"></span>
                    <input type="text" class="uk-input uk-form-width-medium " name="name" id="login_username">
                </div>
                <div class="uk-text-center">
                    <button class="uk-button uk-button-secondary" name="buscar">Buscar</button>
                </div>
            </form>
            <?php

                $tipo = $_GET['tipo'];


                if ($tipo == "buscar") {

                    $nombre = $_POST['name'];
                    $num = mysqli_query($conexion, "select * from personas where nombre like '%$nombre%' or apellido like '%$nombre%' or id='$nombre'");

                    if ($nombre == "") {
                        echo '
        <div class="uk-alert uk-alert-danger uk-text-center">Ingrese un nombre</div>
        ';
                    } else {
                        if (mysqli_num_rows($num) <= 0) {
                            echo '
        <div class="uk-alert uk-alert-danger uk-text-center">Nombre no existente</div>            
        ';
                        } else {

                            echo '
            <table class="uk-table">
                <tr>
                <td>id: </td>
                <td>Nombre:</td>
                <td>Email: </td>
                <td>Usuario: </td>
                <td>Rol: </td>
                <td>Configuracion: </td>
   
                </tr>';

                            while ($myrow = mysqli_fetch_array($num)) {
                ?>
            <tr>
                <td><?php
                                        $id = $myrow['id'];
                                        ?><input type="text" value="<?php echo $myrow['id']; ?>" name="id"
                        class="uk-input uk-form-width-medium"></td>
                <td><?php echo $myrow['nombre']; ?></td>
                <td><?php echo $myrow['email']; ?></td>
                <td><?php echo $myrow['user'];  ?></td>
                <td><?php echo $myrow['rol']; ?></td>
                <?php echo '
            <form action="" method="post" class="form-stacked">

            
            <td><a href="configuracion.php?tipo=borrar&id=';
                                    echo $id;
                                    echo '" class="uk-button uk-button-secondary">Borrar</a>
            <td><a href="configuracion.php?tipo=modificar&id=';
                                    echo $id;
                                    echo '"class="uk-button uk-button-secondary">Modificar</a>
            </form>';


                                    ?>
            </tr>
            <?php
                            }
                        }
                    }
                    mysqli_free_result($num);
                }


                if ($tipo == "borrar") {
                    $id = $_GET['id'];



                    if ($id) {

                        $q = "DELETE from personas where id = " . $id;
                        $sql = mysqli_real_query($conexion, $q) or die(mysqli_error());

                        echo $sql;
                        if ($sql) {

                            echo '<div class="uk-alert uk-alert-danger">Usuario eliminado</div>';
                        } else {

                            echo '<div class="uk-alert uk-alert-dang">No se pudo</div>';
                        }
                    } else {
                        echo '<div class="uk-alert uk-alert-danger uk-text-center"No hay ID</div>';
                    }
                }

                if ($tipo == "modificar") {
                    $id = $_GET['id'];
                    if ($id) {


                        $num = mysqli_query($conexion, "SELECT * FROM personas where id = $id");

                        $row = mysqli_fetch_array($num);
                        $nombre_per = $row['nombre'];


                        echo '<form action="script.php?tipo=actualizar&id=';
                        echo $id;
                        echo '" method="post" class="uk-form-stacked">';
                        ?>
            <div class="uk-text-center">
                <label for="" class="uk-form-label">Nombre</label>
                <input type="text" class="uk-input uk-form-width-medium" name="name" value=<?php echo $nombre_per; ?>>
                <label for="" class="uk-form-label">Apellido</label>
                <input type="text" class="uk-input uk-form-width-medium" name="apellido"
                    value=<?php echo $row['apellido']; ?>>
                <label class="uk-form-label" for="form-horizontal-select">Sexo</label>
                <div class="uk-form-controls">
                    <select class="uk-select uk-form-width-medium" name="sexo" id="form-horizontal-select">
                        <option value="masculino">Masculino</option>
                        <option value="femenino">Femenino</option>
                    </select>
                </div>
                <label for="" class="uk-form-label">Dni</label>
                <input type="text" class="uk-input uk-form-width-medium" name="dni" value=<?php echo $row['dni']; ?>>
                <label for="" class="uk-form-label">Carrera</label>
                <input type="text" class="uk-input uk-form-width-medium" name="carrera"
                    value=<?php echo $row['carrera']; ?>>
                <label for="" class="uk-form-label">Telefono</label>
                <input type="text" class="uk-input uk-form-width-medium" name="tel"
                    value=<?php echo $row['telefono']; ?>>
                <label for="" class="uk-form-label">Email</label>
                <input type="text" class="uk-input uk-form-width-medium" name="email"
                    value=<?php echo $row['email']; ?>>
                <label for="" class="uk-form-label">Usuario</label>
                <input type="text" class="uk-input uk-form-width-medium" name="user" value=<?php echo $row['user'] ?>>
                <label for="" class="uk-form-label">Contraseña</label>
                <input type="password" class="uk-input uk-form-width-medium" name="contra">
                <label for="" class="uk-form-label">Repetir Contraseña</label>
                <input type="password" class="uk-input uk-form-width-medium" name="repecontra">
                <label for="" class="uk-form-label">Rol</label>
                <div class="uk-form-controls">
                    <select name="roles" class="uk-select uk-form-width-medium">
                        <option value="administrador">Administrador</option>
                        <option value="usuario">Usuario</option>
                    </select>
                </div>

            </div>
            <br>
            <div class="uk-text-center">
                <button class="uk-button uk-button-secondary" name="actualizar_btn">Actualizar Registro</button>
            </div>
            </form>
            <?php

                    }
                }
                if ($tipo == "actualizar") {
                    $id = $_GET['id'];
                    $nombre = $_POST['name'];
                    $apellido = $_POST['apellido'];
                    $sexo = $_POST['sexo'];
                    $dni = $_POST['dni'];
                    $carrera = $_POST['carrera'];
                    $tel = $_POST['tel'];
                    $email = $_POST['email'];
                    $user = $_POST['user'];
                    $contra = $_POST['contra'];
                    $repecontra = $_POST['repecontra'];
                    $rol = $_POST['roles'];
                    $registro = mysqli_query($conexion, "UPDATE personas set nombre = '$nombre',apellido  = '$apellido',sexo = '$sexo' ,dni = '$dni' ,carrera = '$carrera' ,telefono = '$tel' ,email = '$email',user = '$user' ,passwd = '$md5contra',rol = '$rol' where id = '$id' ");
                }


                ?>
            </table>
        </div>
    </div>
</body>

</html>
<?php
}

?>