<?php 

include("con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['apellido']) >= 1 && strlen($_POST['cedula']) >= 1 && strlen($_POST['nacimiento']) >= 1 && strlen($_POST['ciudad']) >= 1 && strlen($_POST['calle']) >= 1 && strlen($_POST['correo']) >= 1 && strlen($_POST['numero']) >= 1 && strlen($_POST['trabajo']) >= 1 && strlen($_POST['ocupacion']) >= 1  && strlen($_POST['gana']) >= 1 && strlen($_POST['solicitud']) >= 1 && strlen($_POST['comentario']) >= 1) {

	    $nombre = trim($_POST['nombre']);
	    $apellido = trim($_POST['apellido']);
	    $cedula = trim($_POST['cedula']);
	    $nacimiento = trim($_POST['nacimiento']);
	    $ciudad = trim($_POST['ciudad']);
	    $calle = trim($_POST['calle']);
	    $correo = trim($_POST['correo']);
	    $numero = trim($_POST['numero']);
	    $trabajo = trim($_POST['trabajo']);
	    $ocupacion = trim($_POST['ocupacion']);
	    $gana = trim($_POST['gana']);
	    $solicitud = trim($_POST['solicitud']);
	    $comentario = trim($_POST['comentario']);
	    $fechareg = date("d/m/y");



	    $consulta = "INSERT INTO datos2(nombre, apellido, cedula, nacimiento, ciudad, calle, correo, numero, trabajo, ocupacion, gana, solicitud, comentario, fecha_reg) VALUES ('$nombre','$apellido','$cedula','$nacimiento','$ciudad','$calle','$correo','$numero','$trabajo','$ocupacion','$gana','$solicitud','$comentario','$fechareg')";
	    $resultado = mysqli_query($conex,$consulta);
	    
	    	if ($resultado) {
	    	?>

	    	<meta HTTP-EQUIV="Refresh" CONTENT="0; URL=confirmar_datos.html"> 
	     	<a style="text-decoration:none;" href="prestamos.html"> <h3 style="text-align: center;
	width: 50%;
	padding: 12px;
	margin-left: 88px;
	border-radius: 8px;
	margin-top: 30px;
	background-color: #1e6;
	color: red" class="ok">¡VOLVER ATRAS!</h3></a>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	
           <?php
    }
}

?>











