<?php
include 'login_config.php';
session_start();
// $co_id=$_POST['co_id'];
$term=$_SESSION['term'];
$course_id=$_SESSION['course_id'];
$gap="";
$syll_module=$co=$module_name=$gap_identification=$lo=$po=null;

if(isset($_POST['syll_module']))
{
	$syll_module=$_POST['syll_module'];
	$gap.="`syll_module`";
} 
if(isset($_POST['module_name']))
{
	$module_name=$_POST['module_name'];
	$gap.="`module_name`";
} 
if(isset($_POST['gap_identification']))
{
	$gap_identification=$_POST['gap_identification'];
	$gap.="`gap_identification`";
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

$co_id_array=array();
for($a=0;$a<sizeof($lo);$a++){
$qry="SELECT * FROM `lo_list` WHERE `lo_no` LIKE '$lo[$a]' AND `course_id` LIKE '$course_id'";
if($co_res=mysqli_query($conn, $qry)){
	$row=mysqli_fetch_assoc($co_res);
	$co_id_array[] =$row['lo_id'];	
}
}

// echo '<br>';
// echo implode(',',$syll_module);
// echo '<br>';
// echo implode(',',$module_name);
// $sql.="INSERT INTO `gap_identifiacation`( `course_id`,`co_id`,`sr_no`,`module_no`,`module_name`,`gap_identification`,`co_no`,`po`,`term`) VALUES('$course_id','$co_id_array[$key]',$key+1,'$syll_module[$key]','$module_name[$key]','$gap_identification[$key]','$co[$key]','$po[$key]','$term');";
for($key=0;$key<2;$key++) 
{
    // echo '<br>';
    // echo "INSERT INTO `gap_identification` VALUES('$course_id','$co_id_array[$key]',$key+1,'$syll_module[$key]','$module_name[$key]','$gap_identification[$key]','$co[$key]','$po[$key]','$term');";
	$sql.="INSERT INTO `gap_identification_lo` VALUES('$course_id','$co_id_array[$key]',$key+1,'$syll_module[$key]','$module_name[$key]','$gap_identification[$key]','$lo[$key]','$po[$key]','$term');";
}

if (mysqli_multi_query($conn, $sql))
{
	header("Location: gap_identification_lo.php?message=<div class='alert alert-success' role='alert'><strong><center>Saved Successfully</center></strong></div>"); 
	exit();
} 
else
{
	header("Location: gap_identification_lo.php?message=<div class='alert alert-danger' role='alert'><strong><center>Sorry please try again</center></strong></div>"); 
	exit();
}
?> 