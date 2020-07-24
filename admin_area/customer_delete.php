<?php 
include("./connection/db.php");
$del = $_GET['del'];
$query= mysqli_query($conn,"DELETE from admin_login where id='$del' ");
if($query){
	echo "<script>alert('Record has been deleted')</script>";
	/*echo "<script>window.open('./customers.php','_self')</script>";*/
	header('location:./customers.php');
}
else{
	echo "<script>alert('Record is not deleted')</script>";
}

 ?>