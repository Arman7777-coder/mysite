<?php
session_start();
include_once "connect.php";

global $connect;

$id = $_GET['id'];
$sql = "SELECT * FROM `users` WHERE `id` = '$id'";
$result = $connect->query($sql);

if(mysqli_num_rows($result)>0){
$user = mysqli_fetch_assoc($result);

    $_SESSION['page_user'] = [
        "email" => $user['email'],
        "name" => $user['name'],

    ];
    header("Location:../page.php");

}else{
    echo "no";
}
//mysqli_close($connect);



