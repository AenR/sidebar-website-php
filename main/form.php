<meta http-equiv="refresh" content="2;URL= ../contact">
<?

use PHPMailer\PHPMailer\Exception;

require 'path/to/PHPMailer/src/Exception.php';
require 'path/to/PHPMailer/src/PHPMailer.php';
require 'path/to/PHPMailer/src/SMTP.php';

require("class.phpmailer.php");

$mail = new PHPMailer();

$mail->IsSMTP(); // send via SMTP
$mail->Host = "smtp.gmail.com"; // SMTP servers
$mail->SMTPAuth = true; // turn on SMTP authentication
$mail->Username = "emrezalim33@mail.com"; // SMTP username
$mail->Password = "şifregir"; // SMTP password
$mail->CharSet = 'UTF-8';
$mail->Port = 587;
$mail->From = "emrezalim33@gmail.com"; // smtp kullanıcı adınız ile aynı olmalı
$mail->Fromname = "Emre Eren TAN";
$mail->AddAddress("emrezalim33@gmail.com", "Websitenizden gelen Siparişiniz.");
$mail->Subject = $_POST['name'];
$mail->Body = implode("  ",$_POST);
if(!$mail->Send())
 {
   echo "Mesaj Gönderilemedi <p>";
   echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}
echo '<script type="text/javascript">alert("E Postaniz Başarı ile Gönderilmiştir.");</script>';
 ?>