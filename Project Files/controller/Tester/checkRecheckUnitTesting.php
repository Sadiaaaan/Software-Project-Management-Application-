<?php

    session_start();

    require_once('../../models/taskinfomodel.php');

    $task['projectname'] = $_POST['pname'];;   // Change required after login merge
    $task['taskid'] = $_POST['taskid'];

        if($task['taskid'] != null)
        {
            $user = recheckUnitTestingRes($task);
            print_r($user);
            if($user){
                    header('location: ../../views/Tester/recheckUnitTestingReq.php');
                    }
            else{
                    echo "Db error";
            }
        }
        else
        {
            echo "Input cannot be empty";
            header('location: ../../views/Tester/recheckUnitTestingReq.php');
        }

?>