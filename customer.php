<?php
include("../inc/connect.php");
include("includes/header.php");
include("includes/topbar.php");
include("includes/sidebar.php");


?>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
<link rel="stylesheet" href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="//cdn.datatables.net/buttons/1.7.0/css/buttons.dataTables.min.css">

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Customer</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Customer</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Customer Table</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
             <table id="example" class="table table-bordered table-hover auto">

	<thead class="table-dark">
		<tr>
			<th>Sr No</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Mobile</th>
			<th>Email</th>
			<th>Password</th>
			
			<th>Status</th>
			<th> Action</th>
			
		</tr>
	</thead>
	<tbody>

 <?php  
                    $cnt=0;
                   $result2=mysqli_query($con,"select * from customer");

                  if(mysqli_num_rows($result2)!=0){

                while($row=mysqli_fetch_assoc($result2)){


      ?>

	<tr>
			
			
			<td><?php echo $row['Customer_id'];?></td>
			<td><?php echo $row['First_name'];?></td>
			<td><?php echo $row['Last_name'];?></td>
			<td><?php echo $row['Mobile'];?></td>
			<td><?php echo $row['Email'];?></td>
			<td><?php echo $row['Password'];?></td>
			<td><?php echo $row['Status'];;?></td>
			<td> <a href="custStatus.php?cid=<?php  echo $row['Customer_id'];?>"  class="btn btn-info">Block</a>

			 <a href="customer.php?did=<?php echo $row['Customer_id'];?>" onclick="deleteuser()" class="btn btn-danger">Delete</a>

			  </td>

	</tr>


<?php
	}
	}

	if(isset($_GET['did'])){
  $did=$_GET['did'];

        $q = mysqli_query($con, "delete from customer where Customer_id= '$did'");

          if($q){
            ?>
               <script>

                   alert('Customer deleted successfully');
                   window.location = 'customer.php';

                </script>
            <?php

          }

          else{

            ?>
               <script>

                    alert('Failed');
                    window.location = 'customer.php';

               </script>



            <?php
          }



  }



	
?>





	
	</tbody>
</table>
 <a href="customerReport.php" class="btn btn-primary">Generate Report</a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
</div>
<?php


include("includes/footer.php");

?>
<script src="../dataTables/js/jquery.js"></script>
<script src="../dataTables/js/jquery.datatables.js"></script>
<script src="../dataTables/js/datatables.bootstrap.js"></script>
<script src="//code.jquery.com/jquery-3.5.1.js"></script>
<script src="//cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="//cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="//cdn.datatables.net/buttons/1.7.0/js/buttons.html5.min.js"></script>
<script src="//cdn.datatables.net/buttons/1.7.0/js/buttons.print.min.js"></script> 

<script>


$(document).ready(function() {
    $('#example').DataTable( {
    	
    } );


} );
</script>
<script>

function deleteuser(){

var del  =  confirm("Are you sure you want to Delete this Customer?");

if (del  == true){
  
    window.location = anchor.attr("href");
    
}

else{

    event.preventDefault();
}

}
</script>