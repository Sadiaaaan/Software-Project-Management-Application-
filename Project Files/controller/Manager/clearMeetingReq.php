<?php

    session_start();

    require_once('../../models/meetinginfo.php');

    $status = clearMeetings($_POST['clear']);
        if($status){
            header('location: ../../views/Manager/meetingReqManager.php');
        }else{
            header('location: ../../views/Manager/meetingReqManager.php');
        }

?>