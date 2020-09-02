<?php
if(isset($_POST['login-submit'])){
    require 'dbh.inc.php';
    
    $mailuid = $_POST['usr'];
    $password = $_POST['pwd'];

    if (empty($mailuid) || empty($password)){
        header("location:../index.php?error=emptyfields");
        exit();
    }
    else{
        $sql = "SELECT * FROM tusers WHERE userName=? OR userEmail=?;";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("location:../index.php?error=sqlerror");
            exit();
        }
        else{
            mysqli_stmt_bind_param($stmt, "ss",$mailuid, $mailuid);
            mysqli_stmt_bind_param($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if ($row = mysqli_fetch_assoc($result)){
                $pwdCheck = password_varify($password, $row['userPass']);
                if($pwdCheck == false){
                    header("location:../index.php?error=wrongpassword");
                    exit();
                }
                else if($pwdCheck == true){
                    session_start();
                    $_SESSION['userId'] = $row['userId'];
                    $_SESSION['userName'] = $row['userName'];
                    header("location:../index.php?login=success");
                    exit();
                }
            }
            else{
                header("location:../index.php?error=nouser");
                exit();
            }
        }
    }
} 
else 
{
    header("location:../index.php?");
    exit();
}