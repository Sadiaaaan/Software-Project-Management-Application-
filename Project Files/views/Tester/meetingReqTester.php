<!DOCTYPE html>

<head>
    <title>Schedule Meeting</title>
</head>

<body bgcolor="LIGHTGRAY">
	<form method="POST" action="../../controller/Tester/checkMeetingReq.php" enctype="">
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
				<a href="Homepage.php" class="logout">Logout</a>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
			</div> 
		</nav>
		
		<br>

		<main>

                <fieldset align="center">
                    <legend align="center">Request for a Meeting</legend>
					<table width=60% align = "center" id="employee">
					<tr>
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
                        <br><br><br>
                        
                        <input align="center" class="edit" type="submit" value="sent" name="submit" onclick="creatMeeting(event)">
					</tr>
                        
                </fieldset>
				<a id="message"></a>
		</main>

			<br><br><br><br><br><br>

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
        function creatMeeting(event){
            /* name = e.target; */
            let empid = document.getElementById('empid').value;
            let pid = document.getElementById('pid').value;
			let day = document.getElementById('day').value;

            var  data = 'empid='+empid+'pid='+pid+'day='+day;
            let xhttp  = new XMLHttpRequest();
            xhttp.open('POST', '../../controller/admin/updateMeeting.php', true);
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