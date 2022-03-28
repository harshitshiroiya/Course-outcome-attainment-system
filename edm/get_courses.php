<?php
include 'login_config.php';
$sem=$_GET['sem'];
session_start();
$branch_code=$_SESSION['branch_code'];
$term=$_SESSION['term'];
$dept=$_SESSION["dept"];
$faculty=array();
$faculty_qry="Select `e_no`,`e_name` from `users` where dept='INFORMATION TECHNOLOGY' and `etype`='teaching'";

$faculty_result = mysqli_query($conn,$faculty_qry);
if (mysqli_num_rows($faculty_result) > 0) 
{
	while($faculty_row = mysqli_fetch_assoc($faculty_result))
	{
		$faculty[]=$faculty_row;
	}
}
/*
for ($a = 0; $a < sizeof($faculty); $a++)
{
	  echo $faculty[$a]['e_no']." ".$faculty[$a]['e_name']."<br>";
}*/
$qry="Select * from courses where term='$term' and `branch_id`=$branch_code and `sem`=$sem";
$result = mysqli_query($conn,$qry);
if (mysqli_num_rows($result) > 0) 
{
	while($row = mysqli_fetch_assoc($result))
	{
		$course_id=$row['course_id'];
		echo "<tr>";
		echo "<td>";
		echo "<div class='form-group'><div class='col-md-8'><div class='input-group'><input type='text' name='course_id[]' class='form-control1' value='".$course_id."' readonly='readonly'></div></div></div>";
		echo "</td>";
		echo "<td>".$row['course_name']."</td>";
		echo "<td>".$row['sem']."</td>";
		echo "<td><div class='col-md-10'><select name='course_ic[]' id='".$course_id."ic' class='form-control1' required='required'><option value=''>Select</option>";
		for ($a = 0; $a < sizeof($faculty); $a++)
		{
			echo "<option value='".$faculty[$a]['e_no']."'>".$faculty[$a]['e_name']."</option>";
		}
		echo "</select></div></td>";
		echo "<td><div class='checkbox-inline1'><input type='checkbox' id='".$course_id."' name='not_selected[]' onchange='removeRequired(this.id)'></div></td>";
		echo "</tr>";
	}
	
}
exit();

?>