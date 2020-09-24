<?php

$db = mysqli_connect("localhost", "root", "", "ecart");
if(isset($_POST['submit_button'])) {
    session_start();
    $fname = $_POST['name'];
   
    $email = $_POST['email'];
    $phonenum = $_POST['phonenum'];
    $address = $_POST['address'];
      $password = md5($_POST['password']);
    $role=$_POST['role'];
    $sql = "INSERT INTO user(name, email, phonenum, address,password,role) VALUES('$name','$email',
     '$phonenum','$address','$password')";
    mysqli_query($db, $sql); //data is inserted into the database
    $sql1 = "INSERT INTO login(email,password,role) VALUES('$email','$password')";
     mysqli_query($db, $sql1);

     $_SESSION['fname']=$fname;
    $_SESSION['email']=$email;

    header("location: success.php");
}
?>


 
<!DOCTYPE html>
<html>
    <head>
        <title>SignUp</title>
    </head>
    <body>
        <h1>Sign Up</h1>
     
        <form method="post" action="signup.php">
            <table>
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name" required></td>
                </tr>
                
                <tr>
                    <td>Email</td>
                    <td><input type="email" name="email" required></td>
                </tr>
                   <td>Phone Number</td>
                    <td><input type="number" name="phonenum" placeholder="+880" required></td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td><input type="text" name="address" required></td>
                </tr>
                <tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password" required></td>
                </tr>
                <tr>
                    <td>ConfirmPassword</td>
                    <td><input type="password" name="password" placeholder="Retype Password" required></td>
                </tr>
                

                <tr>
                    <td><input type="submit" name="submit_button" value="Sign Up" required></td>
                </tr>
            </table>
        </form>
    </body>
<html>

