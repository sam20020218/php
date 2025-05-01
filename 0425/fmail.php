<?php
$link = mysqli_connect( 
    'localhost',  
    'root',       
    '',  
    'work');  
mysqli_set_charset($link, 'utf8');

$no=$_GET["no"];
$sql="SELECT * FROM user WHERE no='".$no."'";


if($result=mysqli_query($link, $sql)){
    $row = mysqli_fetch_assoc($result);
    $name=$row["uname"];
    $to=$row["uemail"];
}
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
//Server settings
$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
$mail->isSMTP();                                            //Send using SMTP
$mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
$mail->Username   = 'sam479134@gmail.com';                     //SMTP username
$mail->Password   = 'qtqr uvof vwvn nxft';                               //SMTP password
$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
$mail->Port       = 465;                                  //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

//Recipients
$mail->setFrom('sam479134@gmail.com', 'Mailer');
//$mail->addAddress('joe@example.net', 'Joe User');     //Add a recipient
$mail->addAddress('a1104115@mail.nuk.edu.tw');
$mail->addAddress($to);              //Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

//Attachments
//$mail->addAttachment('pic\\'.$photo.'.png');         //Add attachments
// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

//Content
$subject='註冊失敗';
$mail->isHTML(true);
$mail->Subject = "=?UTF-8?B?" . base64_encode($subject) . "?=";                                  //Set email format to HTML
//$mail->Subject = ;
$mail->Body    = '姓名:'.$name.'註冊失敗';
//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

$mail->send();
 echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>