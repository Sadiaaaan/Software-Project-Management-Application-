<!DOCTYPE html>

<head>
    <title>Project Estimation</title>
	<link rel="stylesheet" href="../../assets/style/workupdateanalyzer.css">
</head>

<body bgcolor="LIGHTGRAY">
    <form method="post" action="../../controller/Analyzer/projectestcalculate.php" enctype="">


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
				<a href="../../views/Analyzer/analyzer.php">Home</a>&ensp;&ensp;
				<a class="logout" href="../../index.php">Logout</a>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
			</div> 
		</nav>

			<br>

		<main>
			<table align="center" id="employee">
				<tr>
					<td>
						<fieldset align="center">
							<div align="center" style="color:black" class="welcome">COCOMO (Constructive Cost Model)</div>
								<table border="1" id="employee">
								<br>
									<tr>
										<th>Software Project Type</th>
										<th>Coefficient<sub>(Effort Factor)</sub></th>
										<th>P <sub>(Project Complexity)</sub></th>
										<th>T <sub>(SLOC-Dependent Coefficient )</sub></th>
									</tr>
									<tr>
										<td>Organic</td>
										<td>2.4</td>
										<td>1.05</td>
										<td>0.38</td>
									</tr>
									<tr>
										<td>Semi-detached</td>
										<td>3.0</td>
										<td>1.12</td>
										<td>0.35</td>
									</tr>
									<tr>
										<td>Embedded</td>
										<td>3.6</td>
										<td>1.20</td>
										<td>0.32</td>
									</tr>
								</table>
								<br><br>
						</fieldset><br><br>
					</td>
					<td>
						<fieldset align="center">
						<div align="center" style="color:black" class="welcome">Please Give Information To Proceed</div>
							<br><br>
							<table border="1" class="employee">
								<tr>
									<td>Project Type</td>
									<td>
										<select name="projecttype" id="">
											<option value="Organic">Organic</option>
											<option value="Semi-detached">Semi-detached</option>
											<option value="Embedded">Embedded</option>
										</select>
									</td>
								</tr>
								<tr>
									<td>SLOC<sub>(Lines Of Code)</sub></td>
									<td>
										<select name="sloc" id="">
											<option value="10000">10000</option>
											<option value="50000">50000</option>
											<option value="100000">100000</option>
											<option value="150000">150000</option>
											<option value="1000000">1000000</option>
											<option value="2000000">2000000</option>
											<option value="3500000">3500000</option>
										</select>
									</td>
								</tr>
								<tr>
									<td colspan="2"><input class="edit" type="submit" name="" value="Submit" onclick="alert()"></td>
								</tr>
							</table>
							<br><br>
						</fieldset><br><br>	
					</td>
				</tr>
			</table>
			

			<fieldset align="center">
			<div align="center" class="welcome">The Calculated Estimation-</div>

				<table border="1" align="center" id="employee">
					<br>
					<tr>
						<th>Effort Estimation <sub>(labor working hours)</sub></th>
						<th>Development Time <sub>(week days)</sub></th>
						<th>Required number of people</th>
					</tr>

					<?php 
						session_start();
						
						if(isset($_SESSION['pm']) || isset($_SESSION['dm']) ||isset($_SESSION['people'])){
							echo "<tr><td>{$_SESSION['pm']}</td><td>{$_SESSION['dm']}</td><td>{$_SESSION['people']}</td></tr>";
							session_unset();
						}else{
							echo "<tr><td>Empty</td><td>Empty</td><td>Empty</td></tr>";
						}
						
						
				?>
				</table>
				<br>
			</fieldset><br><br>
		</main>
		<script>
			alert("Please Don't Forget To Set Project Type And SLOC First!");
		</script>

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