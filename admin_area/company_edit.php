<?php 

include("./connection/db.php");
include("./include/header.php");
include("./include/sidebar.php");


$id = $_GET['edit'];
$query = mysqli_query($conn,"SELECT * from company where company_id='$id'");
while($row = mysqli_fetch_array($query)){
	$company_name = $row['company'];
	$des = $row['des'];

}
 ?>

  <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4 pt-3">
       <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="./admin_dashboard.php">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="./customers.php">Company</a></li>
    <li class="breadcrumb-item"><a href="./add_customer.php">Update Company</a></li>
   
  </ol>
</nav>
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
  <h2 class="h2"> Update Company</h2>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
           
          </div>
<!--           <a class="btn btn-primary" href="./add_customer.php">Add Customer</a> 
 -->         
        </div>
      </div>
<div style="width: 60%; margin-left: 20%; background-color: #F2F4F4;">
     <div id="msg"></div>

  <form action="" method="POST" style="margin:3%; padding: 3%;" name="customer_form" id="customer_form">
    <div class="form-group">
   
      <label for="Customer Email">Enter Company Name</label>
      <input type="text" name="Company" id="Company" value=" <?php echo $company_name; ?>" 
       class="form-control" placeholder="Enter Company Name">
    </div>
     <div class="form-group">
      <label for="Customer Username">Enter Description</label>
      <textarea name="des" id="des" class="form-control" cols="30" rows="10"><?php echo $des; ?>
        
      </textarea>
    </div>
     

    <input type="hidden" name="id" id="id" value="<?php echo $_GET['edit']; ?>">
    <div class="form-group">
      <input type="submit" class="btn btn-block btn-success" placeholder="Update" name="submit" id="submit" value="Update">
    </div>
    </div>
  </form>


      <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>

    
      <div class="table-responsive">
       
      </div>
    </main>
  </div>
</div>

        <script type="text/javascript" src="./js/bootstrap.min.js"></script>
<script type="text/javascript" src="./js/jquery.js"></script>
<script type="text/javascript" src="./js/chart.min.js"></script>
<script type="text/javascript" src="./js/bootstrap.bundle.min.js"></script>


<!-- data table -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js
"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $('#example').DataTable();
} );
</script>

      </body>
</html>
<?php 
include("./connection/db.php");
if(isset($_POST['submit'])){
	$id = $_POST['id'];
	$company= $_POST['Company'];
	$des= $_POST['des'];
	
	
	$query1=mysqli_query($conn,"UPDATE company set company='$company',des='$des',
		where company_id='$id'");
if($query1){
	echo "<script>alert('Company detail has been updated successfully')</script>";
	header('location:./create_company.php');
}
else{
	echo "<script>alert('Company details not updated ! please try again')</script>";
	echo "<script>window.open('./create_company.php','_self')</script>";
}


}
 ?>