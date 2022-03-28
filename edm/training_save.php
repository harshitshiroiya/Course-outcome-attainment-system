 <?php
session_start();
$emp_code=$_SESSION["emp_code"];
$email=$_SESSION["email"];
include_once('db_connect.php');
$po_file_url="";
$course_type=$_POST["course_type"];
$course_title=$_POST["course_title"];
$duration=$_POST["duration"];
$from_date=$_POST["from_date"];
$to_date=$_POST["to_date"];
//echo $app_type;
$target_dir = "training_certies/";
$target_file="";

	$time=strtotime($from_date);
	$month=date("F",$time);
	$year=date("Y",$time);
	$target_file=$target_dir.$emp_code."_".$course_type."_".$month.$year.".pdf";

$doc_id=uniqid('sakec');	
echo $target_file;
//$target_file = $target_dir . basename($_FILES["appointment_file"]["name"]);
//echo $target_file;
$uploadOk = 1;
$messege ="";
$pdfFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check file size
if ($_FILES["certi_file"]["size"] > 10000000) {
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
	if (move_uploaded_file($_FILES["certi_file"]["tmp_name"], $target_file)) {
		   $po_file_url=$target_file;
		} else {
		   $messege=$messege." "."Sorry, there was an error uploading your file.";
			//header("Location: pre_dform.php?message=".$messege);
		}
	}

//echo $po_file_url;
$sql = "INSERT INTO `training_info`(`e_no`, `emailid`, `doc_id`, `course_type`, `title`, `duration`, `from_date`, `to_date`, `certificate_url`) VALUES ('$emp_code','$email','$doc_id','$course_type','$course_title','$duration','$from_date','$to_date','$po_file_url')";

echo $sql;
if (mysqli_query($conn, $sql)) {
header("Location: training_details.php"); /* Redirect browser */
exit();
} else {
	header("Location: training_details.php?message=".$messege); /* Redirect browser */
	exit();
}






mysqli_close($conn);
?> 