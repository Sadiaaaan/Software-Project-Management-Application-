<?php
	session_start();
	if(!isset($_SESSION['empid'])){
		header('location: ../login.php');
	}
?>

<!DOCTYPE html>

<head>
    <title>Schedule Meeting</title>
	<link rel="stylesheet" href="../../assets/style/Manager.css">
	<link rel="stylesheet" href="../../assets/style/ManTest.css">
	<link rel="stylesheet" href="../../assets/style/updateManTest.css">
</head>

<body bgcolor="LIGHTGRAY">
	<form method="POST" action="../../controller/Manager/clearMeetingReq.php" enctype="">


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
                <a href="projectManager.php">Home</a>&ensp;&ensp;
				<a href="Homepage.php">Logout</a>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
			</div> 
		</nav>

			<br>

		<main>

		<div align="center" class="welcome">Requested Meetings</div>
                <table align= "center" width = "90%" id = "employee">
                    <tr>
                        <th>Project ID</th>
                        <th>Employee ID</th>
                        <th>Day</td>
                    </tr>
                    <?php
                        require_once('../../models/meetinginfo.php');
						$users = allMeetingReq();
						foreach($users as $user){
							echo "	
									<tr><td>{$user['projectid']}</td>
									<td>{$user['empid']}</td>
									<td>{$user['weekday']}</td></tr>";
						}

                    ?>
					<tr>
						<td colspan="3" align="center"><input align="center" class="edit" type="submit" value="Clear Meeting Request" name="submit"></td>
					</tr>
                	</table><br><br>

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