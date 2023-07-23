<?php 
include('inc/connect.php');
$id=$_GET['id'];

if(isset($_GET['update'])){
	
	$email=$_GET['email'];
	$fname=$_GET['fname'];
	$mobile=$_GET['mobile'];
	
	$name=explode(" ",$fname);
	
	
	$q  = mysqli_query($con,"update customer set First_name = '$name[0]', Last_name = '$name[1]', Mobile= '$mobile',Email='$email' where  Customer_id  = '$id'");

    if($q){

            

?>
<script>
  alert("Updated Successfully");
  window.location   =  'profile.php';
</script>

<?php
    }
}
    if(isset($_GET['updatepass'])){
    	$current=$_GET['current'];
    	$cpass=$_GET['cpass'];
    	$npass=$_GET['npass'];

    	if($current==$cpass){
    		$q  = mysqli_query($con,"update customer set Password = '$npass' where  Customer_id  = '$id'");
    		  if($q){

    		  	?>

<script>
  
  window.location   =  'profile.php?msg=changed ';
</script>

    		  	<?php

    		  }
    	}
    	else{
    		?>
<script>
 
  window.location   =  'profile.php?msg=notmatch';
</script>

<?php
    	}


    }



if(isset($_GET['updateotp'])){
	$otps=$_GET['otps'];
	
	$otp=$_GET['otp'];
	
	$pass=$_GET['pass'];
	if($otps==$otp){
		$q  = mysqli_query($con,"update customer set Password = '$pass' where  Customer_id  = '$id'");
    		  if($q){

    		  	?>

<script>
  
  window.location   =  'profile.php?msg=changed ';
</script>

    		  	<?php

    		  }
    	
    	else{
    		?>
<script>
 
  window.location   =  'profile.php?msg=nototp';
</script>

<?php
    	}
	}
	else{
		echo "false";
		?>
		<script>
 
  window.location   =  'profile.php?msg=nototp';
</script>
<?php 

	}
}

?>