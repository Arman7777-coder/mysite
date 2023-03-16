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
    <title>Գրանցում</title>
    <link rel="stylesheet" href="css/signin.css">
    <link rel="stylesheet" href="bootstrap-4.0.0">
</head>
<body>
<img src="img/back.jpg" alt="Նկար">
<div id="log_div">
    <form id="log">
        <h1>Գրանցում</h1>
        <label for="email">Էլ․հասցե</label>
        <input type="email" class="inp" placeholder=" Ձեր Էլ․հասցեն" name="email" id="email">
        <label for="password" id="label_pass">Անուն</label>
        <input type="text" class="inp" placeholder=" Ձեր Անունը" name="name" id="name">
        <label for="password" id="label_pass">Գաղտնաբառ</label>
        <input type="password" class="inp" placeholder=" Ստեղծեք Գաղտնաբառ" name="password" id="pass">
        <label for="password" id="label_pass">Կրկնել Գաղտնաբառը</label>
        <input type="password" class="inp" placeholder=" Կրկնեք Գաղտնաբառը" name="password_con" id="pass_con">
        <button id="btn" type="submit">Գրանցվել</button>
        <br>
        <div id="message" style="color: #FFFFFF"></div>

    </form>
</div>
<script src="jquery/jquery-3.6.3.min.js"></script>
<script src="js/signin.js"></script>
</body>
</html>