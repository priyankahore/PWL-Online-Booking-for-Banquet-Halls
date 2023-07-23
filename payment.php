<?php


include('inc/connect.php');
$name=$_SESSION['username'];
$ename=$_SESSION['event'];
$cname=$_SESSION['cname'];
$mobile=$_SESSION['mobile'];
$email=$_SESSION['email'];
$adamt=$_SESSION['adamt'];

// Merchant key here as provided by Payu
$MERCHANT_KEY = "kewCD8";
$SALT = "WTQopTPo";
$txnid=rand();
$name=$cname;
$email=$email;
$amount=$adamt;
$phone=$mobile;
$surl="http://localhost/YOLO/viewHistory.php";
$furl="http://localhost/YOLO/viewHistory.php";
$productInfo=$ename;

// Merchant Salt as provided by Payu

$hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
$hashString=$MERCHANT_KEY."|".$txnid."|".$amount."|".$productInfo."|".$name."|".$email."|||||||||||".$SALT;
   
$hash = strtolower(hash('sha512', $hashString));
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head >
</head>
<script>
	function submitForm(){

		document.getElementById("cform").submit();
	}
</script>
<body onload="submitForm()">
	<div >
		
	

<form action="https://secure.payu.in/_payment"  name="payuform" method=POST id="cform">
<input type="hidden" name="key" value="<?php echo $MERCHANT_KEY;?>" />
<input type="hidden" name="hash"  value="<?php echo $hash;?>" />
<input type="hidden" name="txnid" value="<?php echo $txnid;?>"/>
<table>
<tr>
<td> </td>
<td><input type="hidden" name="amount" value="<?php echo $amount;?>" /></td>
<td> </td>
<td><input type="hidden" name="firstname" id="firstname" value="<?php echo $name;?>" /></td>
</tr>
<tr>
<td> </td>
<td><input type="hidden" name="email" id="email"  value="<?php echo $email;?>" /></td>
<td> </td>
<td><input type="hidden" name="phone" value="<?php echo $phone;?> " /></td>
</tr>
<tr>
<td></td>
<td colspan="3"><textarea name="productinfo" hidden ><?php echo $productInfo;?></textarea></td>
</tr>
<tr>
<td> </td>
<td colspan="3"><input type="hidden" name="surl"  size="64" value="<?php echo $surl;?> " /></td>
</tr>
<tr>
<td> </td>
<td colspan="3"><input type="hidden" name="furl"  size="64" value="<?php echo $furl;?> " /></td>
</tr>
<tr>
<td colspan="3"><input type="hidden" type="hidden" name="service_provider" value="" /></td>
</tr>
<tr>

<!-- <td colspan="4"><input type="submit" value="Submit"  /></td> -->
</tr>
</table>
</form>
</div>
</body>
</html>