<?php
session_start();
if(isset($_POST['reqSubmit']))
{   
    require 'sitedb.inc.php';
    $personId = $_SESSION['userId'];
    $customerName = $_POST['customerName'];
    $customerSurname = $_POST['customerSurname'];
    $customerMobile = $_POST['customerMobile'];
    $Request_Amount = $_POST['reqAmount'];
    $reqDateInit = date("Ymd");
    //request status change 
    $reqStatus = 1;
    $reqType = $_POST['reqType'];
    $customerId = $_POST['customerId'];   

    $sql = "INSERT INTO trequests(personId, vchCustomerName, vchCustomerSurname, vchCustomerMobile, Request_Amount, dteReqInit, dteReqStatusChange, intReqStatus, intReqType, vchCustomerId, intLastActorId) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
    $stmt = mysqli_stmt_init($conn2);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("location:../index.php?error=sqlerror");
            exit();
            }
        else{
            mysqli_stmt_bind_param($stmt,"isssdssiisi", $personId, $customerName, $customerSurname,$customerMobile,$Request_Amount,$reqDateInit,$reqDateInit,$reqStatus,$reqType,$customerId,$personId);
            mysqli_stmt_execute($stmt);
        }
        mysqli_stmt_close($stmt);
        mysqli_close($conn2);
        header("location:../index.php?request=requestsent");
        exit();
}
else{
    header("location:../index.php?error=didnotsubmit");
    exit();
}