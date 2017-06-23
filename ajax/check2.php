<?php
header('Content-Type: application/json');
     $response1 = array();
     $response1['error'] = false;
    if(isset($_POST['yname']) && isset($_POST['yemail']) && isset($_POST['ycomment']))
    {

        // get values 
        $yname = $_POST['yname'];
        $yemail = $_POST['yemail'];
        $ycomment = $_POST['ycomment'];
    
    if(empty($yname)){
$response1['message'] ="Please Enter Name Field"; 
$response1['error'] = true;
echo json_encode($response1);
return;
}
if(empty($yemail)){
$response1['message'] ="Please Enter Email Field"; 
$response1['error'] = true;
echo json_encode($response1);
return;
}
if (!(eregi('^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.([a-zA-Z]{2,4})$', $yemail))){
$response1['message'] ="Invalid Email";   
$response1['error'] = true;
echo json_encode($response1);
return;
}
if (strlen($yname) < 3 OR strlen($yname) > 50) {
$response1['message'] ="Name length should be within 3-50 characters long"; 
$response1['error'] = true;
echo json_encode($response1);
return;
}
if(empty($ycomment)){
$response1['message'] ="Please Enter Message Field"; 
$response1['error'] = true;
echo json_encode($response1);
}
if (strlen($ycomment) < 8 OR strlen($ycomment) > 300) {
$response1['message'] ="Message length should be within 8-300 characters long"; 
$response1['error'] = true;
echo json_encode($response1);
return;
}
else{

        

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
}
    //echo json_encode($response);
    }
    else{
        echo "A problem occured";
    }

?>