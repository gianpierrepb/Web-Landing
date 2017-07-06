<title> MyCommunity | Contact </title>
<?php

if(isset($_POST['asunto']) && !empty($_POST['asunto']) &&
   isset($_POST['email']) && !empty($_POST['email']) &&
   isset($_POST['mensaje']) && !empty($_POST['mensaje']) &&
   isset($_POST['nombre']) && !empty($_POST['nombre']))
{
	$destinatario = "morenocaverom@gmail.com";
	$asunto = $_POST['asunto'];
	$mensaje = $_POST['mensaje'];
	$desde = "From: " . $_POST['email'] . " Nombre:" . $_POST['nombre'];


	mail($destinatario,$asunto,$mensaje,$desde);

	$msg='Mensaje Enviado con Exito.';//echo '<script>alert("correo enviado");<script>';echo "correo enviado";
}else{

	$msg='Mensaje no enviado.';//echo '<script>alert("correo no enviado");<script>';echo "correo no enviado";
}
	echo '<script>
		alert("'.$msg.'");
	      </script>';
        echo '<script type="text/javascript">
	        window.location.assign("index.html#contact");
	      </script>';
	      
?>