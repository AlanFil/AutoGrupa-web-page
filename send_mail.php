<?php
$webmaster_email = "biuro@autogrupa.com.pl";
$kontakt  = "kontakt.php";

$email_address = $_POST['email_address'] ;
$message = $_POST['message'] ;
$person_name = $_POST['person_name'] ;
$phone_number = $_POST['phone_number'] ;
$msg = 
"Imię: " . $person_name . "\r\n" . 
"Email: " . $email_address . "\r\n" . 
"Numer telefonu: " . $phone_number . "\r\n" . 
"Wiadomość: " . $message ;

mail($webmaster_email, $person_name, $msg, $email_address);

function isInjected($str) {
	$injections = array('(\n+)',
	'(\r+)',
	'(\t+)',
	'(%0A+)',
	'(%0D+)',
	'(%08+)',
	'(%09+)'
	);
	$inject = join('|', $injections);
	$inject = "/$inject/i";
	if(preg_match($inject,$str)) {
		return true;
	}
	else {
		return false;
	}
}

if (!isset($_POST['email_address'])) {
header( "Location: $kontakt" );
}

elseif (empty($first_name) || empty($email_address)) {
header( "Location: $kontakt" );
}

elseif ( isInjected($email_address) || isInjected($first_name)  || isInjected($comments) ) {
header( "Location: $kontakt );
}

else {

	mail( "$webmaster_email", "Feedback Form Results", $msg );

	header( "Location: $kontakt" );
}
?>