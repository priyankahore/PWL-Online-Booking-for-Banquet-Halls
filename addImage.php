<?php
include('../inc/connect.php');
$id=$_POST['pid'];
echo $id;
 $imagecount=count($_FILES['image']['name']);
 for($i=0;$i<$imagecount;$i++){
 	$imageName=$_FILES['image']['name'][$i];
 	$imageTempName=$_FILES['image']['tmp_name'][$i];
 	$targetPath='upload/'.$imageName;
 	if(move_uploaded_file($imageTempName, $targetPath)){
 		$sql="INSERT INTO property_image(Image,p_id) VALUES('$imageName','$id')";
 		$result=mysqli_query($con,$sql);
 		 if($result){
 		 	?>


 	<script>

    alert('Image Added Successfully');
    window.location = 'viewImage.php?id=<?php echo $id; ?>'; 
   

    </script>
    <?php

	 }

 		
}

 	}
 ?>