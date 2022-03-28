<?php
include 'login_config.php';
session_start();
// $co_id=$_POST['co_id'];
$term=$_SESSION['term'];
$course_id=$_SESSION['course_id'];
$gap="";
$gap=$co=$action_taken=$date_month_year=$co=$po=null;

if(isset($_POST['gap']))
{
	$gap=$_POST['gap'];
	$gap.="`gap`";
} 
if(isset($_POST['action_taken']))
{
	$action_taken=$_POST['action_taken'];
	$gap.="`action_taken`";
} 
if(isset($_POST['date_month_year']))
{
	$date_month_year=$_POST['date_month_year'];
	$gap.="`date_month_year`";
}
if(isset($_POST['name_designation']))
{
	$name_designation=$_POST['name_designation'];
	$gap.=",`name_designation`";
}

if(isset($_POST['p_of_students']))
{
	$p_of_students=$_POST['p_of_students'];
	$gap.="`p_of_students`";
} 

if(isset($_POST['relevance_po_pso']))
{
	$relevance_po_pso=$_POST['relevance_po_pso'];
	$gap.="`relevance_po_pso`";
} 

$co_id_array=array();
for($a=0;$a<sizeof($co);$a++){
$qry="SELECT * FROM `co_list` WHERE `co_no` LIKE '$co[$a]' AND `course_id` LIKE '$course_id'";
if($co_res=mysqli_query($conn, $qry)){
	$row=mysqli_fetch_assoc($co_res);
	$co_id_array[] =$row['co_id'];	
}
}

// echo '<br>';
// echo implode(',',$gap);
// echo '<br>';
// echo implode(',',$action_taken);
// $sql.="INSERT INTO `gap_identifiacation`( `course_id`,`co_id`,`sr_no`,`module_no`,`action_taken`,`date_month_year`,`co_no`,`po`,`term`) VALUES('$course_id','$co_id_array[$key]',$key+1,'$gap[$key]','$action_taken[$key]','$date_month_year[$key]','$co[$key]','$po[$key]','$term');";
for($key=0;$key<2;$key++) 
{
    // echo '<br>';
    // echo "INSERT INTO `date_month_year` VALUES('$course_id','$co_id_array[$key]',$key+1,'$gap[$key]','$action_taken[$key]','$date_month_year[$key]','$co[$key]','$po[$key]','$term');";
	$sql.="INSERT INTO `gap_action` VALUES('$course_id',$key+1,'$gap[$key]','$action_taken[$key]','$date_month_year[$key]','$name_designation[$key]','$p_of_students[$key]','$relevance_po_pso[$key]','$term');";
}

if (mysqli_multi_query($conn, $sql))
{
	header("Location: gap_action.php?message=<div class='alert alert-success' role='alert'><strong><center>Saved Successfully</center></strong></div>"); 
	exit();
} 
else
{
	header("Location: gap_action.php?message=<div class='alert alert-danger' role='alert'><strong><center>Sorry please try again</center></strong></div>"); 
	exit();
}
?> 