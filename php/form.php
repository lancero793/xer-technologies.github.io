<?php
if(isset($_POST['btn-send'])){
    if(!empty($_POST['fname']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['subject']) && !empty($_POST['message'])){
        $dest = "guzmancarlosalberto754@gmail.com";
        $fullName = $_POST['fname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        $header = "From: $email" . "\r\n";
        $header .= "Full Name: $fullName" . "\r\n";
        $header .= "To: $dest" . "\r\n";
        $header .= "Email: $email" . "\r\n";
        $header .= "Phone: $phone" . "\r\n";
        $header .= "X-Mailer: PHP/" . phpversion();
        $mail = @mail($dest, $subject, $message, $header);
        if($mail){
            echo "Mensaje enviado";
        }else{
            echo 'error';
        }
    }
    else{
        echo 'No Hay Valores';
    }
}
