<?php
if(isset($_POST['reqSubmit'])){
    require 'dbh.inc.php';

    $customerName = $_POST['customerName'];
    $customerSurname = $_POST['customerSurname'];
    $customerMobile = $_POST['customerMobile'];
    $customerId = $_POST['customerId'];
    $Request_Amount = $_POST['Request_Amount'];

    else {
            $sql = "SELECT userName FROM tusers WHERE userName =?";
            $stmt = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt, $sql)){
                header("location:../signup.php?error=sqlerror");
                exit();
            }
    else {
            mysqli_stmt_bind_param($stmt,"s",$username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);
            if ($resultCheck > 0){
                header("location:../signup.php?error=usertaken&mail=".$email);
                exit();
        
            }
        else{

            $sql = "INSERT INTO tusers (userName, userEmail, userPass) VALUES (?, ?, ?)";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)){
                header("location:../signup.php?error=sqlerror");
                exit();
            }
        else{
                $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

                mysqli_stmt_bind_param($stmt,"sss", $username, $email, $hashedPwd);
                mysqli_stmt_execute($stmt);
                header("location:../signup.php?signup=success");
                exit();
            }
        
        }

        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);

}
else{
    header("location:../signup.php?");
    exit();
}