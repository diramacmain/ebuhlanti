<?php
if($_SESSION['userId']>0){
    require 'sitedb.inc.php';
    $sql2 = "SELECT * FROM tpeople WHERE personId =".$_SESSION['userId'];
    $stmt2 = mysqli_stmt_init($conn2);
    if(!mysqli_stmt_prepare($stmt2,$sql2))
    {
        header("location:../login.php?error=sql2error");
        exit();
    }
    else{
        mysqli_stmt_execute($stmt2);
        $result2 = mysqli_stmt_get_result($stmt2);
        if($row2 = mysqli_fetch_assoc($result2))
        {
            $_SESSION['Name'] = $row2['vchName'];
            $_SESSION['Surname'] = $row2['vchSurname'];
            $_SESSION['Number'] = $row2['vchCellNumber'];
            $_SESSION['PersonType'] = $row2['IntPersonType'];
        }
        else
        {
            header("location:../login.php?error=sqlerrorsessioninc");
            exit();
        }
    }
}
else{
    header("location:../login.php?");
    exit();
}
