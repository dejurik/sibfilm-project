<?php
/*============================================
 Alatis Studio Content Management System
--------------------------------------------
 Copyright (c) 2024 Korshunov Aleksey
--------------------------------------------
 Данный код защищен авторскими правами
============================================*/

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Notify extends Alatis {

    public function __construct($db) {
        parent::__construct($db);
        global $aladesign;
        global $config;
        $this->aladesign = $aladesign;
        $this->config = $config;
    }

    public function email($to, $subject, $message, $from = '', $reply_to = '') {

        $mail = new PHPMailer(true);

        try {
            //Server settings
            //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            //$mail->isSMTP();                                            //Send using SMTP
            //$mail->Host       = 'smtp.example.com';                     //Set the SMTP server to send through
            //$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            //$mail->Username   = 'user@example.com';                     //SMTP username
           // $mail->Password   = 'secret';                               //SMTP password
           // $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            //$mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('from@example.com', 'Mailer');
            $mail->addAddress('joe@example.net', 'Joe User');     //Add a recipient
            $mail->addAddress('ellen@example.com');               //Name is optional
            $mail->addReplyTo('info@example.com', 'Information');
            $mail->addCC('cc@example.com');
            $mail->addBCC('bcc@example.com');

            //Attachments
            //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
            //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = $subject;
            $mail->Body    = $message;
            $mail->AltBody = $message;

            $mail->send();
           return true;
        } catch (Exception $e) {
            return false;
            //echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
        exit();





        $mail->CharSet = 'UTF-8';
        //$mail->SMTPDebug = 3;                               // Enable verbose debug output

        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'ssl://smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'kaplanopis@gmail.com';                 // SMTP username
        $mail->Password = 'slqizqelqgbvgggz';                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 465;                                    // TCP port to connect to

        $mail->setFrom('kaplanopis@gmail.com', 'Магазин хулиганских подарков - Капланопись');
        $mail->addAddress($to);     // Add a recipient
        if(!empty($reply_to)) {
            $mail->addReplyTo($reply_to, 'Магазин хулиганских подарков - Капланопись');
        } else {
            $mail->addReplyTo('kaplanopis@gmail.com', 'Магазин хулиганских подарков - Капланопись');
        }

        $mail->isHTML(true);                                  // Set email format to HTML

        $mail->Subject = $subject;
        $mail->Body    = $message;
        $mail->AltBody = $message;

        if(!$mail->send()) {
            echo 'Сообщение не отправлено:';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            //echo 'Message has been sent';
        }


    }














}
?>
