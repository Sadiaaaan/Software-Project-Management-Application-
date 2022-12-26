<?php

    session_start();

   // require_once('../../models/projectinfomodel.php');

    $_SESSION['projectid'] = $_POST['pid'];  //imp

    header('location: ../../views/Analyzer/analyzer.php');

     
?>