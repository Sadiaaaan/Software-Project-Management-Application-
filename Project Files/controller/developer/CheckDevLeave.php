<?php
    session_start();
    require_once('../../models/LeaveInfo.php');

    $leave['duration'] = $_POST['Days'];
    $leave['date'] = $_POST['date'];
    $leave['empid'] = $_SESSION['empid'];
    $users = searchApplicantById($leave);
    $flg = 0;
    foreach($users as $user){
        if($user['approval'] === "pending"){
            header('location: ../../views/developer/DevLeave.php?err=exc');
            $flg = 1;
            break;
        }
    }
    if($flg === 0){
        $status = insertapplicant($leave);
        if($status){
            header('location: ../../views/developer/DevLeave.php?succ=done');
        }
        else{
            echo "Db error";
        }
    }
?>