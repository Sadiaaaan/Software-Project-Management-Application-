<?php
    session_start();
    if(isset($_GET['succ'])){
        echo "User Added";
        unset($_GET);
    }
	if(!isset($_SESSION['empid'])){
		header('location: ../login.php');
	}
?>

<!DOCTYPE html>

<head>
    <title>Assign Roles</title>
	<link rel="stylesheet" href="../../assets/style/assignment.css">
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
				<a href="../admin/Admin.php">Home</a>&ensp;&ensp;
				<a href="../Homepage.php" class="logout">Logout</a>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
			</div> 
		</nav>


		<main>
			<div align="center" class="welcome">Assign Project</div>
			<table width=60% align = "center" id="employee">
				<tr>
					<th>Project Name</th>
					<th>Manager</th>
					<th>Analyzer</th>
					<th>Technical Writer</th>
				</tr>
				<?php
					require_once('../../models/projectinfomodel.php');
					require_once('../../models/EmployeeInfo.php');
					$projects = allproject();
                    $managers = allmanager();
                    $analyzers = allanalyzer();
                    $twritters = alltwritter();
                    $flag = 0;
                    $flag1 = 0;
                    $flag2 = 0;
					foreach($projects as $project){
                        $flag = 0;
                        $flag1 = 0;
						echo "	<tr><td>{$project['projectname']}</td>
								<td><select name=\"{$project['projectname']}\" id=\"roles\" onchange=\"assignman(event)\">";
                                if($project['manager'] != null){
                                    echo "<option value=\"{$project['manager']}\" selected>{$project['manager']}</option>";
                                    $flag = 1;
                                }
                                echo "<option value=\"{$manager[0]['username']}\">{$manager[0]['username']}</option>";
                                foreach($managers as $manager){
                                    echo "<option value=\"{$manager['username']}\">{$manager['username']}</option>";
                                }
                                if($flag == 1){
                                    echo "</select> Assigned</td>";
                                }
                                else{
                                    echo "</select></td>";
                                }
						echo	"<td><select name=\"{$project['projectname']}\" id=\"roles\" onchange=\"assignana(event)\">";
                                if($project['analyzer'] != null){
                                    echo "<option value=\"{$project['analyzer']}\" selected>{$project['analyzer']}</option>";
                                    $flag1 = 1;
                                }
                                echo "<option value=\"{$analyzer[0]['username']}\">{$analyzer[0]['username']}</option>";
                                foreach($analyzers as $analyzer){
                                    echo "<option value=\"{$analyzer['username']}\">{$analyzer['username']}</option>";
                                }
                                if($flag1 == 1){
                                    echo "</select> Assigned</td>";
                                }
                                else{
                                    echo "</select></td>";
                                }
                        echo	"<td><select name=\"{$project['projectname']}\" id=\"roles\" onchange=\"assigntwr(event)\">";
                                if($project['twriter'] != null){
                                    echo "<option value=\"{$project['twriter']}\" selected>{$project['twriter']}</option>";
                                    $flag1 = 1;
                                }
                                echo "<option value=\"{$twritters[0]['username']}\">{$twritter[0]['username']}</option>";
                                foreach($twritters as $twritter){
                                    echo "<option value=\"{$twritter['username']}\">{$twritter['username']}</option>";
                                }
                                if($flag1 == 1){
                                    echo "</select> Assigned</td>";
                                }
                                else{
                                    echo "</select></td>";
                                }
                        echo    "</tr>";
					}
				?>
			</table>
            <a id="message"></a>
		</main>

			<br><br><hr>

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
    <script>
        function assignman(event){
            /* name = e.target; */
            let manager = event.target.value;
            let project = event.currentTarget.name;
            var  data = 'manager='+manager+'&project='+project;
            let xhttp  = new XMLHttpRequest();
            xhttp.open('POST', '../../controller/admin/checkassignmentman.php', true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send(data);
            xhttp.onreadystatechange = function (){
                if(this.readyState == 4 && this.status == 200){
                    document.getElementById('message').innerHTML = this.responseText;
                }
            }
        }
        function assignana(event){
            /* name = e.target; */
            let analyzer = event.target.value;
            let project = event.currentTarget.name;
            /* console.log(analyzer);
            console.log(project); */
            var  data = 'analyzer='+analyzer+'&project='+project;
            let xhttp  = new XMLHttpRequest();
            xhttp.open('POST', '../../controller/admin/checkassignmentana.php', true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send(data);
            xhttp.onreadystatechange = function (){
                if(this.readyState == 4 && this.status == 200){
                    document.getElementById('message').innerHTML = this.responseText;
                }
            }
        }
        function assigntwr(event){
            /* name = e.target; */
            let analyzer = event.target.value;
            let project = event.currentTarget.name;
            /* console.log(analyzer);
            console.log(project); */
            var  data = 'analyzer='+analyzer+'&project='+project;
            let xhttp  = new XMLHttpRequest();
            xhttp.open('POST', '../../controller/admin/checkassignmenttwr.php', true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send(data);
            xhttp.onreadystatechange = function (){
                if(this.readyState == 4 && this.status == 200){
                    document.getElementById('message').innerHTML = this.responseText;
                }
            }
        }
    </script>
	
</body>
</html>