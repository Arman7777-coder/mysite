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
    <link rel="stylesheet" href="css/page.css">
</head>
<body>
     <h1><?=$_SESSION['page_user']['name']?></h1>
     <h1><?=$_SESSION['page_user']['email']?></h1>
     <div id="chat">
         <div id="messages"></div>
         <form id="chat-form">
             <div id="chat_messages" style="display: flex;flex-direction: column;"></div>
             <input type="text" id="message" name="message" placeholder="Type your message...">
             <button type="submit">Send</button>
         </form>
     </div>
     <a href="profil.php">Հետ գնալ</a>
     <script src="jquery/jquery-3.6.3.min.js"></script>
     <script src="js/chat.js"></script>
</body>
</html>
