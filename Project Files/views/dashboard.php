<!DOCTYPE html>

<head>
    <title>Project Progress Dashboard</title>
</head>

<body bgcolor="LIGHTGRAY">

        <hr><hr>

    <header>
        <div align= "center">
        <h1><img src= "#" alt= "" width= "">Software Project Development Application</h1>
        </div>
    </header>

        <hr><hr>

    <nav>
        <div align= "center">
            &ensp;&ensp; 
            <a href="#" >Achivements</a>
            &ensp;&ensp; 
            <a href="#">Contact us</a>
            &ensp;&ensp; 
            <a href="#">Support</a> 
            &ensp;&ensp; 
        </div>
        <div align= "right"> 
            
            <a href="../index.php" >Logout</a> &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;  
        </div>        
    </nav>

        <hr><hr><br>

    <main>
        <section>
            <fieldset>
                <legend align= "center">Project Descripton</legend>
                <table align= "center"><br>
                    <tr>
                        <td rowspan="2">
                        <?php 
                            session_start();
                            require_once('../models/projectinfomodel.php');
                            require_once('../models/taskinfomodel.php');
                            require_once('../models/EmployeeInfo.php');

                            $userid = $_SESSION['empid'];
                            $user = $_SESSION['username'];
                            $projectid =  $_SESSION['projectid'];

                            $emp = searchrolebyid($userid);

                            if($emp['role'] == 'Analyzer'){
                                $projecttitle = searchbyprojectid($projectid, $user);
                                echo $projecttitle['projectname'];
                            }elseif($emp['role'] == 'Manager'){
                                $projecttitle = searchbyprojectidman($projectid, $userid);
                                echo $projecttitle['projectname'];
                            }
                            elseif($emp['role'] == 'Developer'){
                                $projecttitle = searchbyprojectidev($projectid, $userid);
                                echo $projecttitle['projectname'];
                            }
                            elseif($emp['role'] == 'Tester'){
                                $projecttitle = searchbyprojectidtest($projectid, $userid);
                                echo $projecttitle['projectname'];
                            }
                            elseif($emp['role'] == 'Technical_Writer'){
                                $projecttitle = searchbyprojectidtw($projectid, $userid);
                                echo $projecttitle['projectname'];
                            }else{
                                echo 'Please try again!';
                            }
                        ?>
                        </td>
                    </tr>
                </table>
                <br><br><br><br><br>
            </fieldset>
        </section>
        
            <br><hr><hr>

        <section>
            <h3 align= "center"><u>Project Progress Stages</u></h3><br>
            <table align= "center" border="1">
                <tr>
                    <th>Role</th>
                    <th>Employee Name</th>
                    <th>Progress</th>
                </tr>
                <tr>
                    <td>Project Analyzer</td>  
                    <td>
                        <?php
                            //$user = $_SESSION['username'];
                            $projectid = $_SESSION['projectid'];
                            $prog = analyzerprogcheck($projectid);
                            echo $prog['analyzer'];
                        ?>
                    </td>
                    <td>
                        <?php
                            //$user = $_SESSION['username'];
                            $projectid = $_SESSION['projectid'];
                            $prog = analyzerprogcheck($projectid);
                            echo $prog['anaprog'];
                        ?>
                    </td>
                    
                </tr>
                <tr>
                    <td>Project Manager</td>  
                    <td>
                        <?php
                            //$user = $_SESSION['username'];
                            $projectid = $_SESSION['projectid'];
                            $prog = analyzerprogcheck($projectid);
                            echo $prog['manager'];
                        ?>

                    </td>
                    <td>
                        <?php
                            //$user = $_SESSION['username'];
                            $projectid = $_SESSION['projectid'];
                            $prog = analyzerprogcheck($projectid);
                            echo $prog['manprog'];
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Project Developer</td>  
                    <td>
                        <?php
                            //$user = $_SESSION['username'];
                            $projectid = $_SESSION['projectid'];
                            $projecttitle =searchbyprojectiddash($projectid);
                            $title = $projecttitle['projectname'];
                            $prog = prog($title);
                            echo $prog['developer'];
                        ?>
                    </td>
                    <td>
                        <?php
                            //$user = $_SESSION['username'];
                            $projectid = $_SESSION['projectid'];
                            $projecttitle =searchbyprojectiddash($projectid);
                            $title = $projecttitle['projectname'];
                            $prog = prog($title);
                            echo $prog['devprog'];
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Project Tester</td>  
                    <td>
                        <?php
                            //$user = $_SESSION['username'];
                            $projectid = $_SESSION['projectid'];
                            $projecttitle =searchbyprojectiddash($projectid);
                            $title = $projecttitle['projectname'];
                            $prog = prog($title);
                            echo $prog['tester'];
                        ?>
                    </td>
                    <td>
                        <?php
                            //$user = $_SESSION['username'];
                            $projectid = $_SESSION['projectid'];
                            $projecttitle =searchbyprojectiddash($projectid);
                            $title = $projecttitle['projectname'];
                            $prog = prog($title);
                            echo $prog['testprog'];
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Project Technical Writer</td>  
                    <td>
                        <?php
                            //$user = $_SESSION['username'];
                            $projectid = $_SESSION['projectid'];
                            $prog = analyzerprogcheck($projectid);
                            echo $prog['twriter'];
                        ?>
                    </td>
                    <td>
                        <?php
                            //$user = $_SESSION['username'];
                            $projectid = $_SESSION['projectid'];
                            $prog = analyzerprogcheck($projectid);
                            echo $prog['twprog'];
                        ?>
                    </td>
                </tr>
            
            </table>
        </section>

    </main>

    <br><br><hr><hr>
    <footer>
        <div align= "center">
            <a href="#">FAQ</a> &ensp;&ensp;
            <a href="#">Terms and Conditions</a> &ensp;&ensp;
            <a href="#">Privacy Policy</a> &ensp;&ensp;
            <a href="#">And More</a> &ensp;&ensp; &ensp;&ensp;
        </div>
        <br>
        <div align= "center" >
            <a href="#">&copy; 2023 | Company name </a> &ensp;&ensp;
        </div>
        
    </footer>

    
</body>
</html>