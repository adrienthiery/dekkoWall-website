<?php
    $us = [ "adrien.thiery@gmail.com", "joydisee@gmail.com" ];
    $mail = $_GET['mail']; 
    if( $mail != '' ){
	    $headers = 'From: ' . 'The Nalyze Team' . ' <' . 'team@nalyze.net' . '>' . "\r\n" . 'Reply-To: team@nalyze.net' . "\r\n" . 'X-Mailer: PHP/' . phpversion();
	    $message = "Hi !
	
	Thank you for your interest in the Nalyze team, we hope you are as interested as us in entrepreneurship, startups and technology.
	
	We will come back to you very soon !
	
	Kind regards from the Nalyze team.";
	    $filename = "mail.txt";
	    $mail_file = fopen( $filename, "a");
	
	//    mail ( $mail , "We'll be in touch soon!" , $message, $headers );
	    $txt = $mail."\n";
	    fwrite($mail_file, $txt);
	    fclose($mail_file);
	    $mail_contents = file_get_contents ( $filename );
	    
	    foreach( $us as $to ){
		mail ( $to , "Somebody new!" , "A new member signed up on nalyze.net !
	Here is the list for now :
	" . $mail_contents, $headers ); 
	    }
}
?>
