<?php
	session_start();
	if(!isset($_SESSION['empid'])){
		header('location: ../login.php');
	}
?>
<!DOCTYPE html>

<head>
    <title>Project Developer Homepage</title>
	<link rel="stylesheet" href="../../assets/style/UnitTestingResults.css">
	<!-- <style>
		.checkedit{
			background-color:green;
			color:white;
			padding: 5px;
			border: 2px solid black;
		}
		.checkedit:hover{
			background-color:white;
			color:black;
			transition: ease .5s;
		}
	</style> -->
</head>

<body bgcolor="LIGHTGRAY">
	<form method="post" action="UnitTestingResult.php" enctype="">


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
				<a href="ProjectDeveloper.php">Home</a> &ensp;&ensp;
				<a href="../Homepage.php" class="logout">Logout</a>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
			</div> 
		</nav>

			<br>

		<main>
				<div align="center" class="welcome">Unit Testing Result</div>
                <table align= "center" width = "90%" id = "employee">
                    <tr>
                        <th>Project Reqirements</th>
                        <th>State(Click to mark as done)</th>
                    </tr>
                        <?php
							require_once('../../models/EmployeeInfo.php');
							require_once('../../models/taskinfomodel.php');
							$user['id'] = $_SESSION['empid'];
							$user = searchUserById($user);
							$tasks = searchreqdev($user);
							foreach($tasks as $task){
								if($task['devprog'] == 'worked'){
									echo "	<tr><td>{$task['task']}</td>
										<td><a href=\"../../controller/developer/CheckUnitTestingResult.php?id={$task['taskid']}\" class = \"checkedit\">Done</a></td></tr>";
									}
							}
                        ?>
                </table>	
		</main>

			<br><br><hr>

		<footer>
			<div align= "center" >
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