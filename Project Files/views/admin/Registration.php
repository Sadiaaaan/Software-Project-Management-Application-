<?php
	session_start();
	if(!isset($_SESSION['empid'])){
		header('location: ../login.php');
	}
?>
<html>

<head>
    <title>Registration Page</title>
    <!-- <link rel="stylesheet" href="../assets/style/Registration.css"> -->
</head>

<body bgcolor="LIGHTGRAY">

   

    <header>
        <div align= "center">
        <h1><img src= "#" alt= "" width= "">Software Project Development Application</h1>
        </div>
    </header>

        <br>

    <nav>
        <div align= "right">
            <a href="Admin.php">Home</a>
            &ensp;&ensp;
            <a href="../Homepage.php" class= "logout">Logout</a>
            &ensp;&ensp;&ensp;&ensp;&ensp;&ensp; 
        </div>        
    </nav>

      <br>


        <form method="post" action="../../controller/admin/regCheck.php" >
            <fieldset><div align="center" class="welcome"><h3>Registraion</h3></div></fieldset>
            <div align="center">
                <div>
                    Username<br>
                    <input type="text" id="user" name="username"  value= ""> <br><br>
                </div>
                <div>
                        Password <br>
                        <input type="password" id="password" name="password" value="" onkeyup="passVal()"><br>
                        <a style="font-size: small;" id="message"></a>
                    </div>
                    <div>
                        Email<br>
                        <input type="email" name="email" value="" ><br><br>
                    </div>
                   
                    <div>
                             Role<br>
                            <select name="roles" id="roles">
                                <option value="Analyzer">Project Analyzer</option>
                                <option value="Manager">Project Manager</option>
                                <option value="Developer">Project Developer</option>
                                <option value="Tester">Project Tester</option>
                                <option value="Technical_Writer">Project Documentor</option>
                                <option value="Client">Client</option>
                            </select>
                        
                    </div>
                    <div>
                        <td colspan="2"><hr></td>
                    </div>
                    <div>
                        <input type="submit" name="submit" value="Submit" class="submit">
                    </div>
                    <div>
                    <?php 
                                if(isset($_GET['succ'])){
                                    echo "<b><h4>Employee Added</h4></b>";
                                }
                               
                                if(isset($_GET['err'])){
                                    echo "null username/password or short password!";
                                }

                            ?>   
                    </div>
            </div>
                    <br><br><hr>


        </form>

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

<script >
    function passVal(){
        let pass =  document.getElementById('password').value;
        let cn = 0;
        let nn = 0;
        let spn = 0;
        for(let i = 0; i < pass.length; i++){
            if((pass[i] >= 'A' && pass[i] <= 'Z') || (pass[i] >= 'a' && pass[i] <= 'z')){
                cn = cn + 1;
            }
            else if((pass[i] > '9' || pass[i] < '0') && pass[i] != ' ' ){
                spn = spn + 1;
            }
            else{
                nn = nn + 1;
            }
        }
        if(pass.length < 4){
            document.getElementById('message').innerHTML = "Password length is too short";
        }
        else if((cn == 0 || nn == 0) && spn == 0){
            document.getElementById('message').innerHTML = "Password strength is weak";
        }
        else if((cn == 0 && spn > 0) || (cn > 0 && spn == 0)){
            document.getElementById('message').innerHTML = "Password strength is medium";
        }
        else{
            document.getElementById('message').innerHTML = "Password strength is strong";
        }

    }
    
</script>

</body>
</html>