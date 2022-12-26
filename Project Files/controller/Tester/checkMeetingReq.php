<?php

    session_start();

    require_once('../../models/meetinginfo.php');

    $meeting['projectid'] = $_POST['pid'];
    $meeting['empid'] = $_POST['empid'];
    $meeting['weekday'] = $_POST['day'];

        if($meeting['projectid'] !== null && $meeting['empid'] !== null && $meeting['weekday'] !== null)
        {
            $user = insertMeeting($meeting);
            if($user){
                    header('location: ../../views/Tester/projectTester.php');
                    }
            else{
                    echo "Db error";
            }
        }
        else
        {
            echo "Input cannot be empty";
            header('location: ../../views/Tester/projectTester.php');
        }

?>