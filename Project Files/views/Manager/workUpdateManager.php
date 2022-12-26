<!DOCTYPE html>

<head>
    <title>Work Update Manager</title>
    <link rel="stylesheet" href="../../assets/style/Manager.css">
	<link rel="stylesheet" href="../../assets/style/ManTest.css">
	<link rel="stylesheet" href="../../assets/style/updateManTest.css">
</head>

<body bgcolor="LIGHTGRAY">
	<form method="" action="" enctype="">


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
            <fieldset align="center">
            <legend align="center">Manager Work Update</legend>
            <br><br><br><br><br>

            <div align="center" class="welcome">Manager Work Updates</div>
                <table align= "center" width = "90%" id = "employee">
                    <tr>
                        <th>Project Name</th>
                        <th>Requirement Number</th>
                        <th>Developer Assigned</th>
                        <th>Tester Assigned</th>
                    </tr>
                    <?php
                        require_once('../../models/reqcount.php');
                        require_once('../../models/projectinfomodel.php');
                        require_once('../../models/taskinfomodel.php');
        
                        $p['projectname'] = 'project1';
        
                        $user1 = searchByTester($p);
                        $user2 = searchByDeveloper($p);
                        $user3 = numberOfReq($p);
							echo "	<tr><td>{$p['projectname']}</td>
									<td>{$user3}</td>
                                    <td>{$user2}</td>
									<td>{$user1}</td></tr>";
                        
                        if(($user1===$user2) && ($user2===$user3))
                        {
                            $p['manprog'] = 'completed';

                            $arr = insertManProg($p);
                        }
                        else
                        {
                            $p['manprog'] = 'pending';

                            $arr = insertManProg($p);
                        }
                    ?>
                	</table>
                    <br><br><br><br><br>
                    
		</main>

			<br><br><br><br><br><br><br><br>

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