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
            <h1>Reservation</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Reservation</li>
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
                <h3 class="card-title">Reservation Table</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
             <table id="example" class="table table-bordered table-hover auto">

	<thead class="table-dark">
		<tr>
			<th>Sr No</th>
			<th>Event Name</th>
			<th>Date</th>
      <th>Slot</th>
      <th>Property Name</th>
			
			<th>Customer Name</th>
			<th>Customer Mobile No.</th>
			

		
			
		</tr>
	</thead>
	<tbody>

 <?php  
                    $cnt=0;
                   $result2=mysqli_query($con,"select * from reservation");

                  if(mysqli_num_rows($result2)!=0){

                while($row=mysqli_fetch_assoc($result2)){


      ?>

	<tr>
			
			
			<td><?php echo $row['R_id'];?></td>
			<td><?php echo $row['Event_Name'];?></td>
			<td><?php echo $row['Date'];?></td>
			<td><?php echo $row['Slot'];?></td>
			<td><?php echo $row['Property_name'];?></td>
       <td><?php echo $row['Customer_name'];?></td>
			<td><?php echo $row['mobile'];?></td>
		

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
 <a href="reservationReport.php" class="btn btn-primary">Generate Report</a>
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