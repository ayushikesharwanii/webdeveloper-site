<?php
include 'dbcon.php';

if(isset($_POST['submit'])){

$username=$_POST['username'];
$place=$_POST['place'];
$feedback=$_POST['feedback'];
$photo=$_FILES['photo'];



$filename=$photo['name'];
$filepath=$photo['tmp_name'];
$fileerror=$photo['error'];

if($fileerror == 0)
{
	$destfile='upload/'.$filename;
	// echo "$destfile";

	move_uploaded_file($filepath, $destfile);

	$sql="INSERT INTO `feedback` ( `username`, `place`, `photo`, `feedback`, `date`) VALUES ( '$username', '$place', '$destfile', '$feedback', CURRENT_TIMESTAMP)";
	$query=mysqli_query($con,$sql);
	if($query){
		echo "success";
	}
	else{
		echo " not inserted";
	}

}
else{
	echo "no button has been clicked";
}
}
?>