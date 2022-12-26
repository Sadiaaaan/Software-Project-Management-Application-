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
	<form method="POST" action="../../controller/Manager/updateMeeting.php" enctype="">


		<header>
			<div align= "center">
			<h1><img src= "#" alt= "" width= "">Software Project Development Application</h1>
			</div>
		</header>

		<br>

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
				
		<table align= "center" width = "90%" id = "employee">
			<tr>
                <fieldset align="center">
                    <legend align="center">Update Meeting</legend>
						<br><br>
                            <label for="Day">Choose a Day: </label>

                            <select name="Day" id="Day">
                            <option value="Sunday">Sunday</option>
                            <option value="Monday">Monday</option>
                            <option value="Tuesday">Tuesday</option>
                            <option value="Wednesday">Wednesday</option>
                            <option value="Thursday">Thursday</option>
                            </select>
                       <br> <br><hr><br>
                        
                        <label for="Time">Choose a Time: </label>

							<select name="Time" id="Time">
                            <option value="9-10">9-10</option>
                            <option value="10-11">10-11</option>
                            <option value="11-12">11-12</option>
                            <option value="12-1">12-1</option>
                            <option value="2-3">2-3</option>
                            <option value="3-4">3-4</option>
                            <option value="4-5">4-5</option>
                            </select>
                        
                         <br><br> <br><hr><br>
                        
                        <h4>Project ID: <input type="text" id="Pid" name="Pid"></h4>
                        
                        <br>

                        <input align="center" class="edit" type="submit" value="save" name="submit">
                        
                </fieldset>
			<tr>
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