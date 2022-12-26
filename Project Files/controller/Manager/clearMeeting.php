<?php

    session_start();

    require_once('../../models/meetinglist.php');

    $status = clearMeetings($_POST['submit']);
        if($status){
            header('location: ../../views/Manager/scheduleMeeting.php');
        }else{
            header('location: ../../views/Manager/scheduleMeeting.php');
        }

?>