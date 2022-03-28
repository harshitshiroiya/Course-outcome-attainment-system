<?php
include 'login_config.php';
session_start();
// $co_id=$_POST['co_id'];
$term=$_SESSION['term'];
$course_id=$_SESSION['course_id'];
$gap="";
$category=$details=$exp_no=$reason=$no_hours=$lo=$po=null;


if(isset($_POST['category']))
{
	$category=$_POST['category'];
	$gap.="`category`";
}
if(isset($_POST['details']))
{
	$details=$_POST['details'];
	$gap.="`details`";
}
if(isset($_POST['exp_no']))
{
	$exp_no=$_POST['exp_no'];
	$gap.="`exp_no`";
}
if(isset($_POST['reason']))
{
	$reason=$_POST['reason'];
	$gap.="`reason`";
} 
if(isset($_POST['no_hours']))
{
	$no_hours=$_POST['no_hours'];
	$gap.="`no_hours`";
} 
if(isset($_POST['lo']))
{
	$lo=$_POST['lo'];
	$gap.=",`lo`";
}

if(isset($_POST['po']))
{
	$po=$_POST['po'];
	$gap.="`po`";
} 

$lo_id_array=array();
for($a=0;$a<sizeof($lo);$a++){
$qry="SELECT * FROM `lo_list` WHERE `lo_no` LIKE '$lo[$a]' AND `course_id` LIKE '$course_id'";
if($lo_res=mysqli_query($conn, $qry)){
	$row=mysqli_fetch_assoc($lo_res);
	$lo_id_array[] =$row['lo_id'];	
}
}

// echo '<br>';
// echo implode(',',$syll_module);
// echo '<br>';
// echo implode(',',$module_name);
// $sql.="INSERT INTO `gap_identifiacation`( `course_id`,`co_id`,`sr_no`,`module_no`,`module_name`,`gap_identification`,`co_no`,`po`,`term`) VALUES('$course_id','$co_id_array[$key]',$key+1,'$syll_module[$key]','$module_name[$key]','$gap_identification[$key]','$co[$key]','$po[$key]','$term');";
for($key=0;$key<5;$key++) 
{
    // $sql.="INSERT INTO `information_commtechnology` VALUES('$course_id','$co_id_array[$key]',$key+1,'$category[$key]','$details[$key]','$syll_module[$key]','$no_hours[$key]','$co[$key]','$po[$key]','$term');";
    $sql.="INSERT INTO `facility_mapping_lo` VALUES('$course_id','$lo_id_array[$key]',$key+1,'$category[$key]','$details[$key]','$exp_no[$key]','$reason[$key]','$no_hours[$key]','$lo[$key]','$po[$key]','$term');";
}

if (mysqli_multi_query($conn, $sql))
{
	header("Location: facility_mapping_lo.php?message=<div class='alert alert-success' role='alert'><strong><center>Saved Successfully</center></strong></div>"); 
	exit();
} 
else
{
	header("Location: facility_mapping_lo.php?message=<div class='alert alert-danger' role='alert'><strong><center>Sorry please try again</center></strong></div>"); 
	exit();
}
?> 