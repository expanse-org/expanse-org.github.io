<?php
session_start();
if(isset($_POST['submit'])){
    $name = $_POST['yname'];
    $comment = $_POST['ycomment'];
    $email = $_POST['yemail'];
    if(!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL) === false){
        // MailChimp API credentials
        $apiKey = '5928da317fda8a350c05737549693cd4-us16';
        $listID = '840e1a2c07';
        
        // MailChimp API URL
        $memberID = md5(strtolower($email));
        $dataCenter = substr($apiKey,strpos($apiKey,'-')+1);
        $url = 'https://' . $dataCenter . '.api.mailchimp.com/3.0/lists/' . $listID . '/members/' . $memberID;
        
        // member information
        $json = json_encode([
            'email_address' => $email,
            'status'        => 'subscribed',
            'merge_fields'  => [
                'NAME'     => $name,
                'MESSAGE'     => $comment
            ]
        ]);
        
        // send a HTTP POST request with curl
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_USERPWD, 'user:' . $apiKey);
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
        $result = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        
        // store the status message based on response code
        if ($httpCode == 200) {
            $_SESSION['msg'] = '<p style="color: #34A853">Your message have successfully send</p>';
        } else {
            switch ($httpCode) {
                case 214:
                    $msg = 'You message are alraedy send';
                    break;
                default:
                    $msg = 'Some problem occurred, please try again.';
                    break;
            }
            $_SESSION['msg'] = '<p style="color: #EA4335">'.$msg.'</p>';
        }
    }else{
        $_SESSION['msg'] = '<p style="color: #EA4335">Please enter valid email address.</p>';
    }
}
// redirect to homepage
header('location:index.php?status=send#contact');