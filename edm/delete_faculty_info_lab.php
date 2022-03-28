<?php
session_start();
$trans_id=$_GET["trans_id"];
include 'login_config.php';

$sql = "DELETE FROM `faculty_info_lab` WHERE `trans_id`='$trans_id'";
mysqli_query($conn, $sql);

$course_id=$_SESSION['course_id'];
$term=$_SESSION['term'];
$course_qry="SELECT * FROM `faculty_info_lab` INNER JOIN `users` ON `users`.`e_no`=`faculty_info_lab`.`tchr_id` where `course_id`='$course_id' AND `term`='$term'";
$course_result = mysqli_query($conn,$course_qry);
if (mysqli_num_rows($course_result) > 0) 
{
	while($course_row = mysqli_fetch_assoc($course_result))
	{
		echo "<tr>";
		echo "<td>".$course_row['e_name']."</td>";
		echo "<td>".$course_row['class_code']."</td>";
		echo "<td>".$course_row['batch']."</td>";
		echo "<td>".$course_row['roll_no_from']."</td>";
		echo "<td>".$course_row['roll_no_to']."</td>";
		echo "<td><button class=\"btn btn-danger\" onclick=\"deleteCourseTchr('".$course_row['trans_id']."')\"><i class=\"fa fa-trash\"></i></button></td>";
		echo "</tr>";
	}
}
exit();

?>