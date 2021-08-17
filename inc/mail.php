<?php

/* function mailtrap($phpmailer) {
  $phpmailer->isSMTP();
  $phpmailer->Host = 'smtp.mailtrap.io';
  $phpmailer->SMTPAuth = true;
  $phpmailer->Port = 2525;
  $phpmailer->Username = 'f2b9c2fdb00084';
  $phpmailer->Password = '325144719e5380';
}

add_action('phpmailer_init', 'mailtrap');
*/
 
function callback_send_email(){
 
		$name = $_REQUEST['name'];
		$email = $_REQUEST['email'];
		$message= $_REQUEST['message'];
		$subject = $_REQUEST['subject'];
		$email_body = "Contato Site.<br>".
		"Nome: $name . <br>".
		"Email: $email . <br>".
		"Assunto: $subject . <br>".
		"Mensagem: $message. <br>";
		$to = get_theme_mod( "set_email", "" );
		 
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		$headers .= "From: $name <$email> \r\n";
		$headers .= "Reply-To: $email \r\n";
		$mail = wp_mail($to,$subject,$email_body,$headers);
		
		if($mail){
		      echo "Email enviado com sucesso!";
	   }
}

add_action( 'wp_ajax_send_email', 'callback_send_email' );
add_action( 'wp_ajax_nopriv_send_email', 'callback_send_email' );

?>