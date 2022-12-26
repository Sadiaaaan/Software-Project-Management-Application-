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
	<form method="POST" action="../../controller/Manager/clearMeeting.php" enctype="">



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

		<div align="center" class="welcome">Schedule Meeting</div>
                <table align= "center" width = "90%" id = "employee">
                    <tr>
                        <th >Weekday</th>
                        <th>9-10</th>
                        <th>10-11</th>
                        <th>11-12</th>
                        <th>12-1</th>
                        <th>2-3</th>
                        <th>3-4</th>
                        <th>4-5</th>
                    </tr>
                    <?php
                        require_once('../../models/meetinglist.php');
						$users = allMeeting();
						foreach($users as $user){
							echo "	<tr><th>{$user['weekday']}</th>
									<td>{$user['9-10']}</td>
									<td>{$user['10-11']}</td>
                                    <td>{$user['11-12']}</td>
									<td>{$user['12-1']}</td>
                                    <td>{$user['2-3']}</td>
									<td>{$user['3-4']}</td>
									<td>{$user['4-5']}</td></tr>";
						}
                    ?>
                	</table><br><br>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
					&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
					
					<input align="center" class="edit" type="submit" value="Clear Meetings" name="clear">
					<br><br><br>

                <fieldset align="center">
                    <legend align="center">Update Meeting</legend>
						
					<h3><a class="edit" href="newMeeting.php">Add New Meeting</h4></a>
                        
                </fieldset>
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