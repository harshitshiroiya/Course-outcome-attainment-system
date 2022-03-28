 <?php
session_start();
$emp_code=$_SESSION["emp_code"];
$email=$_SESSION["email"];
include_once('db_connect.php');
$po_file_url="";
$qual_type=$_POST["qual_type"];
if(!empty($_POST["ug_course_type"]))
	$course=$_POST["ug_course_type"];
else if(!empty($_POST["pg_course_type"]))
	$course=$_POST["pg_course_type"];
else
	$course="";
$specialization=$_POST["specialization"];
$passing_month=$_POST["passing_month"];
//echo $app_type;
$target_dir = "qual_certies/";
$target_file="";
$doc_id=uniqid('sakec');
$target_file=$target_dir.$emp_code."_".$qual_type.".pdf";
	
//echo $target_file;
//$target_file = $target_dir . basename($_FILES["appointment_file"]["name"]);
//echo $target_file;
$uploadOk = 1;
$messege ="";
$pdfFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check file size
if ($_FILES["qual_file"]["size"] > 10000000) {
    $messege=$messege. " " ."Sorry, your file is too large. Size must be less that 5 MB."." ".$_FILES["po_file"]["size"];
    $uploadOk = 0;
}
// Allow certain file formats
if($pdfFileType != "pdf" && $pdfFileType != "PDF") {
   $messege=$messege. " " ."Sorry, only PDF files are allowed.".$pdfFileType;
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    $messege=$messege." "."Sorry, your file was not uploaded.";
	//header("Location: pre_dform.php?message=".$messege);
// if everything is ok, try to upload file
} else
{
	if (move_uploaded_file($_FILES["qual_file"]["tmp_name"], $target_file)) {
		   $po_file_url=$target_file;
		} else {
		   $messege=$messege." "."Sorry, there was an error uploading your file.";
			//header("Location: pre_dform.php?message=".$messege);
		}
	}

$sql = "INSERT INTO `qual_details`(`e_no`, `emailid`, `doc_id`, `qual_type`, `course`, `specialisation`, `passing_month`, `file_url`) VALUES ('$emp_code','$email','$doc_id','$qual_type','$course','$specialization','$passing_month','$po_file_url')";


//echo $sql;
if (mysqli_query($conn, $sql)) {
header("Location: qual_details.php"); /* Redirect browser */
exit();
} else {
	header("Location: qual_details.php?message=".$messege); /* Redirect browser */
	exit();
}





mysqli_close($conn);
?> 