<?php
    require_once('../../models/EmployeeInfo.php');
    $user['id'] = $_GET['id'];
    $status = deleteUser($user);
    if($status){
        echo "Data Deleted";
        header("location: updateEmp.php");
    }else{
        echo "DB insert error!";
    }
    #$user = mysqli_fetch_assoc($result);
    
?>