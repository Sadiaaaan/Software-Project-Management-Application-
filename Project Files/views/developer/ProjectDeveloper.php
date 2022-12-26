<?php
	session_start();
	if(!isset($_SESSION['empid'])){
		header('location: ../login.php');
	}
?>
<!DOCTYPE html>

<head>
    <title>Project Developer Homepage</title>
	<link rel="stylesheet" href="../../assets/style/ProjectDeveloper.css">
</head>

<body bgcolor="LIGHTGRAY">
	<form method="" action="" enctype="">


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
				<div align="center" class="welcome">Welcome To Prohect Developer Homepage</div>
					<div class="container">
						<a class="a1" href="../../views/dashboard.php" target="_blank"><h4>Dashboard</h4></a></li><hr>
						<a class="a1" href="WorkupdateDeveloper.php"><h4>Work Update</h4></a></li><hr>
						<a class="a1" href="UnitTestingResult.php" ><h4>Update Unit Testing Results</h4></a></li><hr>
						<a class="a1" href="UnitTestingResultRecheck.php"><h4>Unit Testing Rechecking Request</h4></a></li><hr>
						<a class="a1" href="DevWorkUpload.php" ><h4>Upload work paper</h4></a></li><hr>
						<a class="a1" href="devProjectPrototype.php" ><h4>View Project Prototype</h4></a></li><hr>
						<a class="a1" href="DevLeave.php"><h4>Make A Leave Request</h4></a>
					</div>	
		</main>

			<br><br><hr>

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