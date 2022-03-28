<?php
session_start();
$trans_id=$_GET["trans_id"];
//$trans_id="sakec5f1d7a590464a3.23947694";
include 'login_config.php';
$pso=array();

$branch_code=$_SESSION['branch_code'];
$course_id=$_SESSION['course_id'];
$co_qry="SELECT * FROM `co_list` WHERE `trans_id`='$trans_id'";
$pso_qry="SELECT * FROM `pso` WHERE `branch_id`=$branch_code";
$pso_result = mysqli_query($conn,$pso_qry);
if (mysqli_num_rows($pso_result) > 0) 
{
	while($pso_row = mysqli_fetch_assoc($pso_result))
	{
		$pso[]=$pso_row;
	}
}


$co_result = mysqli_query($conn,$co_qry);
if (mysqli_num_rows($co_result) > 0) 
{
	while($co_row = mysqli_fetch_assoc($co_result))
	{
		echo "<tr>";
		echo "<td><input type='hidden' name='trans_id' value='".$co_row['trans_id']."'><div class='form-group'><div class='col-md-12'><div class='input-group'><input type='text' name='co_no' class='form-control1' value='".$co_row['co_no']."' readonly></div></div></div></td>";
		echo "<td><div class='form-group'><div class='col-md-10'><div class='input-group'><input type='text' name='co_id' class='form-control1' value='".$co_row['co_id']."' readonly></div></div></div></td>";
		echo "<td><div class='form-group'><div class='col-md-12'><div class='input-group'><textarea name='co_stmt' id='txtarea1' cols='50' rows='4' class='form-control1' required='required'>".$co_row['co_stmt']."</textarea></div></div></div></td>";
		echo "<td><div class='form-group'><div class='col-md-8'><select name='bl' class='form-control1' required='required'><option value=''>Select</option><option value='1' ".(($co_row['bl_level']==1)?'selected':'').">BL1</option><option value='2' ".(($co_row['bl_level']==2)?'selected':'').">BL2</option><option value='3' ".(($co_row['bl_level']==3)?'selected':'').">BL3</option><option value='4' ".(($co_row['bl_level']==4)?'selected':'').">BL4</option><option value='5' ".(($co_row['bl_level']==5)?'selected':'').">BL5</option><option value='6' ".(($co_row['bl_level']==6)?'selected':'').">BL6</option></td>";
		echo "<td><div class='form-group'><div class='col-md-10'><div class='input-group'><input type='number' name='weightage' class='form-control1' min='0.01' max='100' step='0.01' required='required' value='".$co_row['weightage']."'></div></div></div></td>";
		echo "<td><div class='form-group'><div class='col-md-10'><div class='input-group'><input type='number' name='syll_module' class='form-control1' min='1' max='20' step='1' required='required' value='".$co_row['syll_module']."'></div></div></div></td>";
		echo "<td><div class='form-group1 col-md-12 col-lg-12 col-sm-12'><select id='pso_select' name='pso[]' class='selectpicker form-control' multiple required='required'>";
		for ($a = 0; $a < sizeof($pso); $a++)
		{
			$pso_no=$a+1;
			echo "<option value='".$pso[$a]['pso_id']."'".((strpos($co_row['pso'],$pso[$a]['pso_id'])!==false)?'selected':'').">PSO".$pso_no."</option>";
		}
		echo "</select></div></td>";
		echo "<td><div class='form-group'><div class='col-md-12'><div class='input-group'><textarea name='pi_no' id='txtarea1' cols='50' rows='4' class='form-control1' required='required'>".$co_row['pi_po']."</textarea></div></div></div></td>";
		echo "</tr>";
	}
}
exit();

?>
