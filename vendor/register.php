<?php
session_start();
include 'connect.php';

$email = $_POST["email"];
$name = $_POST["name"];
$pass =md5($_POST["password"]);
$pass_con =md5($_POST["password_con"]);
if(filter_var($email,FILTER_VALIDATE_EMAIL)) {
    if ($name < 0 && $pass !== $pass_con) {
        echo "Register Error!";
    } else {
        global $connect;
        $sql = "SELECT * FROM `users` WHERE `email` = '$email'";
        $result = $connect->query($sql);


        if ($result->num_rows > 0) {
            $error = "Գրանցումը չեղարկված է։Այս Էլ․ հասցեն արդեն օգտագործվել է մեր կայքում գրանցվելու համար։Խնդրում ենք փորձել նորից";
            echo $error;


        } else {

            mysqli_query($connect, "INSERT INTO `users` (`name`, `email`, `password`) VALUES ('$name', '$email', '$pass')");
//        header('Location:login.php');
            echo "Դուք հաջողությամբ գրանցվեցիք մեր կայքում";

        }
        mysqli_close($connect);
    }
}else{
    echo"Email Error!";
}