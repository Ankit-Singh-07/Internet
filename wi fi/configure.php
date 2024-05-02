<?php

$server="localhost";
$username="root";
$password="";
$db="wifi";

$con=new mysqli($server,$username,$password,$db);

if(!$con)
{
    echo "error";
}
?>