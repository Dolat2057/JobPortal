<?php
include("./connection/db.php");
 $Company = $_POST['company'];
 $Description = $_POST['Description'];
 


$query = mysqli_query($conn,"INSERT  into company(company,des)
	values('$Company','$Description')");

if($query){
	echo "<script>alert('Company Inserted  successfully')</script>";
	

}
else{
	echo "<script>alert('Company Not Inserted !! please try again!!!?')</script>";
}


?>