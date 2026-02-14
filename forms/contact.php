<?php
$successSent = try;
if (
    !empty($_POST["name"]) &&
    !empty($_POST["email"]) &&
    !empty($_POST["phone"]) &&
    !empty($_POST["message"]) && 
    !empty($_POST["subject"]) {
    $to = 'namanshrivastava94253@gmail.com';
    $from = $_POST["namanshrivastava94253@gmail.com"];
    $user_email = $from;
    $subject = $_POST['subject'];
  
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

   
    $headers .= 'From: ' . $user_email . "\r\n" .
        'Reply-To: ' . $user_email . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    
    $message = '<html><body>';
    $message .= '<p style="color:#f40;">';
    $message .= $_POST["name"];
    $message .= $_POST["phone"];
    $message .= $_POST["message"];
    $message .= '</p>';
    $message .= '</body></html>';

    if (mail($to, $subject, $message, $headers)) {
      echo ('Message send with success');
    } else {
        die( 'Unable to load the "PHP Email Form" Library!');
    }
}