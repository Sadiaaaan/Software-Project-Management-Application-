<?php
	session_start();
	if(!isset($_SESSION['empid'])){
		header('location: ../login.php');
	}
?>


<!DOCTYPE html>

<head>
    <title>Project List Manager</title>
</head>

<body bgcolor="LIGHTGRAY">
	<form method="POST" action="../../controller/Manager/checkProjectListManager.php" enctype="">
	<link rel="stylesheet" href="../../assets/style/ManTest.css">
	<link rel="stylesheet" href="../../assets/style/updateManTest.css">


		<header>
			<div align= "center">
			<h1><img src= "#" alt= "" width= "">Software Project Development Application</h1>
			</div>
		</header>

			<br>

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
			</div> 
		</nav>

			<br>

		<main>

				<table width = "60%" align = "center" id="employee">
                    <tr>
                        <th >Project Id</th>
                        <th>Project Name</th>
                    </tr>
                    <?php
					
						$p['empid'] = $_SESSION['empid'];
                        require_once('../../models/projectinfomodel.php');
						$users = manProjectList($p);
						foreach($users as $user){
							echo "	<tr><td>{$user['projectid']}</td>
									<td>{$user['projectname']}</td></tr>";
						}
                    ?>
                	</table><br><br>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
					&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
					
				</fieldset>

				<fieldset align="center">
					<legend align="center">Project you want to Enter</legend>
					<h4>Project ID:&ensp;&ensp;&ensp;&ensp;  <input type="text" id="pid" name="pid"></h4>
					

					<input align="center" type="submit" value="enter" name="submit">
				</fieldset>

		</main>

			<br><br><br><br>

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