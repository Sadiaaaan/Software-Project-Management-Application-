<?php
    if(isset($_GET['succ'])){
        echo "User Added";
        unset($_GET);
    }
?>
<?php
	session_start();
	if(!isset($_SESSION['empid'])){
		header('location: ../../login.php');
	}
?>

<!DOCTYPE html>

<head>
    <title>Employee Informations</title>
	<link rel="stylesheet" href="../../assets/style/EmpInfo.css">
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
				<a href="../../views/admin/Admin.php">Home</a>&ensp;&ensp;
				<a href="../../views/Homepage.php" class="logout">Logout</a>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
			</div> 
		</nav>


		<main>
			<div align="center" class="welcome">Employee Information</div>
			<table width=60% align = "center" id="employee">
				<tr>
					<th >Username</th>
					<th>Passowrd</th>
					<th>Email</th>
					<th>Role</th>
				</tr>
				<?php
					require_once('../../models/EmployeeInfo.php');
					$users = allUser();
					foreach($users as $user){
						echo "	<tr><td>{$user['username']}</td>
								<td>{$user['password']}</td>
								<td>{$user['email']}</td>
								<td>{$user['role']}</td></tr>";
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