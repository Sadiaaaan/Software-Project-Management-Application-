<?php
	session_start();
	if(!isset($_SESSION['empid'])){
		header('location: ../login.php');
	}
?>
<!DOCTYPE html>

<head>
    <title>Dev work upload</title>
</head>

<body bgcolor="LIGHTGRAY">
	<form method="POST" action="../../controller/developer/checkDevWorkUpload.php" enctype="multipart/form-data">

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
				<a href="Homepage.php">Logout</a>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;	
			</div> 
		</nav>

			<hr><hr><br>

		<main>
			<fieldset align= "center ">
				<legend align="center">Upload work</legend>
                    Work File: <input type="file" name="image" value="" /> <br><br>
                    <input type="submit" name="submit" value="Submit" />
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