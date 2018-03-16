<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="basic.css">
</head>
<body style="text-align:left">
<header>
        <h1>LAND'S END</h1>
        <a href="register.php">Register</a>
        <a href="login.php">Login</a>
        <a href="upload.php">Upload</a>
        
</header>
<main>
<?php
    include "connect.php";
    

    $req="select * from upload;";
    $res=mysqli_query($conn,$req);

    $result=mysqli_num_rows($res);
    echo $result;

    while($li= mysqli_fetch_assoc($res))
    {
        extract($li);
        $val='images/'.$li['image'];
        echo "<img src='$val' width='200px' height='200px'>";
        echo '<br>';
        echo '<br>';
        echo $li['name'];
        echo '<br>';
        echo $li['phno'];
        echo '<br>';
        echo $li['price'];
        echo '<br>';
        echo $li['details'];
        echo '<br>';
    }
?>
</main>
<body>
</html>