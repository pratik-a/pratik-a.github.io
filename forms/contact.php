<?php
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\SMTP;
  use PHPMailer\PHPMailer\Exception;

  require '../vendor/autoload.php';

  $mail = new PHPMailer(true);
  $mail->CharSet = 'UTF-8';

  $body = $_POST['message'];

  $mail->IsSMTP();
  $mail->Host = 'smtp.gmail.com';

  $mail->SMTPSecure = 'tls';
  $mail->Port = 993;
  $mail->SMTPDebug = 1;
  $mail->SMTPAuth = true;

  $mail->Username = 'akshansh.portfolio@gmail.com';
  $mail->Password = '*********';

  $mail->SetFrom($_POST['email'], $_POST['name']);
  $mail->AddReplyTo($_POST['email'], $_POST['name']);
  $mail->Subject = $_POST['subject'];
  $mail->MsgHTML($body);

  $mail->AddAddress('akshansh2000@gmail.com');

  $mail->send();
?>
