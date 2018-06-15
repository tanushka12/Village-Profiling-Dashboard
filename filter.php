<?php
require "connection.php";

if(isset($_POST['pop_lower'] && isset($_POST['pop_higher']) && isset($_POST['caste']) && isset($_POST['road']) && $_POST['districts']) && $_POST['subdistricts'])
{
	$district=$_POST['districts'];
	$subdistrict=$_POST['subdistricts'];
	$pop_lower=$_POST['pop_lower'];
	$pop_higher=$_POST['pop_higher'];
	$caste=$_POST['caste'];
	$road=$_POST['road'];
	if(!empty($pop_lower) && !empty($pop_higher) && !empty($caste) && !empty($road) && !empty($district) && !empty($subdistrict))
	{
			mysqli_select_db($con,"grasshoppers");
			$sql="SELECT DISTINCT `district` FROM `city_list` WHERE `state` = '".$q."'";
			$result = mysqli_query($con,$sql);

			if($result==false)
			{
			    echo "No Results";
			}
			
			while($row = mysqli_fetch_array($result)) {
			    
			   // echo "<tr>";
				$district=$row['district'];
			    echo "<option value='$district' >" . $district . "</option>";
	}
	else
	{
		echo "Data not found!";
	}
}
?>