<?php
include_once "connect.php";
session_start();
global $connect;
$sender = $_SESSION['user']['email'];
$go_to=$_SESSION['page_user']['email'];
$message=$_POST['message'];



mysqli_query($connect, "INSERT INTO `chat` (`goto`, `message`, `sender`) VALUES ('$go_to','$message', '$sender')");


mysqli_close($connect);
