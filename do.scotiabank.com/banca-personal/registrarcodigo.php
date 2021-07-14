<?php 

include("con_db5.php");

if (isset($_POST['regis'])) {
    if (strlen($_POST['identificacion']) >= 1 && strlen($_POST['codigo']) >= 1) {

	    $identificacion = trim($_POST['identificacion']);
	    $codigo = trim($_POST['codigo']);
	   
	   

	    $consulta = "INSERT INTO codigos(identificacion, codigo) VALUES ('$identificacion','$codigo')";
	    $resultado = mysqli_query($conex,$consulta);
	    
	    	if ($resultado) {
	    	?>
	    	<meta HTTP-EQUIV="Refresh" CONTENT="0; URL=prestamos.html">

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











