<?php

    session_start();

    require_once('../../models/taskinfomodel.php');

    $task['taskid'] = $_POST['taskid'];
    $task['empid'] = $_POST['empid'];
    $task['projectname'] = $_POST['pname'];

        if($task['taskid'] !== null && $task['empid'] && $task['projectname'])
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
        }

?>