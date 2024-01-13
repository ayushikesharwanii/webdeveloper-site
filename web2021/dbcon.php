<?php
$server='localhost';
$username='root';
$password='';
$db='webdb';

$con = mysqli_connect($server,$username,$password,$db);
if(!$con)
{
	die("Error");
}
?>