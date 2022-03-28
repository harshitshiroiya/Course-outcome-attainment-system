 <?php
include 'login_config.php';
session_start();
$lo_id=$_POST['lo_id'];
$term=$_SESSION['term'];
$course_id=$_SESSION['course_id'];
$am="";
$am1=$am2=$am3=$am4=$am5=$am6=$am7=$am8=$am9=null;
if(isset($_POST['am1']))
{
	$am1=$_POST['am1'];
	$am.="`am1`";
} 
if(isset($_POST['am2']))
{
	$am2=$_POST['am2'];
	$am.=",`am2`";
}
if(isset($_POST['am3']))
{
	$am3=$_POST['am3'];
	$am.=",`am3`";
}
if(isset($_POST['am4']))
{
	$am4=$_POST['am4'];
	$am.=",`am4`";
}
if(isset($_POST['am5']))
{
	$am5=$_POST['am5'];
	$am.=",`am5`";
}
if(isset($_POST['am6']))
{
	$am6=$_POST['am6'];
	$am.=",`am6`";
}
if(isset($_POST['am7']))
{
	$am7=$_POST['am7'];
	$am.=",`am7`";
}
if(isset($_POST['am8']))
{
	$am8=$_POST['am8'];
	$am.=",`am8`";
}
if(isset($_POST['am9']))
{
	$am9=$_POST['am9'];
	$am.=",`am9`";
}

//echo $am;


$sql="";
foreach( $lo_id as $key => $n ) 
{
        $sql.="UPDATE `lo_am` SET `am1`='$am1[$key]',`am2`='$am2[$key]',`am3`='$am3[$key]',`am4`='$am4[$key]',`am5`='$am5[$key]',`am6`='$am6[$key]',`am7`='$am7[$key]',`am8`='$am8[$key]',`am9`='$am9[$key]' WHERE `lo_id`='$n';";
}
//echo $sql;
if (mysqli_multi_query($conn, $sql))
{
	header("Location: lo_am.php?message=<div class='alert alert-success' role='alert'><strong><center>Updated Successfully</center></strong></div>"); 
	exit();
} 
else
{
	header("Location: lo_am.php?message=<div class='alert alert-danger' role='alert'><strong><center>Sorry please try again</center></strong></div>"); 
	exit();
}
?> 