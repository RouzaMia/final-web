<?php
$connection = mysqli_connect('localhost', 'root', '','ecart');

if (isset($_POST['name'])){
 $name = $_POST['name'];
 $sql = "INSERT INTO up_cus(name) Value('$name')";

mysqli_query($connection, $sql);
}

elseif (isset($_POST['email'])) {
$email = $_POST['email'];
 $sql = "INSERT INTO up_cus(email) Value('$email')";

mysqli_query($connection, $sql);
}

?>