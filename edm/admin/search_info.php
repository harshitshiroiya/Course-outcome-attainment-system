<?php
session_start();
require_once("db_connect.php");
$e_id=$_POST["e_id"];
//echo $e_id;
$qry="SELECT * FROM `emp` WHERE e_no='$e_id'";
//echo $qry;
$result = mysqli_query($conn,$qry);
if(mysqli_num_rows($result)>0)
{
	$_SESSION['e_id']=$e_id;
	header("Location: personal_info.php");
}
else
{
	$message=urlencode("<center>Employee not found. Please check Employee ID.</center>");
	header("Location: update_table.php?message=".$message);
	exit;
}
?>