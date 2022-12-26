<?php 
    require_once('db.php');

    function insertapplicant($user){
        $con = getConnection();
        $sql = "insert into leaveinfo values('', '{$user['empid']}', '{$user['date']}', '{$user['duration']}', 'pending')";
        $status = mysqli_query($con, $sql);
        return $status;
    }

    function allapplicant(){
        $con = getConnection();
        $sql = "select * from leaveinfo";
        $result = mysqli_query($con, $sql);
        $users = [];
        while($row = mysqli_fetch_assoc($result)){
            array_push($users,$row);
        }
        return $users;
    }
    function searchApplicantById($user){
        $con = getConnection();
        $sql = "select * from leaveinfo where empid='{$user['empid']}'";
        $result = mysqli_query($con, $sql);
        $users = [];
        while($row = mysqli_fetch_assoc($result)){
            array_push($users,$row);
        }
        return $users;
        
    }
    function editapplicant($user){
        $con = getConnection();
        $sql = "UPDATE leaveinfo
                SET  approval = '{$user['type']}'
                WHERE leaveid = '{$user['id']}';";
        $status = mysqli_query($con, $sql);
        return $status;
        
    }


?>