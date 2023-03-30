<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page</title>
</head>
<body>
     <h1><?=$_SESSION['page_user']['name']?></h1>
     <h1><?=$_SESSION['page_user']['email']?></h1>
     <a href="onlinechat.php">Գրել այս օգտատիրոջը</a>
     <a href="profil.php">Հետ գնալ</a>
</body>
</html>
