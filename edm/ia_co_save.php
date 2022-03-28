 <?php
include 'login_config.php';
session_start();
$co_id=$_POST['co_id'];
$term=$_SESSION['term'];
$course_id=$_SESSION['course_id'];

$IA="";
$IA1_1a=$IA1_1b=$IA1_1c=$IA1_1d=$IA1_1e=$IA1_1f=$IA1_2a=$IA1_2b=$IA1_3a=$IA1_3b=null;
$IA2_1a=$IA2_1b=$IA2_1c=$IA2_1d=$IA2_1e=$IA2_1f=$IA2_2a=$IA2_2b=$IA2_3a=$IA2_3b=null;

if(isset($_POST['IA1_1a']))
{
	$IA1_1a=$_POST['IA1_1a'];
	$IA.="`IA1_1a`";
} 
if(isset($_POST['IA1_1b']))
{
	$IA1_1b=$_POST['IA1_1b'];
	$IA.=",`IA1_1b`";
}
if(isset($_POST['IA1_1c']))
{
	$IA1_1c=$_POST['IA1_1c'];
	$IA.=",`IA1_1c`";
}
if(isset($_POST['IA1_1d']))
{
	$IA1_1d=$_POST['IA1_1d'];
	$IA.=",`IA1_1d`";
}
if(isset($_POST['IA1_1e']))
{
	$IA1_1e=$_POST['IA1_1e'];
	$IA.=",`IA1_1e`";
}
if(isset($_POST['IA1_1f']))
{
	$IA1_1f=$_POST['IA1_1f'];
	$IA.=",`IA1_1f`";
}
if(isset($_POST['IA1_2a']))
{
	$IA1_2a=$_POST['IA1_2a'];
	$IA.=",`IA1_2a`";
}
if(isset($_POST['IA1_2b']))
{
	$IA1_2b=$_POST['IA1_2b'];
	$IA.=",`IA1_2b`";
}
if(isset($_POST['IA1_3a']))
{
	$IA1_3a=$_POST['IA1_3a'];
	$IA.=",`IA1_3a`";
}
if(isset($_POST['IA1_3b']))
{
	$IA1_3b=$_POST['IA1_3b'];
	$IA.=",`IA1_3b`";
}



if(isset($_POST['IA2_1a']))
{
	$IA2_1a=$_POST['IA2_1a'];
	$IA.="`IA2_1a`";
} 
if(isset($_POST['IA2_1b']))
{
	$IA2_1b=$_POST['IA2_1b'];
	$IA.=",`IA2_1b`";
}
if(isset($_POST['IA2_1c']))
{
	$IA2_1c=$_POST['IA2_1c'];
	$IA.=",`IA2_1c`";
}
if(isset($_POST['IA2_1d']))
{
	$IA2_1d=$_POST['IA2_1d'];
	$IA.=",`IA2_1d`";
}
if(isset($_POST['IA2_1e']))
{
	$IA2_1e=$_POST['IA2_1e'];
	$IA.=",`IA2_1e`";
}
if(isset($_POST['IA2_1f']))
{
	$IA2_1f=$_POST['IA2_1f'];
	$IA.=",`IA2_1f`";
}
if(isset($_POST['IA2_2a']))
{
	$IA2_2a=$_POST['IA2_2a'];
	$IA.=",`IA2_2a`";
}
if(isset($_POST['IA2_2b']))
{
	$IA2_2b=$_POST['IA2_2b'];
	$IA.=",`IA2_2b`";
}
if(isset($_POST['IA2_3a']))
{
	$IA2_3a=$_POST['IA2_3a'];
	$IA.=",`IA2_3a`";
}
if(isset($_POST['IA2_3b']))
{
	$IA2_3b=$_POST['IA2_3b'];
	$IA.=",`IA2_3b`";
}

$sql="";
foreach( $co_id as $key => $n ) 
{
		$sql.="INSERT INTO `ia_co`( `course_id`,`co_id`,`IA1_1a`,`IA1_1b`,`IA1_1c`,`IA1_1d`,`IA1_1e`,`IA1_1f`, `IA1_2a`, `IA1_2b`, `IA1_3a`,`IA1_3b`,`IA2_1a`,`IA2_1b`,`IA2_1c`,`IA2_1d`,`IA2_1e`,`IA2_1f`, `IA2_2a`, `IA2_2b`, `IA2_3a`,`IA2_3b`, `total`,`term`) VALUES('$course_id','$n','$IA1_1a[$key]','$IA1_1b[$key]','$IA1_1c[$key]','$IA1_1d[$key]','$IA1_1e[$key]','$IA1_1f[$key]','$IA1_2a[$key]','$IA1_2b[$key]', '$IA1_3a[$key]','$IA1_3b[$key]','$IA2_1a[$key]','$IA2_1b[$key]','$IA2_1c[$key]','$IA2_1d[$key]','$IA2_1e[$key]','$IA2_1f[$key]','$IA2_2a[$key]','$IA2_2b[$key]', '$IA2_3a[$key]','$IA2_3b[$key]',100,'$term');";

		// echo ("INSERT INTO `ia_am`( `course_id`,`co_id`,`IA1_1a`,`IA1_1b`,`IA1_1c`,`IA1_1d`,`IA1_1e`,`IA1_1f`, `IA1_2a`, `IA1_2b`, `IA1_3a`,`IA1_3b`,`IA2_1a`,`IA2_1b`,`IA2_1c`,`IA2_1d`,`IA2_1e`,`IA2_1f`, `IA2_2a`, `IA2_2b`, `IA2_3a`,`IA2_3b`, `term`) VALUES('$course_id','$n','$IA1_1a[$key]','$IA1_1b[$key]','$IA1_1c[$key]','$IA1_1d[$key]','$IA1_1e[$key]','$IA1_1f[$key]','$IA1_2a[$key]','$IA1_2b[$key]', '$IA1_3a[$key]','$IA1_3b[$key]','$IA2_1a[$key]','$IA2_1b[$key]','$IA2_1c[$key]','$IA2_1d[$key]','$IA2_1e[$key]','$IA2_1f[$key]','$IA2_2a[$key]','$IA2_2b[$key]', '$IA2_3a[$key]','$IA2_3b[$key]','$term');");
}

if (mysqli_multi_query($conn, $sql))
{
	header("Location: ia_mapping.php?message=<div class='alert alert-success' role='alert'><strong><center>Saved Successfully</center></strong></div>"); 
	exit();
} 
else
{
	header("Location: ia_mapping.php?message=<div class='alert alert-danger' role='alert'><strong><center>Sorry please try again</center></strong></div>"); 
	exit();
}
?> 