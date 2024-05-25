<?php
    $uname=$_POST['username'];
    $upass=$_POST['password'];

    $conn=new mysqli("localhost","root","","final year project",3306);
    mysqli_query($conn,"insert into signup(username,password) values('$uname','$upass')");
    
    header("Location: login.html");
    die();
?>