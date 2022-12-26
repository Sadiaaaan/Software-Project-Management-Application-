<!DOCTYPE html>

<head>
    <title>Request For Meeting</title>
</head>

<body bgcolor="LIGHTGRAY">
	<form method="post" action="../../controller/Analyzer/anameetingreqcheck.php" enctype="">

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
                <a href="../../views/Analyzer/analyzer.php">Home</a>&ensp;&ensp;
				<a href="../../index.php">Logout</a>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
			</div> 
		</nav>

			<hr><hr><br>

		<main>
				</fieldset>

                <fieldset align="center">
                    <legend align="center">Request for a Meeting</legend>
						<br>

						<h4>Employee ID: <input type="text" id="empid" name="empid"></h4>
						<hr>

						<h4>Project ID: <input type="text" id="pid" name="pid"></h4>
						<hr>


                            <label for="day">Choose a Day: </label>

                            <select name="day" id="day">
                            <option value="Sunday">Sunday</option>
                            <option value="Monday">Monday</option>
                            <option value="Tuesday">Tuesday</option>
                            <option value="Wednesday">Wednesday</option>
                            <option value="Thursday">Thursday</option>
                            </select>
                        <br><hr><br>
                        
                        <input align="center" type="submit" value="save" name="submit">
                        
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