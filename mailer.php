<?php
require_once('phpmailer/class.phpmailer.php');

$adminemail = array(
    "kkorushkin@gmail.com"
);

foreach($adminemail as $recipient){
    $date = date("d.m.y H:i");
    //$upload_dir = 'uploads';

    $name  = $_POST['name'];
    $tel   = $_POST['tel'];
    $email = $_POST['email'];
    $subj  = $_POST['subj'];
    $msg = ( ($name) ? "Имя: " . $name . "\n" : '' ) . ( ($email) ? "email: " . $email . "\n" : '' ) . ( ($tel) ? "тел.: " . $tel . "\n" : '' );

    $mail = new PHPMailer();

    //$mail->isSMTP();
    //$mail->SMTPSecure = 'ssl';
    $mail->Host = 'mail.highqlondon.com';
    $mail->SMTPAuth = false;
    $mail->Username = 'sender@highqlondon.com';
    $mail->Password = 'PB{qeP1~E!{O';
    $mail->Port = 25;

    $mail->CharSet = 'UTF-8';
    $mail->SetFrom('info@homsters.kz','homsters-lp');
    //$mail->AddReplyTo('');
    $mail->AddAddress($recipient);
    $mail->Subject = $subj . " | " . $date;
    $mail->Body = $msg;

    /*foreach ($_FILES["fileFF"]["error"] as $key => $error) {
        if ($error == UPLOAD_ERR_OK) {
            $tmp_name = $_FILES["fileFF"]["tmp_name"][$key];
            $fname = basename($_FILES["fileFF"]["name"][$key]);
            move_uploaded_file($tmp_name, "$upload_dir/$fname");
            $mail->AddAttachment("$upload_dir/$fname");
        }
    }*/

    echo ($mail->Send()) ? json_encode(1) : json_encode(0);
}

