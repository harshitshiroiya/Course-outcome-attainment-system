<?php
session_start();
$trans_id=$_POST["trans_id"];
$sem=$_SESSION['sem'];
$lo_stmnt=$_POST['lo_stmt'];
$bl=$_POST['bl'];
$wtg=$_POST['weightage'];

$pso=implode(', ',$_POST['pso']);
$pi=$_POST['pi_no'];
$term=$_SESSION['term'];
$course_id=$_SESSION['course_id'];
include 'login_config.php';

$sql = "UPDATE `lo_list` SET `lo_stmt`='$lo_stmnt',`bl_level`='$bl',`weightage`='$wtg',`syll_module`='$syl',`pso`='$pso',`pi_po`='$pi' WHERE `trans_id`='$trans_id'";

//echo $sql;

if (mysqli_query($conn, $sql))
{
	header("Location: lo_list.php?message=<div class='alert alert-success' role='alert'><strong><center>Saved Successfully</center></strong></div>"); 
	exit();
} 
else
{
	header("Location: lo_list.php?message=<div class='alert alert-danger' role='alert'><strong><center>Sorry please try again</center></strong></div>"); 
	exit();
}
exit();

?>