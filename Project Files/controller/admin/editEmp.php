<?php
    if(isset($_GET['succ'])){
        echo "User Added";
        unset($_GET);
    }
?>
<?php
	session_start();
	if(!isset($_SESSION['empid'])){
		header('location: ../../views/login.php');
	}
?>

<!DOCTYPE html>

<head>
    <title>Employee Informations</title>
</head>

<body bgcolor="LIGHTGRAY">
	<form method="post" action="editEmpCheck.php" enctype="">

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
				<a href="../../views/admin/Admin.php">Home</a>&ensp;&ensp;
				<a href="../../views/Homepage.php">Logout</a>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
			</div> 
		</nav>

			<hr><hr><br>

		<main>
			<fieldset>
				<legend align="center">Employee Information</legend>
				<table height=90% width=60% align = "center">
                    <?php
                        require_once('../../models/EmployeeInfo.php');
                        $user = searchUserById($_GET);
                        echo "<tr>
                                <td>ID</td>
                                <td><input type=\"text\" name=\"id\" value=\"{$user['empid']}\" readonly></td>
                            </tr>
                            <tr>
                                <td>Username</td>
                                <td><input type=\"text\" name=\"username\" value=\"{$user['username']}\"></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td><input type=\"email\" name=\"email\" value=\"{$user['email']}\"></td>
                            </tr>
                            <tr>
                                <td>Role</td>
                                <td>
                                    <label for=\"roles\">Choose your Role:</label>
                                    <select name=\"roles\" id=\"roles\">
                                        <option value=\"Analyzer\">Project Analyzer</option>
                                        <option value=\"Manager\">Project Manager</option>
                                        <option value=\"Developer\">Project Developer</option>
                                        <option value=\"Tester\">Project Tester</option>
                                        <option value=\"Technical_Writer\">Project Documentor</option>
                                        <option value=\"Client\">Client</option>
                                    </select>
                                </td>
                            </tr>
                            <tr><td colspan=\"2\">Current Role: Project {$user['role']}</td></tr>
                            <tr>
                                <td colspan=\"2\"><hr></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input type=\"submit\" name=\"submit\" value=\"Save\"></td>
                            </tr>";
                    ?>
                </table>
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