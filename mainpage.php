<?php
include "connect.php";
    if((isset($_POST['sub'])))
    {
        $name=$_POST['name'];
        $cost=$_POST['cost'];
        $del=$_POST['del'];
        $phno=$_POST['phno'];
        $upload="uploads/";
        $imgname=$_FILES['img']['name'];
        $target = "uploads/";
        $target=$target.$imgname;

        /*$req="select * from upload where name=$name and price=$cost and $phno=phno;";
        $res=mysqli_query($conn,$req) ;
        if($co==0)
        {
        }
        else{
            echo "already inserted";
        }*/
        if($name!="" && $cost!="" && $phno )
        {
            $qry="insert into upload(name,image,phno,price,details) values ('$name','$imgname','$phno','$cost','$del');";
            mysqli_query($conn,$qry);
        }
        
        /*if((isset($_FILES['imgname'])))
        {
           move_uploaded_files($_FILES['imghname']['tmp_name'],$target);
        }


        $req="select * from upload;";
        $res=mysqli_query($conn,$req);*/
    }

?>
<!DOCTYPE html>
<html>
    <head>
        <titile>Main Page</titile>
        <link rel="stylesheet" href="basic.css">
    </head>
    <body>
        <header>
        <h1>LAND'S END</h1>
        <a href="register.php">Register</a>
        <a href="login.php">Login</a>
        <a href="upload.php">Upload</a>
        </header>
        <main>
            <form action="" method="post" enctype="multipart/form-data">
                Product :
                <input text="type" name="name" id="name">
                <br>
                <br>
                price :
                <input text="type" name="cost" id="cost">
                <br>
                <br>
                Details :
                <textarea id="del" name="del" rows="5" cols="10"></textarea>
                <br>
                <br>
                Contact No :
                <input type="text" name="phno">
                <br>
                <br>
                Upload a image :
                <br>
                <br>
                <input type="file" name="img" id="file">
                <br>
                <br>
                <input type="submit" name="sub" id="sub">
            </form>
        </main>
        <footer>
        </footer>
    </body>
</html>