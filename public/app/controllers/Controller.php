<?php
namespace App\Controller;

use Config\Response;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Controller
{
    protected $response;
    public function __construct()
    {
        $this->response = new Response;
    }

    public function sendMail($subject="", $message, $recipient, $recipient_name="")
    {
        $mail = new PHPMailer();                              // Passing `true` enables exceptions
        try {
            //Server settings
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'codehouseltd@gmail.com';                 // SMTP username
            $mail->Password = '4524majesty';                           // SMTP password
            $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587;                                    // TCP port to connect to
        
            //Recipients
            $mail->setFrom('devappst.info@devappsconsult.com', 'Devapps Team');
            $mail->addAddress($recipient, $recipient_name);     // Add a recipient
            $mail->addBCC('isaacbremang@gmail.com');
        
            //Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = $subject;
            $mail->Body    = $message;
            $mail->AltBody = $message;
        
            $mail->send();
            return true;
            //echo 'Message has been sent';
        } catch (Exception $e) {
            return false;
            //echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
        }
    }
}
