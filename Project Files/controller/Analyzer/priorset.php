<?php

    session_start();
    require_once('../../models/taskinfomodel.php');

    $taskid =$_GET['taskid'];
    $count = $_SESSION['count'];
    

    $addprior = insertprior($count, $taskid);
    $_SESSION['count'] = $_SESSION['count'] + 1;
    if($addprior){
        
        header('location: ../../views/Analyzer/requpdate.php');
    }else{
        echo "DB error!";
    }



?>