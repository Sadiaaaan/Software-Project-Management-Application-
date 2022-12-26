<?php
    session_start();
    require_once('../../models/LeaveInfo.php');

    $leave['duration'] = $_POST['Days'];
    $leave['date'] = $_POST['date'];
    $leave['empid'] = $_SESSION['empid'];
    $user = searchApplicantById($leave);
    if($user){
        header('location: ../../views/Analyzer/analyzerleave.php?err=exc');
    }
    else{
        $status = insertapplicant($leave);
        if($status){
            header('location: ../../views/Analyzer/analyzerleave.php?succ=done');
        }
        else{
            echo "Db error";
        }
    }
?>