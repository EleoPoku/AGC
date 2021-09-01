<?php
$connection = mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection, 'agc');


if(isset($_POST['insertdata']))
{

	$name=$_POST['name'];
	$dob=$_POST['dob'];
	$branch=$_POST['branch'];
	$contact=$_POST['phone'];


$query="INSERT INTO `agc`(`Name`, `DateofBirth`,`Branch`,`Phone`) VALUES ('$name','$dob','$branch','$contact')";
$query_run = mysqli_query($connection,$query);

if($query_run)
{ 

	echo'<script> alert("Data Saved");</script>';
	header('location:index.php');
}

else{
	echo'<script> alert("Data Not Saved");</script>';
}


}
 ?>
