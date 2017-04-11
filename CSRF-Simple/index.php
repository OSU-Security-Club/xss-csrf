<?php

session_start();

if (isset($_POST['uname']))
{
    $_SESSION['uname'] = $_POST['uname'];
}
else if (isset($_REQUEST['logout']))
{
    $_SESSION['uname'] = null;
}

if ($_SESSION['uname']) 
{
?>
    <h3> <?= $_SESSION['uname'] ?> logged in</h3>
    <form action="index.php" method="POST">
        <input type="hidden" name="logout" value="1">
        <button type="submit">Logout</button>
    </form>
<?php
}
else
{
?>
    <h3>No user logged in</h3>
    <form action="index.php" method="POST">
        <strong>enter username to log in:</strong>
        <br>
        <input type="text" name="uname">
        <button type="submit">Log in</button>
    </form>
<?php
}
?>
