<?php  

include('../inc/connect.php');


$ownerid=$_SESSION['ownerid'];


if(isset($_POST['submit'])){


$p=$_SESSION['p'];


$name =  $_POST['pname'];
$type =  $_POST['type'];
$capacity =  $_POST['capacity'];
$rate =  $_POST['rate'];
$drate=  $_POST['drate'];
$address=  $_POST['add1'].$_POST['add2'];
$city=  $_POST['city'];
$state=  $_POST['state'];
$pincode=  $_POST['pincode'];
$vegimg=$_FILES['vimg'];
$veg=$_POST['veg'];
$nvegimg=$_FILES['vnimg'];
$nonveg=$_POST['nonveg'];
$description=$_POST['descr'];


 $filename1=$vegimg['name'];
 $filerror1=$vegimg['error'];
 $filetmp1=$vegimg['tmp_name'];

 $fileext1=explode('.',$filename1);

 $filename2=$nvegimg['name'];
 $filerror2=$nvegimg['error'];
 $filetmp2=$nvegimg['tmp_name'];

 $fileext1=explode('.',$filename1);
 $filecheck1=strtolower(end($fileext1));
 $fileextstored1=array('png','jpg','jpeg');

 if(in_array($filecheck1, $fileextstored1)){
 	$destination1='upload/'.$filename1;
 	move_uploaded_file($filetmp1, $destination1);
 }

  $fileext2=explode('.',$filename2);
 $filecheck2=strtolower(end($fileext2));
 $fileextstored2=array('png','jpg','jpeg');

 if(in_array($filecheck2, $fileextstored2)){
 	$destination2='upload/'.$filename2;
 	move_uploaded_file($filetmp2, $destination2);
 }

 $q  = mysqli_query($con,"INSERT INTO property(Property_name, Property_type, Capacity, Property_rate, Decoration_rate, Address, City, State, pincode, Veg_menu, Veg_plate, Non_veg_menu, Non_veg_plate, Description, Owner_id) VALUES ('$name','$type','$capacity','$rate','$drate','$address','$city','$state','$pincode','$destination1','$veg','$destination2','$nonveg','$description','$ownerid')");
 if($q){
 	echo("Success");
 }
 else{
 	echo("Failed");
 }


 $imagecount=count($_FILES['image']['name']);
 for($i=0;$i<$imagecount;$i++){
 	$imageName=$_FILES['image']['name'][$i];
 	$imageTempName=$_FILES['image']['tmp_name'][$i];
 	$targetPath='upload/'.$imageName;
 	if(move_uploaded_file($imageTempName, $targetPath)){
 		$sql="INSERT INTO property_image(Image,p_id) VALUES('$imageName','$p')";
 		$result=mysqli_query($con,$sql);

 		 if($result){
 		 	?>

 
 	<script>

    alert('Property Added Successfully');
    window.location = 'viewBooking.php'; 
   

    </script>
    <?php

	 }

 		


 	}
 }

}
  

?>