
<?php
session_start();
include("db_connect.php");
if(isset($_GET['ul_id']))
{
	$ul_id=$_GET['ul_id'];
	 

 $query="DELETE s,n FROM user AS s INNER JOIN login AS n ON s.ul_id=n.l_id WHERE s.ul_id=$ul_id";
 //var_dump($query);
	// $query="DELETE FROM login,registration using login INNER JOIN registration INNER JOIN astrologer WHERE login.lo_id=registration.lo_id AND registration.lo_id=astrologer.lo_id";
	$result=$con->query($query);
	if($result)
	{
		header('Location:login.php');
	}
}
?>