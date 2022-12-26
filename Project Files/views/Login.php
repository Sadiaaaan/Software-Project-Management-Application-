<!DOCTYPE html>
<head>
    <title>Login</title>
</head>
<body bgcolor="LIGHTGRAY">

        <hr><hr>

    <header>
        <div align= "center">
        <h1><img src= "#" alt= "" width= "">Software Project Development Application</h1>
        </div>
    </header>

        <hr><hr><br>

    <nav>
        <div align= "right">
            
            <a href="Homepage.php">Home</a>
            &ensp;&ensp;&ensp;&ensp;&ensp;&ensp; 
        </div>        
    </nav>

        <hr><hr><br>

    <main>
		<form method="post" action="../controller/LoginCheck.php" enctype="">
			<fieldset>
				<legend align="center"><b><h3>LOGIN</h3></b></legend>
				<table align="center">
					<tr>
						<td>User Name</td>
						<tr></tr>
						<td><input type="text" name="username" value="" ></td>
					</tr>
					<tr>
						<td>Password</td>
						<tr></tr>
						<td><input type="password" name="password" value="" ></td>
					</tr>
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="checkbox" name = "Remember" value="">Remember Me</td>
                    </tr>
					<tr>
						<td>
							<input type="submit" name="" value="Submit">
							<br>
						</td>
					</tr>
					<tr>
						<td>
							<?php 
								if(isset($_GET['err'])){
										echo "<b><h3>invalid username/password</h3></b>";
								}
							?>
							<br><br><br><br>
						</td>
					</tr>
				</table>
			</fieldset>
		</form>
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

    

</html>