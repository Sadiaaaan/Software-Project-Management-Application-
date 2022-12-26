<!DOCTYPE html>

<head>
    <title>Update Requirement List</title>
	<link rel="stylesheet" href="../../assets/style/workupdateanalyzer.css">
</head>

<body bgcolor="LIGHTGRAY">
    
	<form method="post" action="../../controller/Analyzer/priorset.php" enctype="">


		<header>
			<div align= "center">
			<h1><img src= "#" alt= "" width= "">Software Project Development Application</h1>
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
				<a href="../../views/Analyzer/analyzer.php">Home</a>&ensp;&ensp;
				<a class="logout" href="../index.php">Logout</a>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
			</div> 
		</nav>

			<br>

		<main>
                <legend class="welcome" align="center">Show Client Requirements</legend>
                <table id="employee" height=90% width=30% align = "center">
                <tr>
                    <th>Requirement ID</th>
                    <th>Requirement</th>
					<th>Set Priority</th>
                </tr>
                <?php
					session_start();
                    require_once('../../models/taskinfomodel.php');
					require_once('../../models/projectinfomodel.php');
					$_session['count'] = 1;
					$user = $_SESSION['username'];
                    $projectid =  $_SESSION['projectid'];
                    $title= searchbyprojectid($projectid, $user);

                    $tasks = allreq($title);
                    foreach($tasks as $task){
						
                        echo "<tr><td>{$task['taskid']}</td>"; 
						echo "<td>{$task['task']}</td>";
						
						if($task['prior'] == 0){
							
							$_SESSION['taskid'] = $task['taskid'];
							echo "<td><a class='edit' href=\"../../controller/Analyzer/priorset.php?taskid={$task['taskid']}\">Save</td>";
							
						}else{
							echo "<td>Prioritized!</td>";
						}		
                    }
                ?>
                </table>

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