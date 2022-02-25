<?php
$server="localhost";
$user_name="root";
$password="";
$data_base="hospitium";

$con=new mysqli($server,$user_name,$password,$data_base);
if($con->connect_error)
{
	die("failed".$con->connect_server);
}
?>