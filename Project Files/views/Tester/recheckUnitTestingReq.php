<!DOCTYPE html>

<head>
    <title>Unit Testing Recheck</title>
</head>

<body bgcolor="LIGHTGRAY">
	<form method="POST" action="../../controller/Tester/checkRecheckUnitTesting.php" enctype="">
	<link rel="stylesheet" href="../../assets/style/ManTest.css">
	<link rel="stylesheet" href="../../assets/style/updateManTest.css">


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
                <a href="projectTester.php">Home</a>&ensp;&ensp;
				<a href="../Homepage.php">Logout</a>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
			</div> 
		</nav>

			<br>

		<main>

		<fieldset align="center">
			<legend align="center"><h3>Unit Testing Result</h3></legend>
			
                <br><br>
                <table width=60% align = "center" id="employee">
                    <tr>
                        <th>Task ID</th>
                        <th>Requirements</t>
						<th>Project Name</th>
                        <th>Work Status</th>
                    </tr>
                    <?php
                        require_once('../../models/taskinfomodel.php');
						$users = unitTestingRes();
						foreach($users as $user){
							echo "	<tr><td>{$user['taskid']}</td>
									<td>{$user['task']}</td>
									<td>{$user['projectname']}</td>
									<td>{$user['devprog']}</td></tr>";
						}
                    ?>
                	</table><br><br>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
					&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
					
				</fieldset>
				<br>

				<fieldset align="center">
					<legend align="center"><h3>Request for Unit Testing Recheck</h3></legend>
					<h4>Project Name:&ensp;&ensp;  <input type="text" id="pname" name="pname"></h4>
					<h4>Task ID:&ensp;&ensp;&ensp;&ensp;  <input type="text" id="taskid" name="taskid"></h4>
					<br>

					<input align="center" class="edit" type="submit" value="recheck request" name="submit">
				</fieldset>

		</main>

			<br><br><br><br><br><br>

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