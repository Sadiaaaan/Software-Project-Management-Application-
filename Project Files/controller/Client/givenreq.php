<!DOCTYPE html>
<head>
    <title>Provided Project Requirement</title>
    <link rel="stylesheet" href="../../assets/style/workupdateanalyzer.css">
</head>
<body>
    <form method="" action="" enctype="">
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
            <fieldset align="center">
                <div class="welcome">All The Given Requirements</div>
                <table id="employee">
                    <tr>
                        <th>Requirement ID</th>
                        <th>Requirement</th>
                    </tr>
                    <?php
                        session_start();
                        require_once('../../models/taskinfomodel.php');
                        require_once('../../models/projectinfomodel.php');
                        require_once('../../models/EmployeeInfo.php');

                        $user['id'] = $_SESSION['empid'];
                        $user = searchUserById($user);
                        $project = searchbyclientid($user);
                        $title = $project['projectname'];
                        $tasks = allreq1($title);
                        foreach($tasks as $task){
                            echo "	<tr><td>{$task['taskid']}</td>
                                    <td>{$task['task']}</td></tr>";
                        }
                    ?>
                    
                
                </table><br>
            </fieldset>
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