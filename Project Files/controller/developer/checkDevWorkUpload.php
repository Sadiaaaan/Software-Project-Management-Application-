<?php 
    session_start();
    //print_r($_FILES);
    require_once("../../models/EmployeeInfo.php");
    require_once("../../models/taskinfomodel.php");
    $user['id'] = $_SESSION['empid'];
    $user = searchUserById($user);
    $task = searchprojectnamedev($user);
    $src= $_FILES['image']['tmp_name'];
    $dst = "../../assets/developer/".$task['projectname']."_{$user['username']}.pdf";

    if(move_uploaded_file($src, $dst)){
        echo "Success";
        header("location: ../../views/developer/ProjectDeveloper.php");
    }else{
        echo "Error";
    }
?>