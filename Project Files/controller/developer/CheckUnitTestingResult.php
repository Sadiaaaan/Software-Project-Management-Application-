<?php
    require_once('../../models/EmployeeInfo.php');
    require_once('../../models/taskinfomodel.php');
    session_start();
    $task['id'] = $_GET['id'];
    $status = devtestupdate($task);
    if($status){
        header('location: ../../views/developer/UnitTestingResult.php?succ=done');
    }else{
        echo "DB insert error!";
    }
?>