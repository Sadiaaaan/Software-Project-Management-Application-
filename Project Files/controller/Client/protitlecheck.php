<?php
    session_start();
    require_once('../../models/projectinfomodel.php');

    $title = $_POST['title'];
    $clientid = $_SESSION['empid'];

    if($title == ""){

        header('location: ../../views/Client/projecttitle.php?err=null');

    }else{
 
        $status = inserttitle($title, $clientid);
      
        if($status){
            header('location: ../../views/Client/projecttitle.php');
        }else{
            echo "DB insertion error!";
        }
    }

?>