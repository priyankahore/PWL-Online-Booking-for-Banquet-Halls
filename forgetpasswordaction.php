<?php 
include('../inc/connect.php');
if(isset($_GET['submit'])){
	$otps=$_GET['otps'];
	
	$otp=$_GET['otp'];
	
	$pass=$_GET['confirmpass'];
	$email=$_GET['email'];

	if($otps==$otp){
		$q  = mysqli_query($con,"update owner set Password = '$pass' where  Email  = '$email'");
    		  if($q){

    		  	?>

<script>
  
  window.location   =  'forgetpassword.php?msg=changed ';
</script>

    		  	<?php

    		  }
    	
    	else{
    		?>
<script>
 
  window.location   =  'forgetpassword.php?msg=nototp';
</script>

<?php
    	}
	}
	else{
		echo "false";
		?>
		<script>
 
  window.location   =  'forgetpassword.php?msg=nototp';
</script>
<?php 

	}
}

?>