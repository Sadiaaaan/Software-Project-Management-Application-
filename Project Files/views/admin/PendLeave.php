<?php
    if(isset($_GET['succ'])){
        unset($_GET);
    }
?>
<?php
	session_start();
	if(!isset($_SESSION['empid'])){
		header('location: ../login.php');
	}
?>

<!DOCTYPE html>

<head>
    <title>Pending Leave Request</title>
	<link rel="stylesheet" href="../../assets/style/PendLeave.css">
</head>

<body bgcolor="LIGHTGRAY">
	<form method="post" action="../../controller/admin/CheckPendLeave.php" enctype="">


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
				<a href="Admin.php">Home</a>&ensp;&ensp;
				<a href="../views/Homepage.php" class="logout">Logout</a>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
			</div> 
		</nav>

			<br>

		<main>
			<div align="center" class="welcome">Employee Information</div>
				<table height=90% width=60% align = "center" id="employee">
					<tr>
						<th>Employee Name</th>
						<th>Applied leave date</th>
						<th>Duration(Days)</th>
						<th>Approval</th>
					</tr>
					<?php
						require_once('../../models/LeaveInfo.php');
						require_once('../../models/EmployeeInfo.php');
						$users = allapplicant();
						foreach($users as $user){
							$user['id'] = $user['empid'];
							$emp = searchUserById($user);
							echo "<tr><td>{$emp['username']}</td>";
							echo "<td>".$user['date']."</td><td>".$user['duration']."</td>";
							if($user['approval'] == "pending"){
								echo "<td><a class=\"edit\" href=\"../../controller/admin/check/CheckPendLeave.php?id={$user['leaveid']}&type=approved\">Approve</a>
								<a class=\"edit\" href=\"../../controller/admin/check/CheckPendLeave.php?id={$user['leaveid']}&type=rejected\">Reject</a></td></tr>";
							}
							else{
								echo "<td>{$user['approval']}</td></tr>";
							}
	
						}
					?>
				</table>
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