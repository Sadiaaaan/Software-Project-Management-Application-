<?php
	session_start();
	if(!isset($_SESSION['empid'])){
		header('location: ../Login.php');
	}
?>

<!DOCTYPE html>

<head>
    <title>Tester Homepage</title>
	<link rel="stylesheet" href="../../assets/style/Tester.css">
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
				<a href="../Homepage.php" class="logout">Logout</a>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
			</div> 
		</nav>

			<br>

		<main>
		<div align="center" class="welcome">Welcome To Tester Homepage</div>
				<div class="container" align="center" type="square">
						<a class="a1" href="../../views/dashboard.php" target="_blank"><h4>Dashboard</h4></a></li><hr>
						<a class="a1" href="unitTestingResult.php" ><h4>Unit Testing Result Progress</h4></a></li><hr>
						<a class="a1" href="workUpdateTester.php" ><h4>Work Upgrade</h4></a></li><hr>
						<a class="a1" href="meetingReqTester.php"><h4>Meeting Request</h4></a></li><hr>
						<a class="a1" href="recheckUnitTestingReq.php"><h4>Request For Recheck of Unit Test</h4></a></li><hr>
                        <a class="a1" href="integrationTestingResult.php"><h4>Update Integration Testing Result</h4></a>
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