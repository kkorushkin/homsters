<?php
require_once('phpmailer/class.phpmailer.php');

$adminemail = array(
    "kkorushkin@gmail.com"
);

if(!empty($_POST['query'])){

    $qs = explode('&',$_POST['query']);

    $t_id = array_pop($qs);
    $utmt = explode('=',$t_id);
    $t_id = $utmt[1];

    foreach($qs as $v){
        $utmt = explode('=',$v);
        $utm .= $utmt[1]. "\n";
    }

}

foreach($adminemail as $recipient){
    $date = date("d.m.y H:i");
    //$upload_dir = 'uploads';

    $name = $_POST['name'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $sms = ($_POST['sms'])?'yes':'no';
    $qs = explode('=',$_POST['query']);
    $msg = "name: " . $name . "\n email: " . $email . "\n phone no.: " . $tel . "\n need sms: " . $sms. "\n" . $utm;

    $mail = new PHPMailer();

    //$mail->isSMTP();
    //$mail->SMTPSecure = 'ssl';
    $mail->Host = 'mail.highqlondon.com';
    $mail->SMTPAuth = false;
    $mail->Username = 'sender@highqlondon.com';
    $mail->Password = 'PB{qeP1~E!{O';
    $mail->Port = 25;

    $mail->CharSet = 'UTF-8';
    //$mail->SetFrom('');
    //$mail->AddReplyTo('');
    $mail->AddAddress($recipient);
    $mail->Subject = "Message from HIGH-Q website " . $date;
    $mail->Body = $msg;

    /*foreach ($_FILES["fileFF"]["error"] as $key => $error) {
        if ($error == UPLOAD_ERR_OK) {
            $tmp_name = $_FILES["fileFF"]["tmp_name"][$key];
            $fname = basename($_FILES["fileFF"]["name"][$key]);
            move_uploaded_file($tmp_name, "$upload_dir/$fname");
            $mail->AddAttachment("$upload_dir/$fname");
        }
    }*/

    $mail->Send();
}

if(isset($t_id)){
    echo $t_id;
}


