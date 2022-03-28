<?php
session_start();
$trans_id=$_GET["trans_id"];
//$trans_id="sakec5f1d7a590464a3.23947694";
include 'login_config.php';
$pso=array();

$branch_code=$_SESSION['branch_code'];
$course_id=$_SESSION['course_id'];
$lo_qry="SELECT * FROM `lo_list` WHERE `trans_id`='$trans_id'";
$pso_qry="SELECT * FROM `pso` WHERE `branch_id`=$branch_code";
$pso_result = mysqli_query($conn,$pso_qry);
if (mysqli_num_rows($pso_result) > 0) 
{
	while($pso_row = mysqli_fetch_assoc($pso_result))
	{
		$pso[]=$pso_row;
	}
}


$lo_result = mysqli_query($conn,$lo_qry);
if (mysqli_num_rows($lo_result) > 0) 
{
	while($lo_row = mysqli_fetch_assoc($lo_result))
	{
		echo "<tr>";
		echo "<td><input type='hidden' name='trans_id' value='".$lo_row['trans_id']."'><div class='form-group'><div class='col-md-12'><div class='input-group'><input type='text' name='lo_no' class='form-control1' value='".$lo_row['lo_no']."' readonly></div></div></div></td>";
		echo "<td><div class='form-group'><div class='col-md-10'><div class='input-group'><input type='text' name='lo_id' class='form-control1' value='".$lo_row['lo_id']."' readonly></div></div></div></td>";
		echo "<td><div class='form-group'><div class='col-md-12'><div class='input-group'><textarea name='lo_stmt' id='txtarea1' cols='50' rows='4' class='form-control1' required='required'>".$lo_row['lo_stmt']."</textarea></div></div></div></td>";
		echo "<td><div class='form-group'><div class='col-md-8'><select name='bl' class='form-control1' required='required'><option value=''>Select</option><option value='1' ".(($lo_row['bl_level']==1)?'selected':'').">BL1</option><option value='2' ".(($lo_row['bl_level']==2)?'selected':'').">BL2</option><option value='3' ".(($lo_row['bl_level']==3)?'selected':'').">BL3</option><option value='4' ".(($lo_row['bl_level']==4)?'selected':'').">BL4</option><option value='5' ".(($lo_row['bl_level']==5)?'selected':'').">BL5</option><option value='6' ".(($lo_row['bl_level']==6)?'selected':'').">BL6</option></td>";
		echo "<td><div class='form-group'><div class='col-md-10'><div class='input-group'><input type='number' name='weightage' class='form-control1' min='0.01' max='100' step='0.01' required='required' value='".$lo_row['weightage']."'></div></div></div></td>";
		
		echo "<td><div class='form-group1 col-md-12 col-lg-12 col-sm-12'><select id='pso_select' name='pso[]' class='selectpicker form-control' multiple required='required'>";
		for ($a = 0; $a < sizeof($pso); $a++)
		{
			$pso_no=$a+1;
			echo "<option value='".$pso[$a]['pso_id']."'".((strpos($lo_row['pso'],$pso[$a]['pso_id'])!==false)?'selected':'').">PSO".$pso_no."</option>";
		}
		echo "</select></div></td>";
		echo "<td><div class='form-group'><div class='col-md-12'><div class='input-group'><textarea name='pi_no' id='txtarea1' cols='50' rows='4' class='form-control1' required='required'>".$lo_row['pi_po']."</textarea></div></div></div></td>";
		echo "</tr>";
	}
}
exit();

?>
