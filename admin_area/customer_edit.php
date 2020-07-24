<?php 

include("./connection/db.php");
include("./include/header.php");
include("./include/sidebar.php");

$id = $_GET['edit'];
$query = mysqli_query($conn,"SELECT * from admin_login where id='$id'");
while($row = mysqli_fetch_array($query)){
	$email = $row['admin_email'];
	$admin_username = $row['admin_username'];
	$first_name = $row['first_name'];
	$last_name = $row['last_name'];
	$admin_pass = $row['admin_pass'];
	$admin_type = $row['admin_type'];
}
 ?>

  <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4 pt-3">
       <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="./admin_dashboard.php">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="./customers.php">customers</a></li>
    <li class="breadcrumb-item"><a href="./add_customer.php">Update customer</a></li>
   
  </ol>
</nav>
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
  <h2 class="h2"> Update Customer</h2>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
           
          </div>
<!--           <a class="btn btn-primary" href="./add_customer.php">Add Customer</a> 
 -->         
        </div>
      </div>
<div style="width: 60%; margin-left: 20%; background-color: #F2F4F4;">
  

  <form action="" method="POST" style="margin:3%; padding: 3%;" name="customer_form" id="customer_form">
    <div class="form-group">
      <div id="msg"></div>
      <label for="Customer Email">Enter Email</label>
      <input type="email" name="email" id="email" value=" <?php echo $email; ?>" 
       class="form-control" placeholder="Enter Customer Email">
    </div>
     <div class="form-group">
      <label for="Customer Username">Enter Username</label>
      <input type="text" name="Username" id="Username"  value=" <?php echo $admin_username; ?>" 
       class="form-control" placeholder="Enter Customer Username">
    </div>
     <div class="form-group">
      <label for="Customer Password">Enter Password</label>
      <input type="pass" name="Password" id="Password"  value=" <?php echo $admin_pass; ?>" 
       class="form-control" placeholder="Enter Password">
    </div>
     <div class="form-group">
      <label for="First name">Enter Firstname</label>
      <input type="text" name="first_name" id="first_name"  value=" <?php echo $first_name; ?>" 
      class="form-control" placeholder="Enter First Name">
    </div>
     <div class="form-group">
      <label for="Last name">Enter Lastname</label>
      <input type="text" name="last_name" id="last_name"  value=" <?php echo $last_name; ?>" 
      class="form-control" placeholder="Enter Last name">
    </div>
     <div class="form-group">
      <label for="Admin Type">Admin Type</label>
    <select name="admin_type" name="admin_type" class="form-control"  value=" <?php echo $admin_type; ?>"  
    id="admin_type"> 
      <option value="1">Super Admin</option>
       <option value="2">Customer Admin</option>
    </select>
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
<!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.5/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="/docs/4.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-1CmrxMRARb6aLqgBO7yyAxTOQE2AKb9GfXnEo760AUcUmFx3ibVJJAzGytlQcNXd" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
        <script src="dashboard.js"></script> -->
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
	$email= $_POST['email'];
	$Username= $_POST['Username'];
	$Password= $_POST['Password'];
	$first_name= $_POST['first_name'];
	$last_name= $_POST['last_name'];
	$admin_type= $_POST['admin_type'];
	
	$query1=mysqli_query($conn,"UPDATE admin_login set admin_email='$email',admin_username='$Username',
	admin_pass='$Password',first_name='$first_name',last_name='$last_name',admin_type='$admin_type'
	 where id='$id'");
if($query1){
	echo "<script>alert('Record has been updated successfully')</script>";
	header('location:./customers.php');
}
else{
	echo "<script>alert('Record not updated ! please try again')</script>";
	echo "<script>window.open('./customers.php','_self')</script>";
}
}
 ?>