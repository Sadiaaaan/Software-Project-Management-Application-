
<!DOCTYPE html>

<head>
    <title>Project Final Documentation Upload</title>
</head>

<body bgcolor="LIGHTGRAY">
    <form method="post" action="../../controller/TechnicalWriter/finaldocupload.php" enctype="multipart/form-data">

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
				<a href="../../views/TechnicalWriter/technicalwriter.php">Home</a>&ensp;&ensp;
				<a href="../../index.php">Logout</a>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
			</div> 
		</nav>

			<hr><hr><br>

		<main>

            <table align="center">
                <tr>
                    <td></td>
                    <td>
                        <fieldset>
                            <legend align="center">Please Provide The Final Documentation</legend>
                            <br><br>
                            <table >
                                <tr>
                                    <td><input type="file" name="file"> <br><hr></td>
                                </tr>
                                <tr>
                                    <td align="right"><input type="submit" value="Submit" name="Submit" onclick="alert()"><br><br></td>
                                </tr>
                            </table>
                            
                        </fieldset>
                    </td>
                    <td></td>
                </tr>
            </table>
			
		</main>
		<script>
			alert('Please Upload .pdf Format!');
		</script>

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