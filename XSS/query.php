<?php

include('../db_config.php');

$link = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (mysqli_connect_errno()) {
    echo "Connect failed";
}

//echo 'Successfully connected to database!';

if( $_POST ){

    $com = $_POST['comment'];
    $myquery = "INSERT INTO Comments (comment) VALUES ('$com');";
    $result = mysqli_query($link, $myquery);
        if (!$result) {
            die('Invalid query: ' . mysqli_error($link));
        }
    echo "Thank you for your Comment: $comment";
}

if( $_GET ){
    $myquery = "SELECT * FROM Comments;";
    $result = mysqli_query($link, $myquery);
        if (!$result) {
            die('Invalid query: ' . mysqli_error($link));
        }
    $str = "";
    while($row = mysqli_fetch_assoc($result)){
        echo "<tr><td> " . $row["comment"] . "</td></tr>";
    }

}

mysqli_close($link);
?>
