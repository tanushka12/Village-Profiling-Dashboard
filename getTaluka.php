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
$sql="SELECT DISTINCT `sub_district` FROM `city_list` WHERE `district` = '".$q."'";
$result = mysqli_query($con,$sql);

if($result==false)
{
    echo "No Results";
}
//echo "<h5>Select Sub-District:</h5>";
echo "<select name='subdistricts'>";
echo "<option>--select taluka--</option>";
while($row = mysqli_fetch_array($result)) {
    
  
  $sub_district=$row['sub_district'];
  echo "<option value='sub_district' >" . $sub_district . "</option>";
  
}
echo "</select>";
mysqli_close($con);
?>
</body>
</html>