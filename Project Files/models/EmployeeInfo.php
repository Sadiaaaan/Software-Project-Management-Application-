<?php 
    require_once('db.php');
    require_once('LeaveInfo.php');

    function insertUser($user){
        $con = getConnection();
        $sql = "insert into employeeinfo values('', '{$user['username']}', '{$user['password']}', '{$user['email']}', '{$user['roles']}')";
        $status = mysqli_query($con, $sql);
        return $status;
    }

    function deleteUser($user){
        $con = getConnection();
        $sql = "DELETE FROM employeeinfo WHERE empid = {$user['id']};";
        $status = mysqli_query($con, $sql);
        $sql = "DELETE FROM leaveinfo WHERE empid = {$user['id']};";
        $status = mysqli_query($con, $sql);
        return $status;
    }

    function editUser($user){
        $con = getConnection();
        $user['tmp'] = 'username';
        $sql = "UPDATE employeeinfo
                SET  {$user['tmp']} = '{$user['username']}', email = '{$user['email']}', role = '{$user['role']}'
                WHERE empid = '{$user['id']}';";
        $status = mysqli_query($con, $sql);
        return $status;
        
    }

    function searchUserById($user){
        $con = getConnection();
        $sql = "select * from employeeinfo where empid='{$user['id']}'";
        $result = mysqli_query($con, $sql);
        $user = mysqli_fetch_assoc($result);
        return $user;
        
    }
    //for dashboard
    function searchrolebyid($userid){
        $con = getConnection();
        $sql = "select * from employeeinfo where empid='{$userid}'";
        $result = mysqli_query($con, $sql);
        $user = mysqli_fetch_assoc($result);
        return $user;
        
    }

    function allUser(){
        $con = getConnection();
        $sql = "select * from employeeinfo";
        $result = mysqli_query($con, $sql);
        $users = [];
        while($row = mysqli_fetch_assoc($result)){
            array_push($users,$row);
        }
        return $users;
    }

    function login($user){
        $con = getConnection();
        $sql = "select * from employeeinfo where username='{$user['username']}' and password='{$user['password']}'";
        $result = mysqli_query($con, $sql);
        $user = mysqli_fetch_assoc($result);
        
        return $user;
    }

    function allmanager(){
        $con = getConnection();
        $sql = "select * from employeeinfo where role = 'Manager'";
        $result = mysqli_query($con, $sql);
        $users = [];
        while($row = mysqli_fetch_assoc($result)){
            array_push($users,$row);
        }
        return $users;
    }

    function allanalyzer(){
        $con = getConnection();
        $sql = "select * from employeeinfo where role = 'Analyzer'";
        $result = mysqli_query($con, $sql);
        $users = [];
        while($row = mysqli_fetch_assoc($result)){
            array_push($users,$row);
        }
        return $users;
    }

    function searchUserByName($user){
        $con = getConnection();
        $sql = "select * from employeeinfo where username='{$user['manager']}'";
        $result = mysqli_query($con, $sql);
        $user = mysqli_fetch_assoc($result);
        return $user;
        
    }

    // function for manager user - req
    function searchUserByRole1(){
        $con = getConnection();
        $sql = "SELECT empid, username, email FROM employeeinfo WHERE role = 'Developer'";
        $result = mysqli_query($con, $sql);
        $users = [];
        while($row = mysqli_fetch_assoc($result)){
            array_push($users,$row);
        }
        return $users;
        
    }

    // function for manager user - req
    function searchUserByRole2(){
        $con = getConnection();
        $sql = "SELECT empid, username, email FROM employeeinfo WHERE role = 'Tester'";
        $result = mysqli_query($con, $sql);
        $users = [];
        while($row = mysqli_fetch_assoc($result)){
            array_push($users,$row);
        }
        return $users;
        
    }
    function alltwritter(){
        $con = getConnection();
        $sql = "select * from employeeinfo where role = 'Technical_Writer'";
        $result = mysqli_query($con, $sql);
        $users = [];
        while($row = mysqli_fetch_assoc($result)){
            array_push($users,$row);
        }
        return $users;
    }
?>