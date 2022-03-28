 <?php
include 'login_config.php';
session_start();
$courses=$_POST['course_id'];
$courseic=$_POST['course_ic'];
$term=$_SESSION['term'];
$sem=$_POST['sem'];
$sql="";
foreach( $courses as $key => $n ) 
{
	if($courseic[$key]!="")
	{
		$sql.="INSERT INTO `course_ic`(`course_id`, `sem`, `course_ic`, `term`) VALUE('$n','$sem','$courseic[$key]','$term');";
	}
}
if (mysqli_multi_query($conn, $sql))
{
	header("Location: define_coursesic.php?message=<div class='alert alert-success' role='alert'><strong><center>Saved Successfully</center></strong></div>"); 
	exit();
} 
else
{
	header("Location: define_coursesic.php?message=<div class='alert alert-danger' role='alert'><strong><center>Sorry please try again</center></strong></div>"); 
	exit();
}
?> 