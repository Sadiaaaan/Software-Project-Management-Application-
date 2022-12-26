<?php 
    require_once('db.php');
    //session_start();

    // views -> add project title -> controllers -> pro title check
    function inserttitle($title, $clientid){

        $con = getConnection();
        $sql = "insert into projectinfo (projectid, projectname, clientid, anaprog, twprog) values('', '{$title}', '{$clientid}', 'not assigned', 'not assigned')";
        $status = mysqli_query($con, $sql);

        echo 'data inserted!';
        return $status;
    }

    function searchbyclientid($user){
        $con = getConnection();
        $sql = "select * from projectinfo where clientid='{$user['empid']}'";
        $result = mysqli_query($con, $sql);
        $project = mysqli_fetch_assoc($result);
        return $project;
    }
    
    // views -> workupdate analyzer -> project title reading
    function showtitle(){

        $con = getConnection();
        $sql = "select * from projectinfo where analyzer = '{$_SESSION['username']}'";  
        $status = mysqli_query($con, $sql);

        $row_count= mysqli_num_rows($status);

        if($row_count > 0){
            while($row = mysqli_fetch_assoc($status)){

                $_SESSION['title']=$row['projectname'];
            }
        }else{
            $_SESSION['title']= 'No data found!';
        }

        return $_SESSION['title'];
    }

    // views -> project est -> controllers -> project est calculate
    function insertdevno($peep, $projectid){

        $con = getConnection();
        $sql = "update projectinfo set reqnoofdev= '{$peep}' where projectid = '{$projectid}'";
        $status = mysqli_query($con, $sql);

        echo 'data inserted!';
        return $status;
    }

    // views -> prototype ->controllers -> prototype upload
    function insertprototype($target_dir, $projectid){

        $con = getConnection();
        $sql = "update projectinfo set projectprototype ='{$target_dir}' where projectid = '{$projectid}'";
        $status = mysqli_query($con, $sql);

        echo 'data inserted!';
        return $status;
    }

    function analyzerprog($newreqcount, $projectid){

        $con = getConnection();

        if($newreqcount != 0){
            $sql = "update projectinfo set anaprog= 'pending' where projectid = '{$projectid}'";
            $status = mysqli_query($con, $sql);
            //echo 'data inserted!';
            return $status;
        }else{
            $sql = "update projectinfo set anaprog= 'completed' where projectid = '{$projectid}'";
            $status = mysqli_query($con, $sql);
            //echo 'data inserted!';
            return $status;

        }
        
    }

    function analyzerprogcheck($projectid){

        $con = getConnection();
        $sql = "select * from projectinfo where projectid ='{$projectid}'";
        $result = mysqli_query($con, $sql);
        $prog = mysqli_fetch_assoc($result);
        return $prog;

    }

    function twritterprg($finaldoc,$projectid){

        $con = getConnection();

        if($finaldoc){
            $sql = "update projectinfo set twprog='completed' where projectid = '{$projectid}'";
            $status = mysqli_query($con, $sql);
    
            //echo 'data inserted!';
            return $status;
        }else{
            $sql = "update projectinfo set twprog='pending' where projectid = '{$projectid}'";
            $status = mysqli_query($con, $sql);

            //echo 'data inserted!';
            return $status;
        }
        

    }

    function searchbyprojectiddash($projectid){
        $con = getConnection();
        $sql = "select * from projectinfo where projectid = '{$projectid}'";
        $status = mysqli_query($con, $sql);
        $projecttitle = mysqli_fetch_assoc($status);
        return $projecttitle;
    }

    // views -> twfinaldocup ->controllers -> final doc upload
    function insertfinaldoc($target_path, $projectid ){

        $con = getConnection();
        $sql = "update projectinfo set finaldocument = '{$target_path}' where projectid= '{$projectid }'";
        $status = mysqli_query($con, $sql);

        echo 'data inserted!';
        return $status;
    }

    function searchbyprojectname($task){
        $con = getConnection();
        $sql = "select * from projectinfo where projectname = '{$task['projectname']}'";
        $status = mysqli_query($con, $sql);
        $row = mysqli_fetch_assoc($status);
        return $row;
    }

    function searchbyprojectid($projectid, $user){
        $con = getConnection();
        $sql = "select * from projectinfo where projectid = '{$projectid}' and analyzer ='{$user}'";
        $status = mysqli_query($con, $sql);
        $projecttitle = mysqli_fetch_assoc($status);
        return $projecttitle;
    }
    //dashboard title manager
    function searchbyprojectidman($projectid, $userid){
        $con = getConnection();
        $sql = "select * from projectinfo where projectid = '{$projectid}' and manager ='{$userid}'";
        $status = mysqli_query($con, $sql);
        $projecttitle = mysqli_fetch_assoc($status);
        return $projecttitle;
    }

    //dashboard title developer
    function searchbyprojectidev($projectid, $userid){
        $con = getConnection();
        $sql = "select * from projectinfo where projectid = '{$projectid}' and developer ='{$userid}'";
        $status = mysqli_query($con, $sql);
        $projecttitle = mysqli_fetch_assoc($status);
        return $projecttitle;
    }

    //dashboard title tester
    function searchbyprojectidtest($projectid, $userid){
        $con = getConnection();
        $sql = "select * from projectinfo where projectid = '{$projectid}' and tester ='{$userid}'";
        $status = mysqli_query($con, $sql);
        $projecttitle = mysqli_fetch_assoc($status);
        return $projecttitle;
    }

    //dashboard title technical writer
    function searchbyprojectidtw($projectid, $userid){
        $con = getConnection();
        $sql = "select * from projectinfo where projectid = '{$projectid}' and twriter ='{$userid}'";
        $status = mysqli_query($con, $sql);
        $projecttitle = mysqli_fetch_assoc($status);
        return $projecttitle;
    }

    function allproject(){
        $con = getConnection();
        $sql = "select * from projectinfo";
        $result = mysqli_query($con, $sql);
        $projects = [];
        while($row = mysqli_fetch_assoc($result)){
            array_push($projects,$row);
        }
        return $projects;
    }

    function assignmanager($project){
        $con = getConnection();
        $sql = "UPDATE projectinfo
                SET  manager = '{$project['empid']}'
                WHERE projectname = '{$project['projectname']}';";
        $status = mysqli_query($con, $sql);

        return $status;
    }

    function assignanalyzer($project){
        $con = getConnection();
        $sql = "UPDATE projectinfo
                SET  analyzer = '{$project['analyzer']}'
                WHERE projectname = '{$project['projectname']}';";
        $status = mysqli_query($con, $sql);

        return $status;
    }

    // user - manager, manager progress updating
    function insertManProg($task){
        $con = getConnection();
        $sql = "UPDATE projectinfo set manprog = '{$task['manprog']}' WHERE projectname = '{$task['projectname']}'";
        $status = mysqli_query($con, $sql);
        return $status;
    }

    // user - manager project list
    function manProjectList($p){
        $con = getConnection();
        $sql = "SELECT projectid, projectname from projectinfo where Manager = '{$p['empid']}'";
        $status = mysqli_query($con, $sql);
        $tasks = [];
        while($row = mysqli_fetch_assoc($status)){
            array_push($tasks,$row);
        }
        return $tasks;
    }


    // user - analyzer project list
    function anaProjectList($p){
        $con = getConnection();
        $sql = "SELECT projectid, projectname from projectinfo where analyzer = '{$p}'";
        $status = mysqli_query($con, $sql);
        $tasks = [];
        while($row = mysqli_fetch_assoc($status)){
            array_push($tasks,$row);
        }
        return $tasks;
    }

    function twProjectList($p){
        $con = getConnection();
        $sql = "SELECT projectid, projectname from projectinfo where twriter = '{$p}'";
        $status = mysqli_query($con, $sql);
        $tasks = [];
        while($row = mysqli_fetch_assoc($status)){
            array_push($tasks,$row);
        }
        return $tasks;
    }

    function assigntwriter($project){
        $con = getConnection();
        $sql = "UPDATE projectinfo
                SET  twriter = '{$project['analyzer']}'
                WHERE projectname = '{$project['projectname']}';";
        $status = mysqli_query($con, $sql);

        return $status;
    }



?>