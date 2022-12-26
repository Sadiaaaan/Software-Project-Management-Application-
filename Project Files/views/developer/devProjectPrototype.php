<?php
	session_start();
	if(!isset($_SESSION['empid'])){
		header('location: ../login.php');
	}
?>
<!DOCTYPE html>

<head>
    <title>Project Prototype</title>
</head>

<body bgcolor="LIGHTGRAY">
	<form method="post" action="../../controller/developer/CheckDevLeave.php">

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
				<a href="ProjectDeveloper.php">Home</a>&ensp;&ensp;
				<a href="../Homepage.php">Logout</a>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;	
			</div> 
		</nav>

			<hr><hr><br>

		<main>
			<fieldset>
				<legend align="center">Project Prototype</legend>
					<?php
                        require_once("../../models/EmployeeInfo.php");
                        require_once("../../models/projectinfomodel.php");
                        require_once("../../models/taskinfomodel.php");
                        $user['id'] = $_SESSION['empid'];
                        $user = searchUserById($user);
                        $task = searchprojectnamedev($user);
                        $project = searchbyprojectname($task);
                        echo "{$project['projectname']}";
                        echo "<img src=\"{$project['projectprototype']}\" alt=\"project prototype\">";
                    ?>
			</fieldset>
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
		
	</form>

</body>
</html>