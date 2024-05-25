<?php
    $conn=new mysqli("localhost","root","","final year project",3306);
    $pass1=$_POST['oldpass'];
    $pass=$_POST['newpass'];
    mysqli_query($conn,"update signup set password='$pass' where password='$pass1'");
    if($pass1==$pass){
        header("Location: changeaccount.html");
        die();
    }
    else{
        header("Location: login.html");
        die();
    }
?>