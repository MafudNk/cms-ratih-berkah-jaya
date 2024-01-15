<?php

// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;


// require 'mailer/src/Exception.php';
// require 'mailer/src/PHPMailer.php';
// require 'mailer/src/SMTP.php';

// if (isset($_POST["send"])) {

//     $mail = new PHPMailer(true);


//     $mail->isSMTP();
//     $mail->Host = 'ssl://smtp.gmail.com';
//     $mail->SMTPAuth = true;
//     $mail->Username = "sratihberkah@gmail.com";
//     $mail->Password = "wclflyhmloxvwzhu";
//     $mail->SMTPSecure = 'ssl';
//     $mail->Port = 456;
//     // $mail->SMTPOptions = array(
//     //     'ssl' => array(
//     //         'verify_peer' => false,
//     //         'verify_peer_name' => false,
//     //         'allow_self_signed' => true
//     //     )
//     // );
//     $mail->setFrom("sratihberkah@gmail.com");

//     $mail->addAddress($_POST['email']);
//     $mail->isHTML(true);

//     $mail->Subject = "from website";
//     $mail->Body = $_POST['message'];

//     $mail->send();


//     echo "
//         <script> alert('Sent Success');
//         document.location.href = 'http://localhost/cms-ratih-berkah-jaya/';
//         </script>
//     ";
// }
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
//Mengaktifkan SMTP debugging
// 0 = off (digunakan untuk production)
// 1 = pesan client
// 2 = pesan client dan server
$mail->SMTPDebug = 2;
//HTML-friendly debug output
$mail->Debugoutput = 'html';
//hostname dari mail server
$mail->Host = 'smtp.gmail.com';
// gunakan
// $mail->Host = gethostbyname('smtp.gmail.com');
// jika jaringan Anda tidak mendukung SMTP melalui IPv6
//Atur SMTP port - 587 untuk dikonfirmasi TLS, a.k.a. RFC4409 SMTP submission
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
$mail->addAddress('mafudmr5@gmail.com', 'John Doe');
//Subject email
$mail->Subject = 'PHPMailer GMail SMTP test';
//Membaca isi pesan HTML dari file eksternal, mengkonversi gambar yang di embed,
//Mengubah HTML menjadi basic plain-text
//  $mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));
//Replace plain text body dengan cara manual
$mail->Body = $_POST['message'];
$mail->AltBody = 'This is a plain-text message body';
//Attach file gambar
//  $mail->addAttachment('images/phpmailer_mini.png');
//mengirim pesan, mengecek error
if (!$mail->send()) {
    echo "Email Error: " . $mail->ErrorInfo;
} else {
    echo "Pesan Terkirim!";
}
