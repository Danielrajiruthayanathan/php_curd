<?php
$server="localhost";
$uname="root";
$pwd="";
$db="kvcet";
$con=mysqli_connect($server,$uname,$pwd,$db)or die('db not connected');
$id=$_GET['id'];
$query="delete from dani2 where id=$id";
if($res=mysqli_query($con,$query))
{
    echo"<script>alert('deleted successfully');
    window.location.href='fetupd.php';</script>";
}
else
{
    echo"<script>alert(' not deleted successfully')</script>"; 
}
?>
