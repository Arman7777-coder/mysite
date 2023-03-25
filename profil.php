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
    <link rel="stylesheet" href="css/profil.css">
    <link rel="stylesheet" href="bootstrap-4.0.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Profil</title>
</head>
<body id="body">
<div id="data_div">
    <div id="data">
<!--        <h4>Ձեր Էլ․հասցեն։--><?php //=$_SESSION['user']['email']?><!--</h4>-->
        <h4><?=$_SESSION['user']['name']?></h4>

    </div>
    <div id="search_div">

<!--<label for="inp" id="lb">Որոնել</label>-->
<input type="text" id="search" placeholder="Որոնում">
        <i class="fa fa-search" style="font-size: 20px"></i>

<div id="user"></div>
    </div>

</div>
<a href="mail.php">Կապ մեզ հետ</a>
<a href="vendor/logout.php">Դուրս գալ</a>
<script src="jquery/jquery-3.6.3.min.js"></script>
<script src="js/search.js"></script>
<!--<script src="js/enablereturn.js"></script>-->
</body>
</html>
