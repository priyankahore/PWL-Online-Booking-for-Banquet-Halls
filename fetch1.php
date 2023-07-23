
<style>
       .block {
  display: block;
  width: 100%;
  border: none;
  background-color: black;
  color: white;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
  text-align: center;
  border-radius: 5px;
}
span{
  color: black;
}
h5 {
  font-size: 18px;
}
  
</style>
<form action="booking.php" method="get">

<?php
include('inc/connect.php');
$count=0;
$ename=$_GET['ename'];
$date=$_GET['date'];
$guest=$_GET['guest'];
$cservice=$_GET['cservice'];
$foodtype=$_GET['foodtype'];
$dservice=$_GET['dservice'];
$pid=$_GET['pid'];
$query="select * from reservation where Property_id='$pid' AND  Date='$date' AND Slot='10am to 4pm'";
$query_run=mysqli_query($con,$query);
?>
 <input type="hidden" name="ename"  value="<?php echo $ename; ?>">
 <input type="hidden" name="dates"  value="<?php echo $date; ?>">
  <input type="hidden" name="noofguest" value="<?php echo $guest; ?>">
   <input type="hidden" name="cservice"  value="<?php echo $cservice; ?>">
    <input type="hidden" name="foodtype"  value="<?php echo $foodtype; ?>">
     <input type="hidden" name="dservice"  value="<?php echo $dservice; ?>">
   <h5> &nbsp;&nbsp;&nbsp;<i class="far fa-sunrise"></i> Morning &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="far fa-moon"></i>Evening<br></h5>

<?php
 
$output=0;
if(mysqli_num_rows($query_run)!=0){
  while($rows=mysqli_fetch_assoc($query_run)){

  

}

echo $return="&nbsp;&nbsp;&nbsp;&nbsp;Slot Booked";	


}
else{
	?>
	    
    
      <label class="radio-inline btn btn-light"> &nbsp;<input type="radio" name="slot1"  id="slot" value="10am to 4pm" ><span>10am to 4pm</span></label>

	<?php
	
}

$query1="select * from reservation where Property_id='$pid' AND  Date='$date' AND Slot='6pm to 10pm'";
$query_run1=mysqli_query($con,$query1);


$output=0;
if(mysqli_num_rows($query_run1)!=0){
  while($row=mysqli_fetch_assoc($query_run1)){

  

}

echo $return="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Slot Booked";	


}
else{
	?>
  <label class="radio-inline btn btn-light"> &nbsp;&nbsp;&nbsp;<input type="radio" name="slot1" id="slot" value="6pm to 10pm" ><span>6pm to 10pm</span></label>

	<?php
	
}



?>
<br>
<input type="submit" name="submit" class="block" value="Continue to Book">
</form>
