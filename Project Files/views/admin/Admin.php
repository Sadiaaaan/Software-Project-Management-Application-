<?php
session_start();
    if(isset($_GET['succ'])){
        echo "User Added";
        unset($_GET);
    }
	if(!isset($_SESSION['empid'])){
		header('location: ../login.php');
	}
?>

<!DOCTYPE html>

<head>
    <title>Admin Homepage</title>
	<link rel="stylesheet" href="../../assets/style/Admin.css">
</head>

<body>
	<form method="" action="" enctype="">

		<header>
			<div align= "center">
			<h1><img src= "#" alt= "" width= "" >Software Project Development Application</h1>
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
			<div align="center" class="welcome">Welcome To Admin Homepage</div>
				<div class="container">
					<a class="a1" href="Dashboard1.php" target="_blank"><h4>Dashboard</h4></a></li><hr>
					<a class="a1" href="Registration.php" ><h4>Register New Employee</h4></a></li><hr>
					<a class="a1" href="../../controller/admin/updateEmp.php" ><h4>Update Employees Profile</h4></a></li><hr>
					<a class="a1" href="../../controller/admin/EmpInfo.php"><h4>Employees Information</h4></a></li><hr>
					<a class="a1" href="assignment.php"><h4>Assign Project Manager and Analyzer and Technical Writer</h4></a></li><hr>
					<a class="a1" href="PendLeave.php"><h4>Pending Leave Request</h4></a>
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