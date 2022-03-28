 <?php
include 'login_config.php';
session_start();
$co_id=$_POST["co_id"];
$co_no=$_POST["co_no"];
$sem=$_SESSION['sem'];
$co_stmnt=$_POST['co_stmt'];
$bl=$_POST['bl'];
$wtg=$_POST['weightage'];
$syl=$_POST['syll_module'];
$pso=implode(', ',$_POST['pso']);
$pi=$_POST['pi_no'];
$term=$_SESSION['term'];
$course_id=$_SESSION['course_id'];
$trans_id=uniqid('sakec',true);

$sql="INSERT INTO `co_list`(`trans_id`, `co_id`, `course_id`, `co_no`, `sem`, `co_stmt`, `bl_level`, `weightage`, `syll_module`, `pso`, `pi_po`, `term`) VALUES ('$trans_id','$co_id','$course_id','$co_no','$sem','$co_stmnt','$bl','$wtg','$syl','$pso','$pi','$term')";

//echo $sql;

if (mysqli_multi_query($conn, $sql))
{
	header("Location: co_list.php?message=<div class='alert alert-success' role='alert'><strong><center>Saved Successfully</center></strong></div>"); 
	exit();
} 
else
{
	header("Location: co_list.php?message=<div class='alert alert-danger' role='alert'><strong><center>Sorry please try again</center></strong></div>"); 
	exit();
}
?> 