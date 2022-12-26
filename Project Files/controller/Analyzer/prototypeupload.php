<?php

    session_start();

    require_once('../../models/projectinfomodel.php');

    $projectid = $_SESSION['projectid'];
 
    if(isset($_POST['submit'])){

        $allowed_ext =array ('png' , 'jpg' , 'jpeg', 'gif');

        if(!empty($_FILES['image']['name'])){

            
            $file_name = $_FILES['image']['name'];
            $file_size = $_FILES['image']['size'];
            $file_tmp = $_FILES['image']['tmp_name'];
            $target_dir = "../../assets/ProjectPrototypes/${file_name}";    

        
        
            $file_ext = explode('.', $file_name);
            $file_ext = strtolower(end($file_ext));

            
            //validation file ext 

            if(in_array($file_ext, $allowed_ext)){

                if($file_size <= 10000000000000){

                    move_uploaded_file($file_tmp, $target_dir);

                    $prototypeup = insertprototype($target_dir, $projectid);

                    if($prototypeup){
        
                        header('location: ../../views/Analyzer/prototype.php');

                    }else{
                        echo "DB error!";
                    }
                    
                } else {

                    $_SESSION['message'] = 'File is too large!';
                    header('location: ../../views/Analyzer/prototype.php');
                }
        

            } else {

                $_SESSION['message'] = 'Invalid File!';
                header('location: ../../views/Analyzer/prototype.php');
            }

            

        }
        else{

            $_SESSION['message'] = 'Please Choose A File!';
            header('location: ../../views/Analyzer/prototype.php');

        }

    }

?>