<?php
$connection = mysqli_connect('localhost', 'root', '','ecart');

if (isset($_POST['msg']) ){
 $msg = $_POST['msg'];
 $sql = "INSERT INTO cus_care(msg) Value('$msg')";

mysqli_query($connection, $sql);
}



?>
