<?php
include_once "connect.php";
session_start();
global $connect;
$sender= $_SESSION['user']['email'];
$go_to=$_SESSION['page_user']['email'];


$sql = "SELECT * FROM `chat` where `sender` = '$sender' AND `goto` = '$go_to'";
$result = $connect->query($sql);


mysqli_close($connect);