<?php
if(isset($_POST['sends'])){
    if(!empty($_POST['fname']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['subject']) && !empty($_POST['message'])){
        $fullName = $_POST['fname'];
        $dest = "guzmancarlosalberto754@gmail.com";
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
            // echo '<h1> Mensaje Enviado </h1>';
        }else{
            // echo '<h1> Mensaje No Enviado </h1>';
        }
    }
    else{
        echo 'No Hay Valores';
    }
}
