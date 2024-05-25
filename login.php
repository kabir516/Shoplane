<?php
    session_start();
    $conn=new mysqli("localhost","root","","final year project",3306);
    $uname=$_POST['username'];
    $pass=$_POST['password'];
    $_SESSION['user'] = $_POST['username'];
    $_SESSION['pwd'] = $_POST['password'];
    $result=mysqli_query($conn,"select * from signup where username='$uname' and password='$pass'");
    $count=mysqli_num_rows($result);
    if($count>0)
    {
        header("Location: loggedindex.html");
        die();
    }
    else{
        header("Location: login.html");
        $_SESSION['status'] = "Invalid details";
        die();
    }
?>