<?php 
include("./connection/db.php");
$del = $_GET['del'];
$query= mysqli_query($conn,"DELETE from company where job_id='$del' ");
if($query){
	echo "<script>alert('Company has been deleted')</script>";
	/*echo "<script>window.open('./customers.php','_self')</script>";*/
	header('location:./create_company.php');
}
else{
	echo "<script>alert('Company is not deleted')</script>";
}

 ?>