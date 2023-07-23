<?php 
session_start();

$con = mysqli_connect('localhost:3306','root','') or die("Failed to connect to the Server");

$db  = mysqli_select_db($con,'yolo')  or die('Database Error');


?>