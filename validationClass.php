<?php

	
class validation
{
	public function __construct() {
      
  }

  public function validName($name) {

  	if($name != "") {
			$pattern_name= '/^[a-zA-Z\ \']+$/';
			if (preg_match($pattern_name, $name) === 1) {
				$error["error"] = 0;
				$error["name"] = "name";
			} else {
				$error["error"] = 1;
				$error["name"] = "name";
			}
		} else {
			$error["error"] = 1;
			$error["name"] = "name";
		}

		return $error;
  }

  public function validPhone($phone) {

  	if($phone != "") {
			$pattern_phone = '/^([\+][0-9]{1,3}[ \.\-])?([\(]{1}[0-9]{2,6}[\)])?([0-9 \.\-\/]{3,20})((x|ext|extension)[ ]?[0-9]{1,4})?$/';
			if (preg_match($pattern_phone, $phone) === 1) {
				$error["error"] = 0;
				$error["phone"] = "phone";
			} else{
				$error["error"] = 1;
				$error["phone"] = "phone";
			}
		} else {
			$error["error"] = 1;
			$error["phone"] = "phone";
		}

		return $error;

  }

  public function validMail(){

  	if($mail != ""){
			$pattern_mail = '/^(?!(?:(?:\\x22?\\x5C[\\x00-\\x7E]\\x22?)|(?:\\x22?[^\\x5C\\x22]\\x22?)){255,})(?!(?:(?:\\x22?\\x5C[\\x00-\\x7E]\\x22?)|(?:\\x22?[^\\x5C\\x22]\\x22?)){65,}@)(?:(?:[\\x21\\x23-\\x27\\x2A\\x2B\\x2D\\x2F-\\x39\\x3D\\x3F\\x5E-\\x7E]+)|(?:\\x22(?:[\\x01-\\x08\\x0B\\x0C\\x0E-\\x1F\\x21\\x23-\\x5B\\x5D-\\x7F]|(?:\\x5C[\\x00-\\x7F]))*\\x22))(?:\\.(?:(?:[\\x21\\x23-\\x27\\x2A\\x2B\\x2D\\x2F-\\x39\\x3D\\x3F\\x5E-\\x7E]+)|(?:\\x22(?:[\\x01-\\x08\\x0B\\x0C\\x0E-\\x1F\\x21\\x23-\\x5B\\x5D-\\x7F]|(?:\\x5C[\\x00-\\x7F]))*\\x22)))*@(?:(?:(?!.*[^.]{64,})(?:(?:(?:xn--)?[a-z0-9]+(?:-+[a-z0-9]+)*\\.){1,126}){1,}(?:(?:[a-z][a-z0-9]*)|(?:(?:xn--)[a-z0-9]+))(?:-+[a-z0-9]+)*)|(?:\\[(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){7})|(?:(?!(?:.*[a-f0-9][:\\]]){7,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?)))|(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){5}:)|(?:(?!(?:.*[a-f0-9]:){5,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3}:)?)))?(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))(?:\\.(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))){3}))\\]))$/iD';
			if (preg_match($pattern_mail, $mail) === 1) {
				$error["error"] = 0;
				$error["mail"] = "mail";
			} else {
				$error["error"] = 1;
				$error["mail"] = "mail";
			}
		} else {
			$error["error"] = 1;
			$error["mail"] = "mail";
		}

		return $error;

  }

  public function validTextarea(){

  	if(isset($inputquery]) || $inputquery !== "") {
  		$error["error"] = 0;
			$error["textarea"] = "textarea";
		}else{
			$error["error"] = 1;
			$error["textarea"] = "textarea";
		}

		return $error;

  }

  public function sendMail(){
  	$title = 'Consulta : ' . $name;
  	$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= 'From: '.$mail. "\r\n";
		$message = '
		<html>
		<body>
		  <p><strong>Nombre:</strong> '.$name.'<br/> <strong>Telefono:</strong> '.$phone.' <br/><strong>Mensaje:</strong>' . $inputquery . '</p>
		</body>
		</html>
		';
  	if(mail('abbrumax@gmail.com, emicam85@hotmail.com',$titulo,$message,$headers)){
  		$response["enviado"] = 'Datos enviados correctamente';
			$response["error"] = 0;
			$response["form"] = '
			<div class="col-md-6 col-md-offset-3 slide" id="contform">
				<h2>Contacto</h2>
	      <div id="wapper-form" class="col-md-8 col-md-offset-2">
	          <form action="" id="form-contact" role="form" method="post">
	            <div class="form-group">
	              <label for="inputname" class="control-label">Nombre</label>
	              <input type="text" class="form-control input-sm validate[required, custom[onlyLetterSp]]" name="inputname" id="inputname" placeholder="Nombre">
	            </div>
	            <div class="form-group">
	              <label for="inputphone" class="control-label">Telefono</label>
	              <input type="name" class="form-control input-sm validate[required, custom[phone]]" name="inputphone" id="inputphone" placeholder="Telefono">
	            </div>
	            <div class="form-group">
	              <label for="inputemail" class="control-label">E-mail</label>
	              <input type="e-mail" class="form-control input-sm validate[required, custom[email]]" name="inputemail" id="inputemail" placeholder="E-mail">  
	            </div>
	            <div class="form-group">
	              <label for="inputquery" class="control-label">Consulta</label>
	              <textarea class="form-control input-sm validate[required]" rows="3" id="inputquery"></textarea>
	            </div>
	            <div class="form-group col-md-offset-9">
	              <button type="submit" class="btn btn-default" id="sendmail">Enviar</button>
	            </div>				
	          </form>
					<div id="error"></div>
	      </div>
	    </div>
			';
  	} else {
  		$response["enviado"] = 'Se produjo un error intentelo de nuevo.';
			$response["error"] = 1;
  	}

  	return $response;
  }
}

?>