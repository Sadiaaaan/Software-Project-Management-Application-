<?php
    session_start();
    require_once('../../../models/LeaveInfo.php');
    $user['id'] = $_GET['id'];
    $user['type'] = $_GET['type'];
    $status = editapplicant($user);
    if($status){
        header('location: ../../../views/PendLeave.php?succ=done');
    }else{
        echo "DB insert error!";
    }
?>