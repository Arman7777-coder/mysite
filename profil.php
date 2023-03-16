<?php
session_start();
if (!isset($_SESSION['user'])){
    header("Location:index.php");
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profil</title>
</head>
<body>
<h1>Ձեր անունը։<?=$_SESSION['user']['name']?></h1>
<h1>Ձեր Էլ․հասցեն։<?=$_SESSION['user']['email']?></h1>
<a href="mail.php">Կապ մեզ հետ</a>
<a href="vendor/logout.php">Դուրս գալ</a>
<script src="js/enablereturn.js"></script>
</body>
</html>
