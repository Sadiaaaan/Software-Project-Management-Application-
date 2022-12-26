<?php
	session_start();
	if(!isset($_SESSION['empid'])){
		header('location: ../login.php');
	}
?>
<!DOCTYPE html>

<head>
    <title>Manager Homepage</title>
	<link rel="stylesheet" href="../../assets/style/Manager.css">
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
		<div align="center" class="welcome">Welcome To Manager Homepage</div>
				<div class="container" align="center" type="square">
						<a class="a1" href="../../views/dashboard.php" target="_blank"><h4>Dashboard</h4></a></li><hr>
						<a class="a1" href="assignProjectReq.php" ><h4>Assign Project Requirement</h4></a></li><hr>
						<a class="a1" href="scheduleMeeting.php" ><h4>Schedule Meeting</h4></a></li><hr>
						<a class="a1" href="meetingReqManager.php"><h4>Meeting Request</h4></a></li><hr>
						<a class="a1" href="workUpdateManager.php"><h4>Work Update</h4></a></li><hr>
                        <a class="a1" href="managerLeave.php"><h4>Request for Leave</h4></a>
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