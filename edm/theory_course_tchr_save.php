 <?php
include 'login_config.php';
session_start();
$term=$_SESSION['term'];
$course_tchr=$_POST['course_tchr'];
$course_class=$_POST['course_class'];
$tchr_email=$_POST['tchr_email'];
$tchr_mobile=$_POST['tchr_mobile'];
$tchr_ext=$_POST['tchr_ext'];

$course_id=$_SESSION['course_id'];
$trans_id=uniqid('sakec',true);

$sql="INSERT INTO `course_tchr`(`trans_id`, `course_id`, `tchr_id`, `class_code`, `emailid`, `mobile`, `ext`, `term`) VALUES ('$trans_id','$course_id','$course_tchr','$course_class','$tchr_email','$tchr_mobile','$tchr_ext','$term')";

//echo $sql;

if (mysqli_multi_query($conn, $sql))
{
	header("Location: theory_course_teacher_info.php?message=<div class='alert alert-success' role='alert'><strong><center>Saved Successfully</center></strong></div>"); 
	exit();
} 
else
{
	header("Location: theory_course_teacher_info.php?message=<div class='alert alert-danger' role='alert'><strong><center>Sorry please try again</center></strong></div>"); 
	exit();
}
?> 