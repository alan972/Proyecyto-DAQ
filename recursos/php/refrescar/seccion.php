<?php 
include('../login/libreria/globales.php');
$p = mysqli_query($conexion ,"UPDATE sensor SET valor = $var where tipo = 'humedad'") or die ("problemas");
$t = mysqli_query($conexion ,"UPDATE sensor SET valor = $var_temp where tipo = 'temperatura'") or die ("problemas");
$g = mysqli_query($conexion ,"UPDATE sensor SET valor = $var_gas where tipo = 'gas'") or die ("problemas");
?>
       <table class="uk-table uk-table-divider uk-background-secondary uk-light" >
  <thead>
    <tr>
      <th scope="">Tipo:</th>
      <th scope="">Fecha:</th>
      <th scope="">valor:</th>
    </tr>
  </thead>
  <tbody>
       <?php
       $registros=mysqli_query($conexion,"SELECT * FROM sensor");
       while($myrow=mysqli_fetch_array($registros))
       {
       ?>
        <tr>
            <td class=""><?php echo $myrow['tipo']?></td>
            <td class=""><?php echo $myrow['date']?></td>
            <td class=""><?php echo $myrow['valor']?>%</td>  
        </tr>
       <?php
        }
        ?>
  </tbody>
</table>
