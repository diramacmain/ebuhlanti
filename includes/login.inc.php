<?php
if(isset($_POST['login-submit'])){
    require 'dbh.inc.php';

    $username = $_POST['uid'];
    $email = $_POST['mail'];
    $password = $_POST['pwd'];
    $passwordRepeat = $_POST['pwd-repeat'];
} 
else 
{
    header("location:../index.php?");
    exit();
}