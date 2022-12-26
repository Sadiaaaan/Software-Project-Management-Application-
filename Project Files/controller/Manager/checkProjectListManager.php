<?php

    session_start();

   // require_once('../../models/projectinfomodel.php');

    $_SESSION['projectid'] = $_POST['pid'];

    header('location: ../../views/Manager/projectManager.php');

     /*   if($task['taskid'] !== null && $task['empid'])
        {
            $user = assignDev($task);
            if($user){
                    header('location: ../../views/Manager/devAssign.php');
                    }
            else{
                    echo "Db error";
            }
        }
        else
        {
            echo "Input cannot be empty";
            header('location: ../../views/Manager/devAssign.php?');
        } */

?>