<?php

date_default_timezone_set('Etc/UTC');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require 'mailer/src/Exception.php';
require 'mailer/src/PHPMailer.php';
require 'mailer/src/SMTP.php';
//Membuat instance PHPMailer baru
$mail = new PHPMailer;
//Memberi tahu PHPMailer untuk menggunakan SMTP
$mail->isSMTP();

$mail->SMTPDebug = 2;
//HTML-friendly debug output
$mail->Debugoutput = 'html';
//hostname dari mail server
$mail->Host = 'smtp.gmail.com';

$mail->Port = 587;
//Set sistem enkripsi untuk menggunakan - ssl (deprecated) atau tls
$mail->SMTPSecure = 'tls';
//SMTP authentication
$mail->SMTPAuth = true;
//Username yang digunakan untuk SMTP authentication - gunakan email gmail
$mail->Username = "sratihberkah@gmail.com";
$mail->Password = "wclflyhmloxvwzhu";
//Email pengirim
$mail->setFrom('sratihberkah@gmail.com', 'First Last');
//Alamat email alternatif balasan
//Email tujuan
$mail->addAddress('helpdesk@ratihberkahjaya.com', 'Website Supported');
//Subject email
$mail->Subject = 'From Website';
//Membaca isi pesan HTML dari file eksternal, mengkonversi gambar yang di embed,
//Mengubah HTML menjadi basic plain-text
//  $mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));
//Replace plain text body dengan cara manual
$mail->Body = "email : ". $_POST['email'] . "\n message : " . $_POST['message'];
$mail->AltBody = '';
//Attach file gambar
//  $mail->addAttachment('images/phpmailer_mini.png');
//mengirim pesan, mengecek error
if (!$mail->send()) {
    echo "Email Error: " . $mail->ErrorInfo;
} else {
    echo "
    <script> alert('Sent Success');
         document.location.href = 'http://localhost/cms-ratih-berkah-jaya/';
    </script> ";
}
