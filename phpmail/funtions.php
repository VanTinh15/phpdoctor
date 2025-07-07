<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

    function sendMail($acceptEmail,$subject,$content){

   

    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                     
        $mail->isSMTP();                                           
        $mail->Host       = 'smtp.gmail.com';                     
        $mail->SMTPAuth   = true;                                   
        $mail->Username   = 'atieng551@gmail.com';                   
        $mail->Password   = 'gbhykzhyzthgnrqd';                             
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;           
        $mail->Port       = 465;                                    

        $mail->setFrom('atieng551@example.com', 'Hệ thống liên hệ');
        $mail->addAddress($acceptEmail);    

        $mail->isHTML(true);                               

        $mail->CharSet = 'UTF-8'; 
        $mail->Subject = $subject;
        $mail->Body    = $content;
       
        $mail->send();
        echo 'Gửi phản hồi thành công';
    } catch (Exception $e) {
        echo "Gửi mail thất bại. Mailer Error: {$mail->ErrorInfo}";
    }
        }
?>