<?php
$db = mysqli_connect("localhost", "root", "", "ecart");
if(isset($_POST['login'])) {
    session_start();
    $email = $_POST['email'];
    $password = ($_POST['password']);
    $sql = "SELECT * FROM login WHERE email='$email' AND password='$password'";
    $verify = mysqli_query($db, $sql);

    if(mysqli_num_rows($verify) == 1){
    $row= mysqli_fetch_assoc($verify);
     $_SESSION['email'] = $email;
      
      
      {
          header("location: returnhome.php");
      }
     
}
else{
        echo "Incorrect email/password combination";
    }
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Authentication Module</title>
    </head>
    <body>
        <h1>Login</h1>
        <form method="post" action="login.php">
            <table>
               
                <tr>
                    <td>Email</td>
                    <td><input type="email" name="email" required></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password" required></td>
                </tr>
                <tr>
                    <td><input type="submit" name="login" value="Login" required></td>
                </tr>
            </table>
        </form>
    </body>
<html>