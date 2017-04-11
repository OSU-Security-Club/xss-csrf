<?php
session_start();

include('../db_config.php');

$link = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (mysqli_connect_errno()) {
    echo "Connect failed";
}


if (!isset($_SESSION['username'])) {
  echo "Please Sign In";
} 
else {
    $username = $_SESSION['username'];
    $password = $_SESSION['password'];
    $myquery = "SELECT * FROM Socials
                WHERE username = '$username'
                AND password = '$password'
                ;";
    $result = mysqli_query($link, $myquery);
        if (!$result) {
            die('Invalid query: ' . mysqli_error($link));
        }
    $str = "";
    while($row = mysqli_fetch_assoc($result)){
        echo $row["social"];
    }
}

mysqli_close($link);
?>
