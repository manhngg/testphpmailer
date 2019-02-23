<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
//Load Composer's autoloader
require './vendor/autoload.php';

/* gui mail**************************************************************************/
$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->IsSMTP();
    $mail->SMTPDebug = 2;
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';
    $mail->Host = "smtp.gmail.com";
    $mail->Mailer = "smtp";
    $mail->Port = 587; 
    $mail->Username = "manh11117@gmail.com";
    $mail->Password = "Abc@123456789";                                
    //Recipients
    $mail->setFrom('manh11117@gmail.com', 'adidas');
    $mail->addAddress('manh11117@gmail.com', 'Manh');     // Add a recipient
    //Attachments
    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->CharSet = 'UTF-8';
    $mail->Subject = 'Manh'.', đây là tiêu đề email';
    $mail->Body    = 'Hi';
    $mail->send();
    echo 'Email đã được gửi';
    
} catch (Exception $e) {
    echo 'Email không thể gửi. Lỗi PHPMailer: ', $mail->ErrorInfo;
}
/* gui mail**************************************************************************/
?>
