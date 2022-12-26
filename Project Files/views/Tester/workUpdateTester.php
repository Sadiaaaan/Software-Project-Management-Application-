<!DOCTYPE html>
<head>
    <title>Work Update Tester</title>
	<link rel="stylesheet" href="../../assets/style/ManTest.css">
	<link rel="stylesheet" href="../../assets/style/updateManTest.css">
</head>

<body bgcolor="LIGHTGRAY">
	<form method="POST" action="../../controller/Tester/checkWorkUpdateTester.php" enctype="">


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
				<a href="../Homepage.php">Logout</a>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
				<a href="projectTester.php">Home</a>&ensp;&ensp;
			</div> 
		</nav>

			<br>

		<main>
		<fieldset align="center">
			<legend align="center"><h3>Your Task</h3></legend>
				<div align="center" class="welcome"></div>
					<table width=60% align = "center" id="employee">
                    <tr>
                        <th >Task ID</th>
                        <th>Requirement</th>
						<th>Project Name</th>
                        <th>Work Status</th>
                    </tr>
                    <?php
						session_start();

                        require_once('../../models/taskinfomodel.php');

                        $user1['empid']= $_SESSION['empid'];
						$users = workUpdateTester($user1);
						foreach($users as $user){
							echo "	<tr><td>{$user["taskid"]}</td>
									<td>{$user["task"]}</td>
									<td>{$user["projectname"]}</td>
                                    <td>{$user["testprog"]}</td></tr>";
						}
                    ?>
                		</table>

					<br><br>
					
					<fieldset align="center">
							<legend align="center">Update Work Status</legend>
						<h4>Project Name:&ensp;&ensp;<input type="text" id="pname" name="pname"></h4>
						<h4>Task ID:&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; <input type="text" id="taskid" name="taskid"></h4>
							

						<input align="center" class="edit" type="submit" value="complete" name="submit">
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