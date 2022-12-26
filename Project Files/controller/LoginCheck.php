<?php
    session_start();
    require_once('../models/EmployeeInfo.php');
    $user['username'] = $_POST['username'];
    $user['password'] = $_POST['password'];
    $user=login($user);
    print_r($user);
    if($user == null){
        header('location: ../views/login.php?err=invalid');
    }
    $role = $user['role'];
    $_SESSION['empid'] = $user['empid'];
    $_SESSION['username'] = $user['username'];

    if($role == 'Analyzer'){
        header('location: ../views/Analyzer/projectlistana.php');
    }
    if($role == 'Manager'){
        header('location: ../views/Manager/projectListManager.php');
    }
    if($role =='Developer'){
        header('location: ../views/developer/ProjectDeveloper.php');
    }
    if($role == 'Tester'){
        header('location: ../views/Tester/projectTester.php');
    }
    if($role == 'Technical_Writer'){
        header('location: ../views/TechnicalWriter/projectlisttw.php');
    }
    if($role == 'Client'){
        header('location: ../views/Client/client.php');
    }
    if($role == 'Admin'){
        header('location: ../views/admin/Admin.php');
    }
?>