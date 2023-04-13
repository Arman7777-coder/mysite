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
if (filter_var($email,FILTER_VALIDATE_EMAIL)) {

    $result = mail($email, $subject, $text, $headers);
    if (!$result) {
        $data = array(
            "success" => false,
            "message" =>  "Նամակը չի ուղարկվել խնդրում ենք փորձել նորից"
        );

    } else {
        $data = array(
            "success" => true,
            "message" => "Նամակը հաջողությամբ ուղարկվեց"
        );

    }


}else{
    $data = array(
        "success" => false,
        "message" => "Գրեք իրական էլ․հասցե"
    );

}
echo json_encode($data);


