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
    <title>Կապ մեզ հետ</title>
    <link rel="stylesheet" href="css/mail.css">
</head>
<body>
<form id="send_form">
    <div id="send_div">
        <h1>ՈՒղարկեք ձեր հաղուրդագրությունը</h1>
    <label for="inp">Էլ․հասցե</label>
<input type="email" class="inp" placeholder="Ձեր Էլ․հասցեն" name="email" id="email">
    <label for="inp">Անուն</label>
<input type="text" class="inp" placeholder="Ձեր Անունը" name="name" id="name">
    <label for="inp">Հաղորդագրություն</label>
<textarea name="text" id="txtar" cols="30" rows="10" class="txtar" placeholder="Հաղորդագրություն․․․"></textarea>
<button type="submit" class="btn" id="btn">ՈՒղարկել</button>
        <div id="message"></div>
    </div>
    <script src="jquery/jquery-3.6.3.min.js"></script>
    <script src="js/sender.js"></script>
</form>
</body>
</html>
