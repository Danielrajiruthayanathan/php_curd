<?php
$server="localhost";
$uname="root";
$pwd="";
$db="kvcet";
$con=mysqli_connect($server,$uname,$pwd,$db) or die('db not connected');
$id=$_POST['id'];
$name=$_POST['name'];
$dob=$_POST['dob'];
$city=$_POST['city'];
$address=$_POST['address'];
$query="update dani2 set name='$name'AND city='$city' where id=$id";
if($res=mysqli_query($con,$query))
{
	echo"<script>alert('update successfully')</script>";
} 
else
{
	echo"<script>alert('update not success')</script>";
}
?>