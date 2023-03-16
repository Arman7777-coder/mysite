<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Մուտք</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="bootstrap-4.0.0">

</head>
<body>
<img src="img/back.jpg" alt="Նկար">
<div id="log_div">
    <form id="log">
        <h1>Մուտք</h1>
        <label for="email">Օգտանուն</label>
        <input type="email" class="inp" placeholder=" Ձեր Օգտանունը" name="email" id="email">
        <label for="password" id="label_pass">Գաղտնաբառ</label>
        <input type="password" class="inp" placeholder=" Ձեր Գաղտնաբառը" name="password" id="password">
        <button id="btn" type="submit">Մուտք</button>
        <a href="signin.php" id="a">Գրանցում</a>
        <div id="message" style="color: #FFFFFF"></div>
    </form>

</div>
<script src="jquery/jquery-3.6.3.min.js"></script>
<script src="js/login.js"></script>
</body>
</html>
