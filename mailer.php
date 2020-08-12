<?php

error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");

global $_GET;
	// security and parsing
 
		
	if (! key_exists ( 'name', $_GET )&&! key_exists ( 'mail', $_GET ) && ! key_exists ( 'phone', $_GET )){
		echo 'fail';
		die (); // bad request
	}

	
	
	
 	$name=$_GET ['name'];
 	$mail =$_GET ['mail'];
	$phone=$_GET ['phone'];
	$tr='';
	

$message= '<br/><b>Full Name:</b><br/>'.$name.
					'<br/><b>Email:</b><br/>'.$mail.
					'<br/><b>Phone:</b><br/>'.$phone.'<br>'.
$tr.=date('d/m/Y H:i',time()).',';


		

$to='liranmalul10@gmail.com';
 
$subject = 'A new form filled - Bitsurit ';

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$headers .= 'To: dontreply<info@gh1.co.il>' . "\r\n";
$headers .= 'From: dontreply <info@gh1.co.il>' . "\r\n";
$headers .= 'Reply-To: dontreply <info@gh1.co.il>'. "\r\n";
@mail($to, $subject, $message, $headers);
 
 
 
  echo (true); //Boring error messages from anything else!
die();