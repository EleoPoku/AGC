
<!doctype html>
<html>
<head>
		<title>I.P.D.C.C</title>
		<!-- CSS only -->
 <link href="css/style.css" rel="stylesheet" type="text/css"/>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css"
 rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
 
 <!-- CSS only -->
 
</head>
<body style="background:wheat;">




<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="memberData" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Member Info</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form action="insert.php" method="POST">
      	
      <div class="modal-body">
       
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text"  name="name" class="form-control"   placeholder="Enter Name">
     
  </div>

 <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">DateofBirth</label>
    <input type="text"  name="dob" class="form-control"   placeholder="DateofBirth">
     
  </div>

   <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Branch</label>
    <input type="text"  name="branch" class="form-control"   placeholder="Branch Name">
     
  </div>

<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Phone Number</label>
    <input type="Number"  name="phone" class="form-control"   placeholder="Enter Phone">
     
  </div>
   
 

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="Submit" name="insertdata" class="btn btn-primary">Save Data</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal Ends-->

<!-- Modal  update-->
<div class="modal fade" id="editmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Member Info</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form action="Update.php" method="POST">
      	
      <div class="modal-body">
       
      	<input type="hidden" name="update_id" id="update_id">

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text"  name="name" id="name" class="form-control"   placeholder="Enter Name">
     
  </div>

 <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">DateofBirth</label>
    <input type="text"  name="dob" id="dob" class="form-control"   placeholder="DateofBirth">
     
  </div>

   <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Branch</label>
    <input type="text"  name="branch" id="branch" class="form-control"   placeholder="Branch Name">
     
  </div>

<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Phone Number</label>
    <input type="Number"  name="phone" id="phone" class="form-control"   placeholder="Enter Phone">
     
  </div>
   
 

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
        <button type="Submit" name="updatedata" class="btn btn-primary">Update Info</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- 
......DELETE MODAL.......... -->
    


<div class="modal fade" id="deletemodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Member Info</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form action="Delete.php" method="POST">
      	
      <div class="modal-body">
       
      	<input type="hidden" name="delete_id" id="delete_id">

   
		<h4>Do you want to delete? </h4> 

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"> No</button>
        <button type="Submit" name="deletedata" class="btn btn-primary">Yes </button>
      </div>
      </form>
    </div>
  </div>
</div>





<!--....DELETE MODAL END............. -->


	<div class="container">
		<div class="jumbotron">
			<div class="card" style="background:wheat;">
				<h2>International Prayer And Deliverance Christian Center(IPDCC)</h2>
			</div>

	
		<div class="card">
				 <div class="card-body">
				 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#memberData">
  Proceed to
</button>

				 </div>
			</div>
			<div class="card">

				<div class="card-body">
<?php
		$connection = mysqli_connect("localhost","root","");
		$db=mysqli_select_db($connection, 'agc');



		$query="SELECT * FROM agc";
		$query_run = mysqli_query($connection,$query);
?>

					
<table id ="tabledata_id" class="table table-wheat">
  <thead>
   <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">DateofBirth</th>
      <th scope="col">Branch</th>
       <th scope="col">Phone</th>
       <th scope="col">Edit</th>
        <th scope="col">Delete</th>
    </tr>
  </thead>
<?php

			if($query_run)
			{
				foreach($query_run as $row)
				{

?>

  <tbody>
      <tr>
      <td><?php  echo $row['ID'];?></td>
      <td><?php  echo $row['Name'];?></td>
      <td><?php  echo $row['DateofBirth'];?></td>
      <td><?php  echo $row['Branch'];?></td>
      <td><?php  echo $row['Phone'];?></td>
      <td> 
      	<button type="button" class="btn btn-primary editbtn">Edit</button>
      </td>

       <td> 
      	<button type="button" class="btn btn-primary  deletebtn">Delete</button>
      </td>
     
       
    </tr>
  </tbody>

<?php
					}
					}
					else{

						echo "No Record Found";
					}

?>


</table>


				</div>

			</div>


</div>
</div>
	

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha512-+NqPlbbtM1QqiK8ZAo4Yrj2c4lNQoGv8P79DPtKzj++l5jnN39rHA/xsqn8zE9l0uSoxaCdrOgFs6yjyfbBxSg==" crossorigin="anonymous"></script>

	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>



<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>

<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>


<script>
 $(document).ready(function() {
    $('#example').DataTable();
} );
</script>



<!-- 
 ...........................................................-->

<script>
	
$(document).ready(function() {

$('.deletebtn').on('click', function() {

$('#deletemodal').modal('show');


$tr=$(this).closest('tr');
var data = $tr.children("td").map(function(){

	return $(this).text();
}).get();

console.log(data);

$('#delete_id').val(data[0]);







	});
});

</script>



<!-- 
 ...........................................................-->

<script>
	
$(document).ready(function() {

$('.editbtn').on('click', function() {

$('#editmodal').modal('show');


$tr=$(this).closest('tr');
var data = $tr.children("td").map(function(){

	return $(this).text();
}).get();

console.log(data);

$('#update_id').val(data[0]);
$('#name').val(data[1]);
$('#dob').val(data[2]);
$('#branch').val(data[3]);
$('#phone').val(data[4]);






	});
});

</script>

</body>
</html>