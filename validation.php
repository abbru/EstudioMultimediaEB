<?php

	$error = 0;
	$name = $_POST['inputname']; 
	$phone = $_POST['inputphone'];
	$mail = $_POST['inputemail'];

	/* Validar Mail */
	if($mail != ""){
		$pattern_mail = '/^(?!(?:(?:\\x22?\\x5C[\\x00-\\x7E]\\x22?)|(?:\\x22?[^\\x5C\\x22]\\x22?)){255,})(?!(?:(?:\\x22?\\x5C[\\x00-\\x7E]\\x22?)|(?:\\x22?[^\\x5C\\x22]\\x22?)){65,}@)(?:(?:[\\x21\\x23-\\x27\\x2A\\x2B\\x2D\\x2F-\\x39\\x3D\\x3F\\x5E-\\x7E]+)|(?:\\x22(?:[\\x01-\\x08\\x0B\\x0C\\x0E-\\x1F\\x21\\x23-\\x5B\\x5D-\\x7F]|(?:\\x5C[\\x00-\\x7F]))*\\x22))(?:\\.(?:(?:[\\x21\\x23-\\x27\\x2A\\x2B\\x2D\\x2F-\\x39\\x3D\\x3F\\x5E-\\x7E]+)|(?:\\x22(?:[\\x01-\\x08\\x0B\\x0C\\x0E-\\x1F\\x21\\x23-\\x5B\\x5D-\\x7F]|(?:\\x5C[\\x00-\\x7F]))*\\x22)))*@(?:(?:(?!.*[^.]{64,})(?:(?:(?:xn--)?[a-z0-9]+(?:-+[a-z0-9]+)*\\.){1,126}){1,}(?:(?:[a-z][a-z0-9]*)|(?:(?:xn--)[a-z0-9]+))(?:-+[a-z0-9]+)*)|(?:\\[(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){7})|(?:(?!(?:.*[a-f0-9][:\\]]){7,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?)))|(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){5}:)|(?:(?!(?:.*[a-f0-9]:){5,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3}:)?)))?(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))(?:\\.(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))){3}))\\]))$/iD';
		if (preg_match($pattern_mail, $mail) !== 1) {
			$error = 1;
		}
	}
	else {
		$error = 1;
	}
	//////////////////////////////////
	
	/* Validation Name */
	if($name != ""){
		$pattern_name= '/^[a-zA-Z\ \']+$/';
		if (preg_match($pattern_name, $name) !== 1) {
			$error = 1;
		}
	}
	else {
		$error = 1;
	}
	////////////////////////////////
	
	/* Validation Telephone */
		if($phone != ""){
			$pattern_phone = '/^([\+][0-9]{1,3}[ \.\-])?([\(]{1}[0-9]{2,6}[\)])?([0-9 \.\-\/]{3,20})((x|ext|extension)[ ]?[0-9]{1,4})?$/';
			if (preg_match($pattern_phone, $phone) !== 1) {
				$error = 1;
			}
	}
	else {
		$error = 1;
	}
	//////////////////////////////////
	
	/* Validation Textarea */
	if(!isset($_POST['inputquery']) || $_POST['inputquery'] == "") {
		$error = 1;	
	}
	//////////////////////////////////

	
	if( $error === 0) {
		$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
		$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$cabeceras .= 'From: '.$mail. "\r\n";
		$mensaje = '
		<html>
		<body>
		  <p><strong>Nombre:</strong> '.$name.'<br/> <strong>Telefono:</strong> '.$phone.' <br/><strong>Mensaje:</strong>'.$_POST['inputquery'].'</p>
		</body>
		</html>
		';
		/*if(mail('emicam85@hotmail.com, abbrumax@gmail.com', $name, $mensaje, $cabeceras)){
			$sendmail_error = false;	
		}	
		else {
			$sendmail_error = true;
		}*/
	}

?>


<div class="container mfp-hide" id="contact-form">
	<div class="col-md-6 col-md-offset-3 slide" id="contform">
	<h2>Contacto</h2>
	  <div class="col-md-8 col-md-offset-2">
	  	<?php if($error === 0 /*&& $sendmail_error === false*/) : ?>
	  	<p>Se envio el mail correctamente.</p>
	  	<?php elseif($error == 1) : ?>
	  	<p>hubo un error.</p>
	  	<?php endif; ?>
	  </div>
	</div>
</div>