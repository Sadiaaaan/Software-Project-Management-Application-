<?php

    session_start();

    require_once('../../models/taskinfomodel.php');

    $task['taskid'] = $_POST['taskid'];
    $task['projectname'] = $_POST['pname'];

        if($task['taskid'] !== null && $task['projectname'] !== null)
        {
            $user = workUpdateTesterCom($task);
            if($user){
                    header('location: ../../views/Tester/workUpdateTester.php');
                    }
            else{
                    echo "Db error";
            }
        }
        else
        {
            echo "Input cannot be empty";
            header('location: ../../views/Tester/workUpdateTester.php');
        }

?>