<?php 
if(isset($_POST['login-submit']))
{
    require 'dbh.inc.php';
    $username = $_POST['logInUid'];
    $password = $_POST['password'];

    //check if empty
    if(empty($username) || empty($password))
    {
        header("Location:./login.php?error=emptyfields&uid=".$username);
        exit();
    }
}//root braket
else
{
    header("Location:./login.php?");
    exit();
}
