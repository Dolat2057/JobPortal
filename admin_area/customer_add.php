<?php
include("./connection/db.php");
 $email = $_POST['email'];
 $username = $_POST['Username'];
 $Password = $_POST['Password'];
 $first_name = $_POST['first_name'];
 $last_name = $_POST['last_name'];
 $admin_type = $_POST['admin_type'];


$query = mysqli_query($conn,"INSERT  into admin_login(admin_email,admin_pass,admin_username, first_name,last_name,admin_type) values('$email','$Password','$username','$first_name','$last_name','$admin_type')");

if($query){
	echo "<script>alert('Data inserted successfully')</script>";
	echo "<script>window.open('./customers.php','_self')</script>";

}
else{
	echo "<script>alert('Data  Not Inserted !!')</script>";
	echo "<script>window.open('./add_customer.php','_self')</script>";
}


?>