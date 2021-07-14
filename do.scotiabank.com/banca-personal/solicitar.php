<!DOCTYPE html>
<html>
<head>
	<title>Solicitud de prestamos</title>
	<link rel="stylesheet" type="text/css" href="sti/forma.css">
	<meta charset="utf-8">
</head>

 <link rel="icon" type="image/vnd.microsoft.icon" href="../content/dam/scotiabank/enterprise/images/logos/favicon.ico"/>
    <link rel="shortcut icon" type="image/vnd.microsoft.icon" href="../content/dam/scotiabank/enterprise/images/logos/favicon.ico"/>

    

   <body style="background:white;
   background-repeat: no-repeat;
   opacity:
   width
   height:300px;
   font-size:">

   	 <div 
     style="opacity: 0.;
   	 background-image: url();
   	 border-radius: 10px;
   	 height: 1000px;
   	 margin: auto;
   	 position: relative;
   	 padding: auto;
   	 margin: center;
   	 padding: center;
   	 width: 400px;">

   	 <img 
      style="width: 100px;
      height: 43px;
      width: 130px;
      margin-left: 2px;
      border-radius: 5px;
      "src="images/logo12.png">  
     
     <span 
     style="color: white;
     font-size: 25px;">
    </span>
   	       
   	  
   	      <div id="info" style="background:red;
   	      height: 1350px;
   	      width:400px;
   	      margin: 0px;
   	      padding: 0px;
          margin-bottom: 25px;
   	      margin:;
   	      border-radius: 10px;">
   	      
   	
   	      <br>

<form method="post">

	     <input class="campos" type="text" name="nombre" placeholder="INGRESE NOMBRE"required="" autofocus="">
	      
	      <input class="campos" type="text" name="apellido" placeholder="INGRESE APELLIDOS" required="" autofocus="">
	      
	      <input minlength="11" maxlength="13" class="campos" type="text" name="cedula" placeholder="INGRESE CEDULA/PASAPORTE" required="" autofocus="">
	      
        <label style="font-size: 21px;
        display: block;
        text-align: center; color: white;" >Fecha de nacimiento</LABEL>
        <input class="campos" type="date" name="nacimiento" required="">

        <select class="botton" name="ciudad" required=""  >
          <option>Lugar de Nacimiento</option>
          <option> Azua</option> <option>Bahoruco</option> <option>Barahona</option> <option>Dajabon</option> <option>Duarte</option> <option>El seibo</option> <option>Elias pina</option> <option>Espaillat</option> <option>Hato mayor</option> <option>Hermanas mirabal</option> <option>Independencia</option> <option>La altagracia</option> <option>La romana</option> <option>La vega</option> <option>Maria trinidad sanchez</option> <option>Monseñol nouel</option> <option>Monte cristi</option> <option>Monte plata</option> <option>Pedernales</option> <option>Peravia</option> <option>Puerto plata</option> <option>Samana</option> <option>San cristobal</option> <option>San jose de ocoa</option> <option>San juan </option> <option>San pedro de macoris</option> <option>Sanchez ramirez</option> <option>Santiago</option> <option>Santiago rodriguez</option> <option>Santo domingo</option> <option>Valverde</option> <option>Distrito nacional</option>
        </select>

        <input minlength="5" maxlength="" class="campos" type="text" name="calle" placeholder="SECTOR, CALLE, N° RESIDENCIA" autocomplete="" required="" autofocus="">
	      
	      
	      
	    <input class="campos" type="email"name="correo" placeholder="CORREO ELECTRONICO" required="">
	      
	    <input class="campos" type="text"name="numero" maxlength="10" minlength="10" placeholder="INGRESE N° TELEFONO/CELULAR" required="">

      <input class="campos" type="text"name="trabajo" placeholder="LUGAR DE TRABAJO" required="">
	      
        <input class="campos" type="text"name="ocupacion" placeholder="CARGO" required="">

	    <input class="campos" type="number"name="gana" placeholder="SUELDO MENSUAL" required="" autocomplete="off">
	      
	    <input class="campos" type="number"name="solicitud" placeholder="PRESTAMO A SOLICITAR"require="" autocomplete="off">
	      
	    <textarea class="comentario" type="text"name="comentario"placeholder="MOTIVO DE PRESTAMO" required="" ></textarea>

	   <input style="display: block;
height: 47px;
width: 300px;
cursor: pointer;
color:red;
border-radius: 10px;
font-size: 20px;
font-family: 'calibri';
text-decoration:#24303c;" type="submit" name="register" value="Confirmar">
      </input>
            
        <?php 
        include("registrar.php");
        ?>

<p>      <p>

              <a style="font-size: 20px; text-align: center; color: white; display: block;
              margin-top: 60px; margin-bottom: 30px;" href="sti/tyc-prestamosingarantia-medioselectronicos.pdf" target="_self">Términos y Condiciones de Préstamos

</form>	     
</div>
</div>




     </body>
</html>