<?php
	session_start();
	if(!isset($_SESSION['empid'])){
		header('location: ../login.php');
	}
?>
<!DOCTYPE html>
<head>
    <title>devAssign</title>
	<link rel="stylesheet" href="../../assets/style/Manager.css">
	<link rel="stylesheet" href="../../assets/style/ManTest.css">
	<link rel="stylesheet" href="../../assets/style/updateManTest.css">
</head>

<body bgcolor="LIGHTGRAY">
	<form method="POST" action="../../controller/Manager/checkTesterAssign.php" enctype="">


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
				<a href="Homepage.php">Logout</a>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
				<a href="projectManager.php">Home</a>&ensp;&ensp;
			</div> 
		</nav>

		<br>

		<main>
			<br>
		<div align="center" class="welcome">Tester List</div>
                <table align= "center" width = "90%" id = "employee">
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
						<th>Email</th>
                    </tr>
                    <?php
                        require_once('../../models/EmployeeInfo.php');
						$users = searchUserByRole2();
						foreach($users as $user){
							echo "	<tr><td>{$user["empid"]}</td>
									<td>{$user["username"]}</td>
									<td>{$user["email"]}</td></tr>";
						}
                    ?>
                	</table>
					
				<br>
                
                <div align="center" class="welcome">Requirement List</div>
                <table align= "center" width = "90%" id = "employee">
                    <tr>
                        <th >Task ID</th>
                        <th>Task</th>
						<th>Project Name</th>
                        <th>Tester ID</th>
                    </tr>
                    <?php
                        require_once('../../models/taskinfomodel.php');
						$users = searchUserByProject2();
						foreach($users as $user){
							echo "	<tr><td>{$user["taskid"]}</td>
									<td>{$user["task"]}</td>
									<td>{$user["projectname"]}</td>
									<td>{$user["tester"]}</td></tr>";
						}
                    ?>
                	</table>
				
				<fieldset align = "center">
				<legend align="center">Assign a Tester</legend>
					<h4>Task ID:&ensp;&ensp; <input type="text" id="taskid" name="taskid"></h4>
					<h4>Tester ID: <input type="text" id="empid" name="empid"></h4>
					<h4>Project Name: <input type="text" id="pname" name="pname"></h4>
                        
                        <hr>

                    <input align="center" class="edit" type="submit" value="assign" name="submit">
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