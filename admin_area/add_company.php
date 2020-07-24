 <?php 
include("./include/header.php");
include("./include/sidebar.php");
 ?>

 <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4 pt-3">
       <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="./admin_dashboard.php">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="./create_company.php">Company</a></li>
    <li class="breadcrumb-item"><a href="./add_company.php">Add Company</a></li>
   
  </ol>
</nav>
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
  <h2 class="h2"> Add Company</h2>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
           
          </div>
<!--           <a class="btn btn-primary" href="./add_customer.php">Add Customer</a> 
 -->         
        </div>
      </div>
<div style="width: 60%; margin-left: 20%; background-color: #F2F4F4;">
  
<div id="msg"></div>
  <form action="" method="POST" style="margin:3%; padding: 3%;" name="company_form" id="company_form">
    <div class="form-group">

      <label for="Company Name">Company Name</label>
      <input type="text" name="company" id="company" class="form-control" placeholder="Company Name">
     </div>
     <div class="form-group">
      <label for="company Description">Description</label>
           <textarea name="Description" id="Description" class="form-control" cols="30" rows="10"
            placeholder="Please write information about Company..."></textarea>
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
   var Description = $("#Description").val();
    var company = $("#company").val();
    if(Description == ''){
      alert("please enter Description");
      return false;
    }
     if(company == ''){
      alert("please enter Company Name");
      return false;
    }
    var data = $("#company_form").serialize();

        $.ajax({
       type:"POST",
       url:"./Company_add.php ",
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
