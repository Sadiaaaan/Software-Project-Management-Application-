<?php

    session_start();

    require_once('../../models/meetinglist.php');

    $meeting['weekday'] = $_POST['Day'];
    $meeting['time'] = $_POST['Time'];
    $meeting['pid'] = $_POST['Pid'];

        if($meeting['weekday'] !== null && $meeting['time'] !== null && $meeting['pid'] !== null)
        {
            $user = editMeeting($meeting);
            if($user){
                    header('location: ../../views/Manager/scheduleMeeting.php');
                    }
            else{
                    echo "Db error";
            }
        }
        else
        {
            echo "Input cannot be empty";
            header('location: ../../views/Manager/scheduleMeeting.php');
        }

?>