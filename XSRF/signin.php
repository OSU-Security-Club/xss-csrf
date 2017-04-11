<?php
session_start();

include('../db_config.php');

$link = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (mysqli_connect_errno()) {
    echo "Connect failed";
}

$username = $_POST['username'];
$password = $_POST['password'];

$myquery = "SELECT * FROM Socials
                WHERE username = '$username'
                AND password = '$password'
                ;";
    $result = mysqli_query($link, $myquery);
        if (!$result) {
            die('Invalid query: ' . mysqli_error($link));
        }
    $row_cnt = mysqli_num_rows($result);
    if($row_cnt == 1 ){
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        echo "Signed In";
    }
    else{
        echo "Invalid: ". $row_cnt;
    }


mysqli_close($link);
?>
