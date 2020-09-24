<?php
session_start();
if(isset($_SESSION['email'])) {
    session_destroy();
    echo "logged out! Please login.";
    echo "<a href='login.php'>Login</a>";
}
else {
    header("location: login.php");
}
?>