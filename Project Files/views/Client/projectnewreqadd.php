<?php 
    if(isset($_GET['err'])){
        echo "Please enter your requirement first";
        unset($_GET);
    }
?>

<!DOCTYPE html>
<head>
    <title>Add New Project Requirement</title>
    <link rel="stylesheet" href="../../assets/style/workupdateanalyzer.css">
</head>
<body>
    <form method="post" action='../../controller/Client/newreqcheck.php' enctype="">
            
            <header>
                <div align= "center">
                <h1><img src= "#" alt= "" width= "">Software Project Management Application</h1>
                </div>
            </header>
    
            
            
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
                    <a href="../../views/Client/client.php">Home</a>&ensp;&ensp;			
                    <a class="logout" href="../../index.php">Logout</a>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
                </div> 
            </nav>
    
            <br>
       
        <main>
            <table align="center" id="employee" >
                <tr>
                    <td>
                    <fieldset align="center">
                        <div  style="color:black" class="welcome">Please Provide Project Requirements</div>
                        <table id="employee" align = "center"><br>
                        <tr>
                            <td >
                                <input type="text" name="newreq" value="">
                            </td>
                        </tr>
                        <tr>
                            <td >
                            <hr><input type="submit" name="" value="Submit">
                        
                            </td>
                        </tr>
                        </table><br>
                    </fieldset>
                    </td>
                    <td>
                            <div class="welcome" style="color:black">All The New Requirements</div>
                            <table class="employee" width=100% ><br>
                            <tr>
                                <th>Requirement ID &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;</th>
                                <th>Requirement</th>
                            </tr>
                            <?php
                                session_start();
                                require_once('../../models/taskinfomodel.php');
                                require_once('../../models/projectinfomodel.php');
                                require_once('../../models/EmployeeInfo.php');
                                //$title =  $_SESSION['projectname'];
                                $user['id'] = $_SESSION['empid'];
                                $user = searchUserById($user);
                                $project = searchbyclientid($user);
                                $tasks = allnewreq( $project['projectname']);
                                foreach($tasks as $task){
                                    echo "	<tr><td>{$task['taskid']}</td>
                                            <td>{$task['task']}</td></tr>";
                                }
                            ?>
                            </table><br>
                    </td>
                </tr>
            </table>
            
            <br><br>
            
        </main>

        <br><br>
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
    </form>
    
</body>
</html>