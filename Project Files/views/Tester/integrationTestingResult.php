<?php

    if(isset($_POST['submit'])){

    //    print_r($_FILES);

       
       $file_name = $_FILES['file']['name'];
       $file_type = $_FILES['file']['type'];
       $file_size = $_FILES['file']['size'];
       $file_tmp = $_FILES['file']['tmp_name'];

       $file_store = "../../assets/".$file_name;    

   
       move_uploaded_file($file_tmp, $file_store); 
    }

?>

<!DOCTYPE html>

<head>
    <title>Integration Testing Result</title>
</head>

<body bgcolor="LIGHTGRAY">
    <form method="POST" action="integrationTestingResult.php" enctype="multipart/form-data">
	<link rel="stylesheet" href="../../assets/style/ManTest.css">
	<link rel="stylesheet" href="../../assets/style/updateManTest.css">


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
				<a href="projectTester.php">Home</a>&ensp;&ensp;
				<a href="../Homepage.php">Logout</a>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
			</div> 
		</nav>

			<br>

		<main>

		<table width=60% align = "center" id="employee">
		<tr><br><br><br><br><br><br><br><br>
			<fieldset align="center">
				<legend align="center">Upload Integration Testing Result</legend><br><br>

                                  <input type="file" name="file" value=""><br><br>
                                <input type="submit" class="edit" value="Upload" name="submit"><br><br><br>
                    </fieldset>
					<br><br><br><br>
                </tr>
            </table>
			
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