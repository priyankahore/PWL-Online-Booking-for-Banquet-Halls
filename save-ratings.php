<?php
include('inc/connect.php');
$names=$_POST['names'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$rating=$_POST['rating'];
$description=$_POST['description'];
$pid=$_POST['pid'];
$img = $_FILES['image']['name'];
$tmp_name= $_FILES['image']['tmp_name'];
$location =  'Owner/upload/';
$image=$location.$img;
$sql="INSERT INTO `feedback`(`Image`,`Rating`, `Description`, `Customer_name`, `mobile`, `email`, `Property_id`) VALUES ('$img','$rating','$description','$names','$mobile','$email','$pid')";
$q=mysqli_query($con,$sql);
move_uploaded_file($tmp_name,  $location.$img);
echo "saved";

if($q){
?>

<script>
alert("Thank you for your Feedback.")
window.location="index.php";
</script>
<?php 
}