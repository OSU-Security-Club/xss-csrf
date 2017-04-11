<?php

include('../db_config.php');

$link = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (mysqli_connect_errno()) {
    echo "Connect failed";
}

    $myquery = "DELETE FROM Comments WHERE 1;";
    $result = mysqli_query($link, $myquery);
        if (!$result) {
            die('Invalid query: ' . mysqli_error($link));
        }

mysqli_close($link);
?>

<html>
    <a href="index.html">Back</a>

</html>
