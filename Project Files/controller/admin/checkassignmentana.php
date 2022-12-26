<?php 
    require_once("../../models/projectinfomodel.php");
    $project['analyzer'] = $_REQUEST['analyzer'];
    $project['projectname'] = $_REQUEST['project'];
    $stat = assignanalyzer($project);

    if($stat != null){
        echo "Successfully updated";
    }else{
        echo "Null value...";
    }

?>