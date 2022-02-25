<?php
include('db_connect.php');
if(isset($_GET['fl_id']))
{
  $fl_id=$_GET['fl_id'];
  //var_dump($l_id);
  
}

  $approve='approve';

  $q="UPDATE login SET l_approve='$approve' WHERE l_id=$fl_id"; 
  
  	$result=$con->query($q);
  	if($result)
  	{
  		header("location:viewfaculty.php");
  	}
  ?>