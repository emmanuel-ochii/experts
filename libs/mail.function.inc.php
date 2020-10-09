<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


if (isset($_POST['email']) && isset($_POST['plan']) && isset($_POST['amount']) && isset($_POST['payment_mthd'])) {
    $email = $_POST['email'];
    $plan = $_POST['plan'];
    $amount = $_POST['amount'];
    $payment_mthd = $_POST['payment_mthd'];


    function send_mail($to, $subject, $body)
    {


        require 'PHPMailer/src/Exception.php';
        require 'PHPMailer/src/PHPMailer.php';
        require 'PHPMailer/src/SMTP.php';

        $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
        try {
            // Server settings                                // Enable verbose debug output
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'meragah4ck3r@gmail.com';                 // SMTP username
            $mail->Password = 'Looping@123';                          // SMTP password
            $mail->SMTPSecure = 'ssl';                            // Enable ssl encryption, `ssl` also accepted
            $mail->Port = 465;                                    // TCP port to connect to

            //Recipients
            $mail->setFrom("support1@expertinvests.com");
            $mail->addAddress($to);     // Add a recipient
            //$mail->addAddress('ellen@example.com');               // Name is optional
            $mail->addReplyTo('noreply@wifi.ng');
            //$mail->addCC('cc@example.com'); 
            //$mail->addBCC('email@domain.com', '');

            //Attachments
            //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
            //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

            //Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = $subject;
            $mail->Body    = $body;
            $mail->AltBody = "Please, enable HTML email on your email account. Thank you!";

            $mail->send();
            return true;
        } catch (Exception $e) {


            // echo 'Message could not be sent.';
            // echo 'Mailer Error: ' . $mail->ErrorInfo;
            $errors[] = 'Mailer Error: ' . $mail->ErrorInfo;
            return false;
        }
    }


    function send_mail2($to, $subject, $body)
    {


        require 'PHPMailer/src/Exception.php';
        require 'PHPMailer/src/PHPMailer.php';
        require 'PHPMailer/src/SMTP.php';

        $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
        try {
            // Server settings
            $mail->SMTPDebug = 2;                                 // Enable verbose debug output
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'meragah4ck3r@gmail.com';                 // SMTP username
            $mail->Password = 'Looping123';                           // SMTP password
            $mail->SMTPSecure = 'ssl';                            // Enable ssl encryption, `ssl` also accepted
            $mail->Port = 465;                                    // TCP port to connect to

            //Recipients
            $mail->setFrom("support1@expertinvests.com");
            $mail->addAddress($to);     // Add a recipient
            //$mail->addAddress('ellen@example.com');               // Name is optional
            $mail->addReplyTo('noreply@wifi.ng');
            //$mail->addCC('cc@example.com'); 
            //$mail->addBCC('email@domain.com', '');

            //Attachments
            //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
            //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

            //Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = $subject;
            $mail->Body    = '<strong>' . $email . '</strong><br><br><h3>Plan:  ' . $plan . '</h3><br><br><h3>Amount: ' . $amount . '</h3>';
            $mail->AltBody = "Please, enable HTML email on your email account. Thank you!";

            $mail->send();
            return true;
        } catch (Exception $e) {


            // echo 'Message could not be sent.';
            // echo 'Mailer Error: ' . $mail->ErrorInfo;
            $errors[] = 'Mailer Error: ' . $mail->ErrorInfo;
            return false;
        }
    }
}
