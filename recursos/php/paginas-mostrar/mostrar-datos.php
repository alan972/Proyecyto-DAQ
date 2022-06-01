<style>
    body{
        background-image: url(/daq-pagina/recursos/imagenes/834373-plantas-verdes-naturaleza.jpg);
    }
</style>
           
           <!--  Funcion que muestra los datos -->
	           <div id="seccionRecargar">
	            
	           </div>
<script type="text/javascript">
	$(document).ready(function(){
		setInterval(
				function(){
					$('#seccionRecargar').load('recursos/php/refrescar/seccion.php');
				},2000
			);
	});
</script>