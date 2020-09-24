<?php
$connection = mysqli_connect('localhost', 'root', '','ecart');

if (isset($_POST['submit']) && isset($_POST['email']) && isset($_POST['number'])){
 $name = $_POST['name'];
  $email = $_POST['email'];
  $number = $_POST['number'];
 $sql = "INSERT INTO up_cus(name, email,number ) Value('$name','$email','$number')";


mysqli_query($connection, $sql);
}

?>
