<?php
    include "connect.php";
    /*if(isset($_POST['sub']))
    {
        $email=$_POST['email'];
        $pass=$_POST['pass'];
        $repass=$_POST['repass'];
        $name=$_POST['name'];
        $phno=$_POST['phno'];
        $add=$_POST['add'];
        echo $email.$pass.$repass.$name.$phno.$add;
        if($email!="")
        {
            $qry="select email from register_table where email='$email';";
            $res=mysqli_query($conn,$qry) or die("not connected");
            $val= mysqli_num_rows($res);
            if($val!=0)
            {
                echo "<script>alert('already regstred');</script>";
            }
            else{
                $qry1="insert into register_table (email,password,re_password,name,phno,address) values ('$email','$pass','$repass','$name','$phno','$add');";
                $res=mysqli_query($conn,$qry1) or die("not inserted");
            }
        }
    }
*/
?>
<html>
    <head>
        <title>Register page</title>
        <script src="register.js"></script>
        <link rel="stylesheet" href="basic.css">
    </head>
    <body>
        <header>
        <h1>LAND'S END</h1>
        <a href="register.php">Register</a>
        <a href="login.php">Login</a>
        <a href="mainpage.php">Upload</a>
        </header>
        <main>
            <div class="matter">
            <form action="" method="post">
            Email :<input type="email" id="email" name="email">
            <br><br>
            password :<input type="password" id="pass" name="pass">
            <br><br>
            Confirm Password :<input type="password" id="repass" name="repass" onmouseout="clicked()">
            <br><br>
            Name :<input type="text" id="name" name="name">
            <br><br>
            phno :<input type="text" id="phno" name="phno">
            <br><br>
            Address :
            <br>
            <textarea id="add" name="add" rows="4" cols="20"></textarea>
            <br>
            <br>
            <input type="submit" id="sub" name="sub" value="submit">
            </form>
            <div>
        </main>
        <footer>
        </footer>
    </body>
</html>


