
<?php
session_start();
include("db_connect.php");
if(isset($_GET['fl_id']))
{
	$fl_id=$_GET['fl_id'];
	 

 $query="DELETE s,n FROM faculty AS s INNER JOIN login AS n ON s.fl_id=n.l_id WHERE s.fl_id=$fl_id";
 //var_dump($query);
	// $query="DELETE FROM login,registration using login INNER JOIN registration INNER JOIN astrologer WHERE login.lo_id=registration.lo_id AND registration.lo_id=astrologer.lo_id";
	$result=$con->query($query);
	if($result)
	{
		header('Location:viewfaculty.php');
	}
}
?>