<?php
session_start();
include_once "connect.php";
global $connect;
$email = $_POST["email"];
$pass = md5($_POST["password"]);
if($email < 0 && $pass < 8){
    echo  "Login ERROR!";


}
else {
    $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$pass'");

    if (mysqli_num_rows($check_user) > 0) {
        $user = mysqli_fetch_assoc($check_user);
        $_SESSION['user'] = [
            "id" => $user['id'],
            "email" => $user['email'],
            "name" => $user['name'],

        ];
        echo "lava";


    } else {
        $error = "sxal";
        echo $error;


    }
}