<?php
header('Content-Type: application/json');
    if(isset($_POST['yname']) && isset($_POST['yemail']))
    {

        // get values 
        $yname = $_POST['yname'];
        $yemail = $_POST['yemail'];
    
        
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
$mail->SetFrom("expanseteam.org@gmail.com", "Expanse");
$mail->isHTML(true);  // Set email format to HTML

$bodyContent = '<h1>Successfully Recieved</h1>';
$bodyContent .= '<p>Hello ';
$bodyContent .= $yname;
$bodyContent .= '<p>Thanks for contacting us your message have been recieved by our team';

$bodyContent .= '<p> Sent By <b>Expanse Team</b></p>';

$mail->Subject = 'Expanse Slack Confirmation';
$mail->Body    = $bodyContent;
$mail->AddAddress($yemail);
$mail->SMTPSecure = 'tls'; // secure transfer enabled REQUIRED for Gmail
$mail->Host = "smtp.gmail.com"; 
 if(!$mail->Send()) {
$response1['error'] = true;
echo json_encode($response1);
return;
 } else {

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