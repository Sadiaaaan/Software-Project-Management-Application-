<?php
    require_once('../../models/EmployeeInfo.php');
    $username = $_POST['username'];
    $email = $_POST['email'];
    $roles = $_POST['roles'];
    $id = $_POST['id'];

    if($username == "" || $email == ""){
        //echo "null username/password/email";
        header('location: updateEmp.php?');

    }else {
        /* $user = ['username'=> $username, "password"=> $password, "email"=> $email];
        $_SESSION['user'] = $user; */
        $user = ['username'=>$username, 'email'=> $email, 'role'=> $roles, 'id' => $id];
        print_r($user);
        $status = editUser($user);
        if($status){
            header('location: updateEmp.php?succ=done');
        }else{
            echo "DB insert error!";
        }
        
    }
?>