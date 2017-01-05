<?php
	//Si existe el campo (nombre) y no esta vacio...
	if(isset($_POST['nombre']) && !empty($_POST['nombre']) &&
		isset($_POST['apellido']) && !empty($_POST['apellido']) &&
		isset($_POST['asunto']) && !empty($_POST['asunto']) &&
		isset($_POST['mensaje']) && !empty($_POST['mensaje'])){

			$destino = "nayeli@pcuervo.com";
			$desde = "From: " . "nayeli.jordan16@gmail.com";
			$asunto = $_POST['asunto'];
			$mensaje = $_POST['mensaje'];
			//mail(to, subject, message)
			mail($destino, $asunto, $mensaje, $desde);
			echo "Correo enviado";
		} else {
			echo "Problemas al envíar";
		}
?>