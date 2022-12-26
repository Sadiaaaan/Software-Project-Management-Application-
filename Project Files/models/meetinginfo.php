<?php 
    require_once('db.php');

    function insertMeeting($user){
        $con = getConnection();
        $sql = "insert into meetinginfo values('', '{$user['projectid']}', '{$user['empid']}', '{$user['weekday']}')";
        $status = mysqli_query($con, $sql);
        return $status;
    }

    function allMeetingReq(){
        $con = getConnection();
        $sql = "select projectid, empid, weekday from meetinginfo";
        $result = mysqli_query($con, $sql);
        $users = [];
        while($row = mysqli_fetch_assoc($result)){
            array_push($users,$row);
        }
        return $users;
    }

    function clearMeetings(){
        $con = getConnection();
        $sql = "delete from meetinginfo";
        $status = mysqli_query($con, $sql);
        return $status;
    }
?>