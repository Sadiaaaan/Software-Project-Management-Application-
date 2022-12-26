<?php 
    require_once("../../models/projectinfomodel.php");
    require_once("../../models/EmployeeInfo.php");
    $user = searchUserByName($_POST);
    $project['manager'] = $_REQUEST['manager'];
    $user['projectname'] = $_REQUEST['project'];
    $stat = assignmanager($user);

    if($stat != null){
        echo "Successfully updated";
    }else{
        echo "Null value...";
    }

?>