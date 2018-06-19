<?php
require "connection.php";
$district=strtolower($_POST['districts']);
$subdistrict=$_POST['subdistricts'];
$pop_lower=$_POST['pop_lower'];
$pop_higher=$_POST['pop_higher'];
$caste=$_POST['caste'];
$road=$_POST['road'];
//echo $district;
//echo $subdistrict;

if(isset($_POST['pop_lower']) && isset($_POST['pop_higher']) && isset($_POST['caste']) && isset($_POST['road']) && isset($_POST['districts']) && isset($_POST['subdistricts']) )
{
	
	if(!empty($pop_lower) && !empty($pop_higher) && !empty($caste) && !empty($road) && !empty($district) && !empty($subdistrict))
	{
			echo "<p>State: Maharashtra</p>";
			mysqli_select_db($con,"grasshoppers");
			$sql="SELECT `C7`,`C8`,`C32`,`C26`,`C29`,`C294`,`C296`,`C298`,`C300`,`C302`,`C304` FROM ".$district." WHERE (`C26` BETWEEN ".$pop_lower." AND ".$pop_higher." ) AND `C6`= '".$subdistrict."' ";
			$result = mysqli_query($con,$sql);

			if($result==false)
			{
			    echo "No Results";
			}
			
			echo "<p>District: ".$district."</p>";
			echo "<p>Taluka: ".$subdistrict."</p>";
			echo "<p>Population Range: ".$pop_lower." - ".$pop_higher."</p>";
			if($caste==1)
				echo "<p>Caste Distribution: Unicaste </p>";
			else
				echo "<p>Caste Distribution: Multicaste </p>";

			if($road==1)
				echo "<p>Road Connectivity By:  Pakka Road</p>";
			else
				echo "<p>Road Connectivity By:  Kaccha Road </p><br>";

			echo "<br> <br>";

			while($row = mysqli_fetch_array($result)) {
				$village_id=$row['C7'];
			    $village=trim($row['C8']);
			    $population_total=$row['C26'];
			    $population_ST=$row['C32'];
			    $population_SC=$row['C29'];
			    $state_highway=$row['C296'];
			    $national_highway=$row['C294'];
			    $major_district_road=$row['C298'];
			    $other_district_road=$row['C300'];
			    $pucca_road=$row['C302'];
			    $kuchha_road=$row['C304'];
			    echo "<table style='width:25%;' border='1'>";
			    echo "<tr>";
			    if($caste==1)
			    {
			    	if(( (($row['C32']/$row['C26'])*100)>=90 ||(($row['C29']/$row['C26'])*100)>=90 ))
			    	{
			    		if($road==1)
			    		{
			    			if($national_highway==1||$state_highway==1||$major_district_road==1||$other_district_road==1||$pucca_road==1)
			    			{
			    				echo "<td colspan='8'><a href='Generic_Report_Card.php?village_id=".$village_id."&district_name=".$district."'>".$village."</a></td>";
			    				echo "<td colspan='8'><a href='Generic_Report_Card.php'>".$population_total."</a></td>";
			    			}

			    		}
			    		else
			    		{
			    			if(($national_highway==2||$state_highway==2||$major_district_road==2||$other_district_road==2||$pucca_road==2) && $kuchha_road==1)
			    			{
			    				echo "<td colspan='8'><a href='Generic_Report_Card.php?village_id=".$village_id."&district_name=".$district."'>".$village."</a></td>";
			    				echo "<a href='Generic_Report_Card.php'><td colspan='8'>".$population_total."</td></a>";
			    			}
			    		}
			    	}
			    }
			    else if($caste==2)
			    {
			    	if(( (($row['C32']/$row['C26'])*100)<90 ||(($row['C29']/$row['C26'])*100)<90 ))
			    	{
			    		if($road==1)
			    		{
			    			if($national_highway==1||$state_highway==1||$major_district_road==1||$other_district_road==1||$pucca_road==1)
			    			{
			    				echo "<td colspan='8'><a href='Generic_Report_Card.php?village_id=".$village_id."&district_name=".$district."'>".$village."</a></td>";
			    				echo "<a href='Generic_Report_Card.php'><td>".$population_total."</td></a>";
			    			}

			    		}
			    		else
			    		{
			    			if(($national_highway==2||$state_highway==2||$major_district_road==2||$other_district_road==2||$pucca_road==2) && $kuchha_road==1)
			    			{
			    				echo "<td colspan='8'><a href='Generic_Report_Card.php?village_id=".$village_id."&district_name=".$district."'>".$village."</a></td>";
			    				echo "<a href='Generic_Report_Card.php'><td>".$population_total."</td></a>";
			    			}
			    		}
			    	}	
			    }
			    echo "<tr>";
			    echo "</table>";
			    
		}
	}
	else
	{
		echo "Data not found!";
	}
}
?>