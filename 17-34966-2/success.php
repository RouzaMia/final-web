<?php
session_start();
if(isset($_SESSION['fname']) && $_SESSION['email']) {
    echo "Welcome ".$_SESSION['fname']." -You have been successfully signed up.<br>";
    echo "Your username is: ".$_SESSION['email']."<br>";
    echo "Please login again.<br>";
    echo "<a href='logout.php'>Logout</a>";
}else {
    header("location: login.php");
}
?>