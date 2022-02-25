
<?php
session_start();
include("db_connect.php");
if(isset($_GET['d_id']))
{
	$d_id=$_GET['d_id'];
	 

 $query="DELETE FROM doctor WHERE d_id=$d_id";
 // var_dump($query);
 // exit();
 //var_dump($query);
	// $query="DELETE FROM login,registration using login INNER JOIN registration INNER JOIN astrologer WHERE login.lo_id=registration.lo_id AND registration.lo_id=astrologer.lo_id";
	$result=$con->query($query);
	if($result)
	{
		header('Location:view_doctor.php');
	}
}
?>