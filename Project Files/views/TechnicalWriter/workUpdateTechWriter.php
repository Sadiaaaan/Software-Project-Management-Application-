
<!DOCTYPE html>
<head>
    <title>Work Update</title>
	<link rel="stylesheet" href="../../assets/style/Manager.css">
	<link rel="stylesheet" href="../../assets/style/ManTest.css">
	<link rel="stylesheet" href="../../assets/style/updateManTest.css">
</head>

<body bgcolor="LIGHTGRAY">
	<form method="POST" action="" enctype="">


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
				<a href="Homepage.php">Logout</a>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
				<a href="technicalwriter.php">Home</a>&ensp;&ensp;
			</div> 
		</nav>

		<br>

		<main>
			<br>
		<div align="center" class="welcome">Work Update</div>
                <table align= "center" width = "90%" id = "employee">
                    <tr>
                        <th>Project Name</th>
                        <th>Developer Work Status</th>
						<th>Tester Work Status</th>
                    </tr>
                    <?php
                        require_once('../../models/taskinfomodel.php');
						$users = workProgressTechWriter();
						foreach($users as $user){
							echo "	<tr><td>{$user["projectname"]}</td>
									<td>{$user["devprog"]}</td>
									<td>{$user["testprog"]}</td></tr>";
						}
                    ?>
                	</table>
					
				<br>
                
                
                
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