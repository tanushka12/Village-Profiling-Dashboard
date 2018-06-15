<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q = $_GET['q'];
$con = mysqli_connect('localhost','root','','grasshoppers');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"grasshoppers");
$sql="SELECT DISTINCT `district` FROM `city_list` WHERE `state` = '".$q."'";
$result = mysqli_query($con,$sql);

if($result==false)
{
    echo "No Results";
}
//echo "<h5>District</h5>";

echo "<select name='districts' onchange='showTaluka(this.value)'>";
echo "<option>--select district--</option>";
while($row = mysqli_fetch_array($result)) {
    
   // echo "<tr>";
	$district=$row['district'];
    echo "<option value='$district' >" . $district . "</option>";
   // echo "</tr>";
}
echo "</select>";
echo "<br><br>";
mysqli_close($con);
?>
</body>
</html>