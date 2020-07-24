<?php 
include("./include/header.php");
include("./include/sidebar.php");
 ?>


    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4 pt-3">
       <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="./admin_dashboard.php">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="./customers.php">Company</a></li>
   
  </ol>
</nav>
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
  <h2 class="h2">Company</h2>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
           
          </div>
          <a class="btn btn-primary" href="./add_company.php">Add Company</a> 
         
        </div>
      </div>

<!-- data tables code -->
<!-- ########################################################################################### -->
<table id="example" class="display" style="width:100%">
        <thead>
            <tr>
            	<th>Company ID</th>
                <th>Company Name</th>
                <th>Description</th>
                <th>Actions</th>
                
              
            </tr>
        </thead>
        <tbody>
           <?php 
   include('./connection/db.php');
   $query = mysqli_query($conn,"Select * from company");
   while($row = mysqli_fetch_array($query)){


   ?>
            <tr>
                <td><?php echo $row['company_id']; ?></td>
                <td><?php echo $row['company']; ?></td>
                <td><?php echo $row['des']; ?></td>
               
                <td>
                  <div class="row">
                    <div class="btn-group">
                      <a href="./company_edit.php?edit=<?php echo $row['company_id']; ?>"
                       class="btn btn-success">
                        <span class=" fa fa-pencil"></span></a>
                         <a href="./company_delete.php?del=<?php echo $row['company_id']; ?>" class="btn btn-danger">
                        <span class=" fa fa-trash"></span></a>
                    </div>
                  </div>
                </td>
                
               
            </tr>
          <?php } ?>
        </tbody>
        <tfoot>
            <tr>
            	<th>Company ID</th>
              <th>Company Name</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </tfoot>
    </table>
<!-- ########################################################################################### -->

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
