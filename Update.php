<?php
$connection = mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection, 'agc');


if(isset($_POST['updatedata']))
{
 

	$id=$_POST['update_id'];
	$name=$_POST['name'];
	$dob=$_POST['dob'];
	$branch=$_POST['branch'];
	$contact=$_POST['phone'];


$query="UPDATE agc SET `Name`='$name',`DateofBirth`='$dob',`Branch`='$branch',`Phone`='$contact' WHERE `ID`='$id' ";
$query_run = mysqli_query($connection,$query);
if($query_run)
{ 

	echo'<script> alert("Data Updated");</script>';
	header("Location:index.php");
}

else{
	echo'<script> alert("Data Not Updated");</script>';
}


}
 ?>
