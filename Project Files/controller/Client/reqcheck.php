<?php
    session_start();
    require_once('../../models/taskinfomodel.php');
    require_once('../../models/projectinfomodel.php');
    require_once('../../models/EmployeeInfo.php');

    $user['id'] = $_SESSION['empid'];
    $user = searchUserById($user);
    $project = searchbyclientid($user);

    $_SESSION['projectname'] = $project['projectname'];

    $req = $_POST['req'];

    if($req == ""){

        header('location: ../../views/Client/projectreq.php?err=null');

    }else{
 
        $status = insertreq($req,$project);
      
        if($status){
            header('location: ../../views/Client/projectreq.php');
        }else{
            echo "DB insertion error!";
        }
    }

?>