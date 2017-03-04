<?php
include(__DIR__ ."/../". "config.php");
error_reporting(E_ALL);
ini_set('display_errors', '1');
require_once 'phpmailer/PHPMailerAutoload.php';

if (isset($_POST['inputName']) && isset($_POST['inputEmail']) && isset($_POST['inputPhone']) && isset($_POST['inputMessage'])) {

    //check if any of the inputs are empty
    if (empty($_POST['inputName']) || empty($_POST['inputEmail']) || empty($_POST['inputPhone']) || empty($_POST['inputMessage'])) {
        $data = array('success' => false, 'message' => 'Please fill out the form completely.');
        echo json_encode($data);
        exit;
    }

    // Check if phone number is numeric and more than six characters
    if (!is_numeric($_POST ['inputPhone']) || strlen($_POST['inputPhone']) < 6) {
        $data = array('success' => false, 'message' => 'Please enter a valid phone number.');
        echo json_encode($data);
        exit;
    }


    //create an instance of PHPMailer
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->CharSet = 'UTF-8';

    // SMTP settings from config.php
    $mail->Host       = $SMTP_Host;             
    $mail->SMTPDebug  = $SMTP_SMTPDebug; // enables SMTP debug information (for testing)
    $mail->SMTPAuth   = $SMTP_SMTPAuth;                  
    $mail->Port       = $SMTP_Port;                    
    $mail->Username   = $SMTP_Username;      
    $mail->Password   = $SMTP_Password;             

    // Form settings
    $mail->From = $_POST['inputEmail'];
    $mail->FromName = $_POST['inputName'];
    $mail->AddAddress('fredrik@uneedit.se'); // Recipient 
    $mail->Subject = "Message from website"; // Subject
    $mail->IsHTML(true);
    $mail->Body =  "<h2>New message from website</h2>";
    $mail->Body .= "Name: " . $_POST['inputName'];
    $mail->Body .= "<br>";
    $mail->Body .= "Company: " . $_POST['inputCompany'];
    $mail->Body .= "<br>";
    $mail->Body .= "Phone: " . $_POST['inputPhone'];
    $mail->Body .= "<br>";
    $mail->Body .= "E-mail: " . $_POST['inputEmail'];
    $mail->Body .= "<br>";
    $mail->Body .= "Message: " . stripslashes($_POST['inputMessage']);
    $mail->Body .= "<br><br><br>";
    $mail->Body .= "Sent from IP: " .$_SERVER['REMOTE_ADDR'];

    if (isset($_POST['ref'])) {
        $mail->Body .= "\r\n\r\nRef: " . $_POST['ref'];
    }

    if(!$mail->send()) {
        $data = array('success' => false, 'message' => 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo);
        echo json_encode($data);
        exit;
    }

    $data = array('success' => true, 'message' => 'Thanks! We have received your message.');
    echo json_encode($data);

} else {

    $data = array('success' => false, 'message' => 'Please fill out the form completely.');
    echo json_encode($data);

}
?>