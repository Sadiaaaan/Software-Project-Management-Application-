<?php 
    require_once('db.php');

    //controller -> reqcheck
    function insertreq($req, $project){
        $con = getConnection();
        $sql = "insert into taskinfo (taskid, task,projectname, developer, tester) values('', '{$req}','{$project['projectname']}', '0', '0')";
        $status = mysqli_query($con, $sql);

        echo 'data inserted!';
        return $status;
    }

    //controller -> priorset
    function insertprior($count, $taskid){
        $con = getConnection();
        $sql = "update taskinfo set prior = '{$count}' where taskid = '{$taskid}'";
        $status = mysqli_query($con, $sql);
        
        echo 'data inserted!';
        return $status;
    }

    function priorreq($count){
        $con = getConnection();
        $sql = "insert into taskinfo (prior) values('{$count}')";
        $status = mysqli_query($con, $sql);

        echo 'data inserted!';
        return $status;
    }

    //controller -> givenreq
    function allreq1($title){
        $con = getConnection();
        $sql = "select taskid, task, prior from taskinfo where projectname = '{$title}'";
        $status = mysqli_query($con, $sql);
        $tasks = [];
        while($row = mysqli_fetch_assoc($status)){
            array_push($tasks,$row);
        }
        return $tasks;
    }

    function allreq($title){
        $con = getConnection();
        $sql = "select taskid, task, prior from taskinfo where projectname = '{$title['projectname']}'";
        $status = mysqli_query($con, $sql);
        $tasks = [];
        while($row = mysqli_fetch_assoc($status)){
            array_push($tasks,$row);
        }
        return $tasks;
    }


    function allnewreq($title){
        $con = getConnection();
        $sql = "select taskid, task from taskinfo where prior= '0' and projectname = '{$title}'";
        $status = mysqli_query($con, $sql);
        $tasks = [];
        while($row = mysqli_fetch_assoc($status)){
            array_push($tasks,$row);
        }
        return $tasks;
    }
    
    

    //views -> work update analyzer
    function allreqforanaworkupdate($projecttitle){
        $con = getConnection();
        $sql = "select taskid,task from taskinfo where prior = '0' and projectname ='{$projecttitle['projectname']}'";
        $status = mysqli_query($con, $sql);
        $tasks = [];
        $row_count= mysqli_num_rows($status);
        $_SESSION['newreqcount']= $row_count;
        if($row_count > 0){
            while($row = mysqli_fetch_assoc($status)){
                array_push($tasks,$row);
            }
        }else{
            echo 'No New Task Available!';
        }

        return  $tasks;
    }



    // to check if the req already exits or not!
    /*
    function searchreqfirst($req){

        $con = getConnection();
        $sql = "select task from taskinfo where task like '{$req}'";
        $status = mysqli_query($con, $sql); 
        if($status){
            echo 'You already gave this requirement';
        }else{
            insertreq($req);
            
        }
        
     }
     */
     function searchreqdev($user){
        $con = getConnection();
        $sql = "select * from taskinfo where developer = '{$user['username']}'";
        $status = mysqli_query($con, $sql);
        $tasks = [];
        while($row = mysqli_fetch_assoc($status)){
            array_push($tasks,$row);
        }
        return $tasks;
     }

     function devtestupdate($task){
        $con = getConnection();
        $sql = "update taskinfo set devprog = 'tested' where taskid = '{$task['id']}'";
        $status = mysqli_query($con, $sql);
        
        echo 'data inserted!';
        return $status;
     }

     function devworkupdate($task){
        $con = getConnection();
        $sql = "update taskinfo set devprog = 'worked' where taskid = '{$task['id']}'";
        $status = mysqli_query($con, $sql);
        
        echo 'data inserted!';
        return $status;
     }
     function searchprojectnamedev($user){
        $con = getConnection();
        $sql = "select * from taskinfo where developer = '{$user['username']}'";
        $status = mysqli_query($con, $sql);
        $row = mysqli_fetch_assoc($status);
        return $row;
     }
     function devrecheckupdate($task){
        $con = getConnection();
        $sql = "update taskinfo set devprog = 'pending' where taskid = '{$task['id']}'";
        $status = mysqli_query($con, $sql);
        
        echo 'data inserted!';
        return $status;
     }

    // user - manager req assign
    function searchUserByProject1(){
        $con = getConnection();
        $sql = "SELECT taskid,  task, projectname, developer FROM taskinfo ";
        $result = mysqli_query($con, $sql);
        $users = [];
        while($row = mysqli_fetch_assoc($result)){
            array_push($users,$row);
        }
        return $users;
        
    }

     // user - manager req assign
    function searchUserByProject2(){
        $con = getConnection();
        $sql = "SELECT taskid,  task, projectname, tester FROM taskinfo ";
        $result = mysqli_query($con, $sql);
        $users = [];
        while($row = mysqli_fetch_assoc($result)){
            array_push($users,$row);
        }
        return $users;
        
    }

    // user - manager req assign
    function assignDev($task){
        $con = getConnection();
        $sql = "UPDATE taskinfo set developer = '{$task['empid']}', devprog = 'pending' where (taskid = '{$task['taskid']}' and projectname = '{$task['projectname']}')";
        $status = mysqli_query($con, $sql);
        return $status;
    }

    // user - manager req assign
    function assignTester($task){
        $con = getConnection();
        $sql = "UPDATE taskinfo set tester = '{$task['empid']}', testprog = 'pending' where (taskid = '{$task['taskid']}' and projectname = '{$task['projectname']}')";
        $status = mysqli_query($con, $sql);
        return $status;
    }

    //user - manager - for workupdate
    function searchByTester($task){
        $count1=0;
        $con = getConnection();
        $sql = "SELECT tester from taskinfo WHERE (tester <>'0' AND projectname='{$task['projectname']}')";
        $result = mysqli_query($con, $sql);
        while($row = mysqli_fetch_assoc($result)){
            $count1++;
        }
        return $count1;
    }

    function prog($title){
        $con = getConnection();
        $sql = "select * from taskinfo where projectname='{$title}'";
        $result = mysqli_query($con, $sql);
        $prog = mysqli_fetch_assoc($result);
        return $prog;
    }

    //user - manager - for workupdate
    function searchByDeveloper($task){
        $count2=0;
        $con = getConnection();
        $sql = "SELECT developer from taskinfo WHERE (developer <>'0' AND projectname='{$task['projectname']}')";
        $result = mysqli_query($con, $sql);
        while($row = mysqli_fetch_assoc($result)){
            $count2++;
        }
        return $count2;
    }

    //user - manager - for workupdate
    function numberOfReq($task){
        $count3=0;
        $con = getConnection();
        $sql = "SELECT task FROM taskinfo WHERE projectname='{$task['projectname']}'";;
        $status = mysqli_query($con, $sql);
        while($row = mysqli_fetch_assoc($status)){
            $count3++;
        }
        return $count3;
    }

    // user - Tester , Unit testingResult
    function unitTestingRes(){
        $con = getConnection();
        $sql = "SELECT taskid,  task, projectname, devprog FROM taskinfo";
        $result = mysqli_query($con, $sql);
        $users = [];
        while($row = mysqli_fetch_assoc($result)){
            array_push($users,$row);
        }
        return $users;
        
    }

    // user - Tester , Unit testing Result Recgeck Request
    function recheckUnitTestingRes($q){
        $con = getConnection();
        $sql = "UPDATE taskinfo SET devprog = 'recheck' WHERE (taskid = '{$q['taskid']}') AND (projectname ='{$q['projectname']}')";
        $result = mysqli_query($con, $sql);;
        return $result;
        
    }

    // For view req status in Tester Work Update
    function workUpdateTester($q){
        $con = getConnection();
        $sql = "SELECT taskid, task, projectname, testprog from taskinfo where tester = '{$q['empid']}'";
        $result = mysqli_query($con, $sql);
        $users = [];
        while($row = mysqli_fetch_assoc($result)){
            array_push($users,$row);
        }
        return $users;
        
    }

    // For updating req status in Tester Work Update
    function workUpdateTesterCom($q){
        $con = getConnection();
        $sql = "UPDATE taskinfo SET testprog = 'completed' WHERE (taskid = '{$q['taskid']}') AND (projectname ='{$q['projectname']}')";
        $result = mysqli_query($con, $sql);;
        return $result;
        
    }

     // Technical writer work progress
     function workProgressTechWriter(){
        $con = getConnection();
        $sql = "SELECT task, projectname,devprog, testprog from taskinfo";
        $result = mysqli_query($con, $sql);
        $users = [];
        while($row = mysqli_fetch_assoc($result)){
            array_push($users,$row);
        }
        return $users;
        
    }

    
?>