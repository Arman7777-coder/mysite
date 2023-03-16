<?php
$email = $_POST['email'];
$name = $_POST['name'];
$text = $_POST['text'];
$to = 'asatryanarman914@gmail.com';
$subject = 'From site';
$headers = 'From:'.$email.'mail'. "\r\n" .
    'Reply-To:' .$to." ". "\r\n" .
    'Cc: ccaddress@gmail.com' . "\r\n" .
    'Bcc: bccaddress@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();


  $result =  mail($email, $subject, $text, $headers);
    if(!$result){
        echo "Chgnac";
    }
    else{
        echo "gnac";
//        header("Location:../profil.php");
    }


