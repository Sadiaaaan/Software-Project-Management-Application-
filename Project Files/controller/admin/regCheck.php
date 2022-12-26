<?php
    require_once('../../models/EmployeeInfo.php');
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $roles = $_POST['roles'];

    if($username == "" || $password == "" || $email == "" || strlen($password) < 4){
        //echo "null username/password/email";
        header('location: ../../views/registration.php?err=null');

    }else {
        /* $user = ['username'=> $username, "password"=> $password, "email"=> $email];
        $_SESSION['user'] = $user; */
        $user = ['username'=>$username, 'password'=> $password, 'email'=> $email, 'roles'=> $roles];
        $status = insertUser($user);
        if($status){
            header('location: ../../views/admin/registration.php?succ=done');
        }else{
            echo "DB insert error!";
        }
        
    }
?>