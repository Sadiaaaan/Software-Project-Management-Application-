<?php 
    require_once('db.php');

    function clearMeetings($user){
        $con = getConnection();
        $sql = "delete from meetinglist";
        $status = mysqli_query($con, $sql);
        $sql = "insert into meetinglist values('Sunday', 'available', 'available', 'available', 'available', 'available', 'available', 'available')";
        $status = mysqli_query($con, $sql);
        $sql = "insert into meetinglist values('Monday', 'available', 'available', 'available', 'available', 'available', 'available', 'available')";
        $status = mysqli_query($con, $sql);
        $sql = "insert into meetinglist values('Tuesday', 'available', 'available', 'available', 'available', 'available', 'available', 'available')";
        $status = mysqli_query($con, $sql);
        $sql = "insert into meetinglist values('Wednesday', 'available', 'available', 'available', 'available', 'available', 'available', 'available')";
        $status = mysqli_query($con, $sql);
        $sql = "insert into meetinglist values('Thursday', 'available', 'available', 'available', 'available', 'available', 'available', 'available')";
        $status = mysqli_query($con, $sql);
        return $status;
    }

    function editMeeting($user){
        $con = getConnection();
        if($user['time']=='9-10')  $sql = "UPDATE `meetinglist` SET `9-10` ='{$user['pid']}' WHERE weekday = '{$user['weekday']}'"; 
        if($user['time']=='10-11')  $sql = "UPDATE `meetinglist` SET `10-11` ='{$user['pid']}' WHERE weekday = '{$user['weekday']}'"; 
        if($user['time']=='11-12')  $sql = "UPDATE `meetinglist` SET `11-12` ='{$user['pid']}' WHERE weekday = '{$user['weekday']}'"; 
        if($user['time']=='12-1')  $sql = "UPDATE `meetinglist` SET `12-1` ='{$user['pid']}' WHERE weekday = '{$user['weekday']}'"; 
        if($user['time']=='2-3')  $sql = "UPDATE `meetinglist` SET `2-3` ='{$user['pid']}' WHERE weekday = '{$user['weekday']}'"; 
        if($user['time']=='3-4')  $sql = "UPDATE `meetinglist` SET `3-4` ='{$user['pid']}' WHERE weekday = '{$user['weekday']}'"; 
        if($user['time']=='4-5')  $sql = "UPDATE `meetinglist` SET `4-5` ='{$user['pid']}' WHERE weekday = '{$user['weekday']}'"; 
        $status = mysqli_query($con, $sql);
        return $status;
    }
        
/*
    function searchMeetingByday($user){
        $con = getConnection();
        $sql = "select * from meetinglist where weekday='{$user['day']}'";
        $result = mysqli_query($con, $sql);
        $user = mysqli_fetch_assoc($result);
        return $user;
        
    }

    function searchMeetingByTime($user){
        $con = getConnection();
        $sql = "select * from meetinglist where weekday='{$user['time']}'";
        $result = mysqli_query($con, $sql);
        $user = mysqli_fetch_assoc($result);
        return $user;
        
    } */

    function allMeeting(){
        $con = getConnection();
        $sql = "select * from meetinglist";
        $result = mysqli_query($con, $sql);
        $users = [];
        while($row = mysqli_fetch_assoc($result)){
            array_push($users,$row);
        }
        return $users;
    }
?>