<?php

    session_start();

    require_once('../../models/taskinfomodel.php');

    $task['taskid'] = $_POST['taskid'];
    $task['empid'] = $_POST['empid'];
    $task['projectname'] = $_POST['pname'];

        if($task['taskid'] !== null && $task['empid'] && $task['projectname'])
        {
            $user = assignTester($task);
            if($user){
                    header('location: ../../views/Manager/testerAssign.php');
                    }
            else{
                    echo "Db error";
            }
        }
        else
        {
            header('location: ../../views/Manager/testerAssign.php?');
        }

?>