<?php
session_start();
$trans_id=$_POST["trans_id"];
$sem=$_SESSION['sem'];
$co_stmnt=$_POST['co_stmt'];
$bl=$_POST['bl'];
$wtg=$_POST['weightage'];
$syl=$_POST['syll_module'];
$pso=implode(', ',$_POST['pso']);
$pi=$_POST['pi_no'];
$term=$_SESSION['term'];
$course_id=$_SESSION['course_id'];
include 'login_config.php';

$sql = "UPDATE `co_list` SET `co_stmt`='$co_stmnt',`bl_level`='$bl',`weightage`='$wtg',`syll_module`='$syl',`pso`='$pso',`pi_po`='$pi' WHERE `trans_id`='$trans_id'";

//echo $sql;

if (mysqli_query($conn, $sql))
{
	header("Location: co_list.php?message=<div class='alert alert-success' role='alert'><strong><center>Saved Successfully</center></strong></div>"); 
	exit();
} 
else
{
	header("Location: co_list.php?message=<div class='alert alert-danger' role='alert'><strong><center>Sorry please try again</center></strong></div>"); 
	exit();
}
exit();

?>