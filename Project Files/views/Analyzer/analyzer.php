<?php
	session_start();
	if(!isset($_SESSION['empid'])){
		header('location: ../login.php');
	}
?>

<!DOCTYPE html>
<head>
    <title>Project Analyzer Homepage</title>
	<link rel="stylesheet" href="../../assets/style/analyzer.css">
</head>
<body bgcolor="LIGHTGRAY">
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
				<a  href="../../views/Analyzer/projectlistana.php">Home</a>&ensp;&ensp;
				<a class="logout" href="../../index.php">Logout</a>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
			</div> 
		</nav>

		<br>

		<main>
				<div align="center" class= "welcome">Welcome To Project Analyzer Homepage</div>
					<div class="container" align="center" type="square">
						<a class="a1" href="../../views/dashboard.php" target="_blank"><h4>Dashboard</h4></a></li><hr>
						<a class="a1" href="../../views/Analyzer/workupdateanalyzer.php"><h4>Work Update</h4></a></li><hr>
						<a class="a1" href="../../views/Analyzer/requpdate.php"><h4>Update Project Requirements</h4></a></li><hr>
						<a class="a1" href="../../views/Analyzer/prototype.php" ><h4>Upload Project Prototype</h4></a></li><hr>
						<a class="a1" href="../../views/Analyzer/projectest.php" ><h4>Project Estimation</h4></a></li><hr>
						<a class="a1" href="../../views/Analyzer/meetingrequestana.php"><h4>Request For Meeting</h4></a></li><hr>
						<a class="a1" href="../../views/Analyzer/analyzerleave.php"><h4>Request For Leave</h4></a>

					</div>
				

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