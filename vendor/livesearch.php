<?php
include_once 'connect.php';
session_start();
global $connect;
if (!isset($connect)){
    $data = array(
        "success" => false,
        "message" => "REGISTER ERROR!"
    );
header("Location:../index.php");

}else {
    $name = $_POST['name'];
//<a href='vendor/userpage.php?id=" . $row['id'] . "' style='text-decoration: none;color: #FFFFFF;'><div id='user_div' style='height: 20px;width: 230px;border: 1px solid #FFFFFF;background-color: #d28003;padding: 10px'>" . $row['email'] . "</div></a>"
    if (isset($_POST['name'])) {
        $sql = "SELECT * FROM `users` WHERE `email` LIKE '{$name}%'";
        $result = mysqli_query($connect, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {

               echo "<a href='vendor/userpage.php?id=" . $row['id'] . "' style='text-decoration: none;color: #FFFFFF;'><div id='user_div' style='height: 20px;width: 230px;border: 1px solid #FFFFFF;background-color: #d28003;padding: 10px'>" . $row['email'] . "</div></a>";



            }} else {


        }


    }
}

mysqli_close($connect);
