<?php
include 'login_config.php';
session_start();
// $co_id=$_POST['co_id'];
$term=$_SESSION['term'];
$course_id=$_SESSION['course_id'];
$exit="";
$questions=$co=null;

if(isset($_POST['questions']))
{
	$questions=$_POST['questions'];
	$exit.="`questions`";
} 

if(isset($_POST['co']))
{
	$co=$_POST['co'];
	$exit.=",`co`";
}

// echo(sizeof($pso));
// echo $IA1;
// echo '<br>';
// echo implode(',',$IA1_q);
// echo '<br>';
// echo implode(',',$marks);
// echo '<br>'; 
// echo implode(',',$b);
// echo '<br>';
// echo implode(',',$co);
// echo '<br>';
 
// echo '<br>';
// echo implode(',',$pi_no);

$co_id_array=array();
for($a=0;$a<sizeof($co);$a++){
$qry="SELECT * FROM `co_list` WHERE `co_no` LIKE '$co[$a]' AND `course_id` LIKE '$course_id'";
if($co_res=mysqli_query($conn, $qry)){
	$row=mysqli_fetch_assoc($co_res);
	$co_id_array[] =$row['co_id'];	
}
}
// echo '<br>';
// echo '<br>';
// echo implode(',',$questions);

for($key=0;$key<12;$key++) 
{
		$sql.="INSERT INTO `course_exit`( `course_id`,`question_no`, `questions`, `co_no`,`co_id`, `term`) VALUES('$course_id',$key+1,'$questions[$key]','$co[$key]','$co_id_array[$key]','$term');";
}

if (mysqli_multi_query($conn, $sql))
{
	header("Location: co_exit.php?message=<div class='alert alert-success' role='alert'><strong><center>Saved Successfully</center></strong></div>"); 
	exit();
} 
else
{
	header("Location: co_exit.php?message=<div class='alert alert-danger' role='alert'><strong><center>Sorry please try again</center></strong></div>"); 
	exit();
}
?> 