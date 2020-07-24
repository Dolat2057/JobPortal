<?php 
include("./include/header.php");
include("./include/sidebar.php");
 ?>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4 pt-3">
       <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="./admin_dashboard.php">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="./customers.php">customers</a></li>
    <li class="breadcrumb-item"><a href="./add_customer.php">Add customer</a></li>
   
  </ol>
</nav>
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
  <h2 class="h2"> Add Customer</h2>
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
      <input type="email" name="email" id="email" class="form-control" placeholder="Enter Customer Email">
    </div>
     <div class="form-group">
      <label for="Customer Username">Enter Username</label>
      <input type="text" name="Username" id="Username" class="form-control" placeholder="Enter Customer Username">
    </div>
     <div class="form-group">
      <label for="Customer Password">Enter Password</label>
      <input type="pass" name="Password" id="Password" class="form-control" placeholder="Enter Password">
    </div>
     <div class="form-group">
      <label for="First name">Enter Firstname</label>
      <input type="text" name="first_name" id="first_name" class="form-control" placeholder="Enter First Name">
    </div>
     <div class="form-group">
      <label for="Last name">Enter Lastname</label>
      <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Enter Last name">
    </div>
     <div class="form-group">
      <label for="Admin Type">Admin Type</label>
    <select name="admin_type" name="admin_type" class="form-control" id="admin_type">
      <option value="1">Super Admin</option>
       <option value="2">Customer Admin</option>
    </select>
    </div>
    <div class="form-group">
      <input type="submit" class="btn btn-block btn-success" placeholder="Save" name="submit" id="submit">
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
<script type="text/javascript">
  $(document).ready(function(){
  $("#submit").click(function(){
   var email = $("#email").val();
    var Username = $("#Username").val();
     var Password = $("#Password").val();
      var first_name = $("#first_name").val();
       var last_name = $("#last_name").val();
        var admin_type = $("#admin_type").val();
        var data = $("#customer_form").serialize();
        $.ajax({
       type:"POST",
       url:"./Customer_add.php ",
       data:data,
       success:function(data){
        $("#msg").html(data);
       }
        });
  });
  });
</script>
      </body>
</html>
