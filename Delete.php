 <?php
$connection = mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection, 'agc');


if(isset($_POST['deletedata']))
{


	$id=$_POST['delete_id'];
	

$query="DELETE FROM `agc` WHERE  ID='$id'";
$query_run = mysqli_query($connection,$query);
if($query_run)
{ 

	echo'<script> alert("Data Deleted");</script>';
	header("Location:index.php");
}

else{
	echo'<script> alert("Data Not Deletted");</script>';
}


}
 ?>
