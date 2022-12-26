<?php 

    session_start();
    require_once('../../models/projectinfomodel.php');
    
    $projecttype = $_POST['projecttype'];
    $sloc = $_POST['sloc'];
    
    $projectid =  $_SESSION['projectid'];

    if($projecttype == 'Organic'){

        $coefficient = 2.4; $p = 1.05; $t = 0.38;
        
        $pm = ceil($coefficient * pow(($sloc/1000) , $p));                           // effort   
        $dm = ceil((2.50) * ( pow($pm, $t )));                                    // development time
        $people = $pm / $dm ; $peep = ceil($people);                      // req people to develop the project
        
        $devno = insertdevno($peep,$projectid);
        $_SESSION['pm'] = $pm; $_SESSION['dm'] = $dm; $_SESSION['people'] = $peep;

        if($devno){
        
            header('location: ../../views/Analyzer/projectest.php');

        }else{
            echo "DB error!";
        }
        
        

    }elseif($projecttype == 'Semi-detached'){

        $coefficient = 3.0; $p = 1.12; $t = 0.35;

        $pm = ceil($coefficient * pow(($sloc/1000) , $p)); 
        $dm = ceil((2.50) *  ( pow($pm, $t )));
        $people = $pm / $dm ; $peep = ceil($people);
        $devno = insertdevno($peep, $projectid);
        $_SESSION['pm'] = $pm; $_SESSION['dm'] = $dm; $_SESSION['people'] = $peep;

        if($devno){
        
            header('location: ../../views/Analyzer/projectest.php');
            
        }else{
            echo "DB error!";
        }

    }elseif($projecttype == 'Embedded'){

        $coefficient = 3.6; $p = 1.20; $t = 0.32;

        $pm = ceil($coefficient * pow(($sloc/1000) , $p));  
        $dm = ceil((2.50) *  ( pow($pm, $t ))); 
        $people = $pm / $dm ; $peep = ceil($people);

        $devno = insertdevno($peep, $projectid);
        $_SESSION['pm'] = $pm; $_SESSION['dm'] = $dm; $_SESSION['people'] = $peep;

        if($devno){
        
            header('location: ../../views/Analyzer/projectest.php');
            
        }else{
            echo "DB error!";
        }


    }else{
        echo "Try again";
    }


?>