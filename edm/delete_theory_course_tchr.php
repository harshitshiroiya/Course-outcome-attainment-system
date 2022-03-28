<?php
session_start();
$trans_id=$_GET["trans_id"];
include 'login_config.php';

$sql = "DELETE FROM `course_tchr` WHERE `trans_id`='$trans_id'";
mysqli_query($conn, $sql);

$course_id=$_SESSION['course_id'];
$term=$_SESSION['term'];
$course_qry="SELECT `course_tchr`.`trans_id`, `course_tchr`.`tchr_id`,`users`.`e_name`,`course_tchr`.`class_code`,`course_tchr`.`emailid`,`course_tchr`.`mobile`,`course_tchr`.`ext` FROM `course_tchr` INNER JOIN `users` ON `users`.`e_no`=`course_tchr`.`tchr_id` where `course_id`='$course_id' AND `term`='$term'";
$course_result = mysqli_query($conn,$course_qry);
if (mysqli_num_rows($course_result) > 0) 
{
	while($course_row = mysqli_fetch_assoc($course_result))
	{
		echo "<tr>";
		echo "<td>".$course_row['e_name']."</td>";
		echo "<td>".$course_row['class_code']."</td>";
		echo "<td>".$course_row['emailid']."</td>";
		echo "<td>".$course_row['mobile']."</td>";
		echo "<td>".$course_row['ext']."</td>";
		echo "<td><button class=\"btn btn-danger\" onclick=\"deleteCourseTchr('".$course_row['trans_id']."')\"><i class=\"fa fa-trash\"></i></button></td>";
		echo "</tr>";
	}
}
exit();

?>