<?php
include_once 'connect.php';


global $connect;
$name = $_POST['name'];

if(isset($_POST['name'])) {
    $sql = "SELECT * FROM `users` WHERE `email` LIKE '{$name}%'";
    $result = mysqli_query($connect, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<a href='./page.php' style='text-decoration: none;color: #FFFFFF;'><div style='height: 20px;width: 230px;border: 1px solid #FFFFFF;background-color: #d28003;padding: 10px'>" . $row['email'] . "</div></a>";
        }
    } else {
        echo "<div>No Result</div>";
    }
}
