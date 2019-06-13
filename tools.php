<?php

	//Email Servicio

	if(isset($_POST['send'])) {



		$email_to = "ingluisfelipe07@gmail.com";

		$email_subject = "Contacto desde Si-C-Mata";

		$email_from = "webmaster@sicmata.com";

		

		if(!isset($_POST['name']) ||

		!isset($_POST['phone']) ||

		!isset($_POST['email']) ||

		!isset($_POST['service'])) {



		echo "<b>Ocurrió un error y el formulario no ha sido enviado. </b><br />";

		echo "Por favor, vuelva atrás y verifique la información ingresada<br />";

		die();

		}



		$email_message = "Contacto desde Sicmata.com\n\n";

		$email_message .= "Nombre: " . $_POST['name'] . "\n";

		$email_message .= "E-mail: " . $_POST['email'] . "\n";

		$email_message .= "Telefono: " . $_POST['phone'] . "\n";

		$email_message .= "Servicios: " . $_POST['service'] . "\n\n";





		

		$headers = 'From: '.$email_from."\r\n" .

		'Reply-To: '.$email_from."\r\n" .

		'X-Mailer: PHP/' . phpversion();

		mail($email_to, $email_subject, $email_message, $headers);

	}

	//Email Contacto

	if(isset($_POST['send2'])) {



		$email_to = "ingluisfelipe07@gmail.com";

		$email_subject = "Contacto desde Si-C-Mata";

		$email_from = "webmaster@sicmata.com";

		

		if(!isset($_POST['name2']) ||

		!isset($_POST['phone2']) ||

		!isset($_POST['email2']) ||

		!isset($_POST['asunto']) ||

		!isset($_POST['mensaje'])) {



		echo "<b>Ocurrió un error y el formulario no ha sido enviado. </b><br />";

		echo "Por favor, vuelva atrás y verifique la información ingresada<br />";

		die();

		}



		$email_message = "Contacto desde Sicmata.com\n\n";

		$email_message .= "Nombre: " . $_POST['name2'] . "\n";

		$email_message .= "E-mail: " . $_POST['email2'] . "\n";

		$email_message .= "Telefono: " . $_POST['phone2'] . "\n";

		$email_message .= "Asunto: " . $_POST['asunto'] . "\n";

		$email_message .= "Mensaje: " . $_POST['mensaje'] . "\n\n";





		

		$headers = 'From: '.$email_from."\r\n" .

		'Reply-To: '.$email_from."\r\n" .

		'X-Mailer: PHP/' . phpversion();

		mail($email_to, $email_subject, $email_message, $headers);

	}

?>