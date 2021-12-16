<?php
include('smtp/PHPMailerAutoload.php');
$mailto = $_REQUEST['mailto'];
$subject = $_REQUEST['subject'];
$message = $_REQUEST['message'];
echo smtp_mailer($mailto, $subject, $message);
function smtp_mailer($to, $subject, $msg)
{
    $mail = new PHPMailer();
    $mail->SMTPDebug  = 3;
    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 587;
    $mail->IsHTML(true);
    $mail->CharSet = 'UTF-8';
    $mail->Username = "couchninjahelpservices@gmail.com";
    $mail->Password = "#Nandini143";
    $mail->SetFrom("couchninjahelpservices@gmail.com");
    $mail->Subject = $subject;
    $mail->Body = $msg;
    $mail->AddAddress($to);
    $mail->SMTPOptions = array('ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => false
    ));
    if (!$mail->Send()) {
        echo $mail->ErrorInfo;
    } else {
?>
        <script>
            alert('Email Sent Successfully..!!');
            window.location.href = "http://localhost/PAST/smtp/index.php";
        </script>
<?php

    }
}
