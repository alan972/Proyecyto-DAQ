           
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