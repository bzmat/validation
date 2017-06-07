<?php 

	$to = 'mateusz.bzdzion@gmial.com';
	$subj = 'Nowy kontakt';

	$error_start = "<p class = 'alert alert-danger'>";
	$error_end = "</p>";

	$valid_form = TRUE;

	$redirect = "succes.php";

	$form_filds = array('name', 'phone', 'email', 'message' );
	$required = array('name', 'phone', 'email');

	foreach ($required as $require) {
		$error[$require] = '';
	}

	if (isset($_POST['submit'])) {

		//pobieranie danych
		foreach ($form_filds as $field) {
			$form[$field] = htmlspecialchars($_POST[$field]);
			}

		if ($form['name'] == '') {
			$error['name'] = $error_start ."Wypełnij wymagane pole".$error_end;
			$valid_form = FALSE;
		}

		if ($form['phone'] == '') {
			$error['phone'] = $error_start ."Wypełnij wymagane pole".$error_end;
			$valid_form = FALSE;
		}

		if ($form['email'] == '') {
			$error['email'] = $error_start ."Wypełnij wymagane pole".$error_end;
			$valid_form = FALSE;
		}

		if ($error['email'] == '' && !preg_match('/^[^\W][a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\@[a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\.[a-zA-Z]{2,4}$/', $form['email'])) {
			
			$error['email'] = $error_start ."Wprowadż prawidłowy email".$error_end;
			$valid_form = FALSE;
		}

		if ($error['phone'] == '' && !preg_match('^\+48[0-9]{9}$^', $form['phone'])) {
			
			$error['phone'] = $error_start ."Wprowadż prawidłowy numer telefonu".$error_end;
			$valid_form = FALSE;
		}

		if ($valid_form) {

			$message = "Imię: ".$form['name']."\n";
			$message = "Telefon: ".$form['phone']."\n";
			$message = "Email: ".$form['email']."\n";
			$message = "Wiadomość: ".$form['message'];

			$headers = "From: www.mateusz.com.pl<mateusz@gmail.com>\r\n";
			$headers = "X-sender:<admin@gmail.com>";

			mail($to, $subj, $message, $headers);

			header("Location: ".$redirect);
		}else{
			include('form.php');
		}

	}else{
		foreach ($form_filds as $field) {
			$form[$field] = '';
		}
		include('form.php');
	}

 ?>