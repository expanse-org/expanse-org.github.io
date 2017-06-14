<?php

    if(isset($_POST['yname']) && isset($_POST['yemail']) && isset($_POST['ycomment']))
    {
        

        // get values 
        $yname = $_POST['yname'];
        $yemail = $_POST['yemail'];
        $ycomment = $_POST['ycomment'];
       $email = "asimizb@gmail.com";

        
     $response1 = array();
     $response1['error'] = false;
include_once('PHPMailer/class.phpmailer.php');
require 'PHPMailer/PHPMailerAutoload.php';
require_once('PHPMailer/class.smtp.php');
$mail = new PHPMailer(true);
 $mail->IsSMTP();
$mail->SMTPDebug  = true;
$mail->SMTPAuth = true; // authentication enabled

$mail->Port = 25; // or 587
$mail->IsHTML(true);
$mail->Username = "expanseteam.org@gmail.com";
$mail->Password = "expanse555&&";
$mail->SetFrom("expanseteam.org@gmail.com", "Expanse Forward Message");
$mail->isHTML(true);  // Set email format to HTML

$bodyContent = '<h1>Contact Form entered Information</h1>';
$bodyContent .= '<p>Name: ';
$bodyContent .= $yname;
$bodyContent .= '<p>Email: ';
$bodyContent .= $yemail;
$bodyContent .= '<p>Message: ';
$bodyContent .= $ycomment;
$bodyContent .= '<p> Sent By <b>Expanse Team</b></p>';

$mail->Subject = 'Expanse Slack Contact Message';
$mail->Body    = $bodyContent;
$mail->AddAddress($email);
$mail->SMTPSecure = 'tls'; // secure transfer enabled REQUIRED for Gmail
$mail->Host = "smtp.gmail.com"; 
 if(!$mail->Send()) {
   $response1['message'] ="SomeError occur"; 
$response1['error'] = true;
echo json_encode($response1);
return;
 } else {
    $response1['message'] ="Email has sent"; 
$response1['error'] = false;
echo json_encode($response1);
return;
 }

    //echo json_encode($response);
    }
    else{
        echo "A problem occured";
    }

?>