 <?php
include 'login_config.php';
session_start();
$lo_id=$_POST["lo_id"];
$lo_no=$_POST["lo_no"];
$sem=$_SESSION['sem'];
$lo_statement=$_POST['lo_statement'];
$bl=$_POST['bl'];
$wtg=$_POST['weightage'];
$pso=implode(', ',$_POST['pso']);
$pi=$_POST['pi_no'];
$term=$_SESSION['term'];
$course_id=$_SESSION['course_id'];
$trans_id=uniqid('sakec',true);

$sql="INSERT INTO `lo_list`(`trans_id`, `lo_id`, `course_id`, `lo_no`, `sem`, `lo_statement`, `bl_level`, `weightage`, `pso`, `pi_po`, `term`) VALUES ('$trans_id','$lo_id','$course_id','$lo_no','$sem','$lo_statement','$bl','$wtg','$pso','$pi','$term')";

// echo $sql;

if (mysqli_multi_query($conn, $sql))
{
	header("Location: lo_list.php?message=<div class='alert alert-success' role='alert'><strong><center>Saved Successfully</center></strong></div>"); 
	exit();
} 
else
{
	header("Location: lo_list.php?message=<div class='alert alert-danger' role='alert'><strong><center>Sorry please try again</center></strong></div>"); 
	exit();
}
?> 