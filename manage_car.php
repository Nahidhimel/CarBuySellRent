<?php 
  require_once('funtion.php');
  $databasecall->showCar();
 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<div align="center">
<h2> Cars </h2>



<table border='1'>
<tr>
<th>VehicleID</th>
<th>VehicleCompany</th>
<th>VehicleModel</th>
<th>ManufacturingYear</th>
<th>EngineCapcity</th>
<th>LicenceNo</th>
<th>Price</th>
</tr>
<?php 
  $row = $databasecall->showCar();
  for($i=0; $i< count($row["v_id"]); $i++){
    echo "<tr>";
  echo "<td>" . $row['v_id'][$i] . "</td>";
  echo "<td>" . $row['v_company'][$i] . "</td>";
  echo "<td>" . $row['v_model'][$i] . "</td>";
  echo "<td>" . $row['v_myr'][$i] . "</td>";
  echo "<td>" . $row['e_cap'] [$i]. "</td>";
  echo "<td>" . $row['L_no'] [$i]. "</td>";
  echo "<td>" . $row['price'] [$i]. "</td>";
  echo "</tr>";
  }

 ?>
  
</table>


</div>
<br><br><br><br>
<div align="center">
<h3>Manage</h3>
<br>
<form >
  Vehicle ID: <input type="text" name="c_id">
</form><br>
<button>delete</button>
<button>ban</button>
<br><br><br><br><br><br>
<button><a href="addcar.php"><b>Add New Car</b></a></button>
<?php// require_once('addcar.php'); ?>
</div>
</body>
</html>