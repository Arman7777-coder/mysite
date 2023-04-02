<?php
include_once "connect.php";
session_start();
global $connect;
$sender= $_SESSION['user']['email'];
$go_to=$_SESSION['page_user']['email'];


$sql = "SELECT * FROM `chat` where `sender` = '$sender' AND `goto` = '$go_to' OR `sender` = '$go_to' AND `goto` = '$sender'";
$result = $connect->query($sql);

if (mysqli_num_rows($result) > 0){
    while ($row = mysqli_fetch_assoc($result)) {
        if($row['goto']===$go_to) {
            echo "<div class='I'>" . $row['message'] . "</div>";
        }else if($row['goto']===$sender){
            echo "<div class='You'>" . $row['message'] . "</div>";

        }
    }
}


mysqli_close($connect);