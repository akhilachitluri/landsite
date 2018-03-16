<?php
    include "connect.php";
    if(isset($_POST['sub']))
    {
        $email=$_POST['email'];
        $pass=$_POST['pass'];
        if($email!="" && $pass!="")
        {
            $qry="select password from register_table where email='$email' and password='$pass'";
            $res=mysqli_query($conn,$qry) or die('not connected');
            $val=mysqli_num_rows($res);
            if($val==1)
            {
                header('location:display.php');
            }
            else{
                header('location:register.php');
            }
        }
        else{
            
            echo "<script>alert('fill the details')</script>";
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login Page</title>
        <link rel="stylesheet" href="basic.css">
    </head>
    <body>
        <header>
        <header>
        <h1>LAND'S END</h1>
        <a href="register.php">Register</a>
        <a href="login.php">Login</a>
        <a href="mainpage.php">Upload</a>
        </header>
        </header>
        <main>
            <form action="" method="post">
                Email :
                <input type="email" id="email" name="email">
                <br><br>
                Password :
                <input type="password" id="pass" name="pass">
                <br><br>
                <input type="submit" id="sub" name="sub" value="submit"> 
            </form>
        </main>
        <footer>

        </footer>
    </body>
</html>