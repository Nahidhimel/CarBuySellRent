<?php 
  require_once('funtion.php');
  $databasecall->soldCar();
  $databasecall->rentCar();
 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<div align="center">
<h2> Sold Car </h2>



<table border='1'>
<tr>
<th>VehicleID</th>
<th>Price</th>
<th>UserID</th>
<th>Date</th>
</tr>
<?php 
$row = $databasecall->soldCar();
for($i=0; $i< count($row["v_id"]); $i++){
 echo "<tr>";
  //echo "<td>" . $row['sl_no'] . "</td>";
  echo "<td>" . $row["v_id"][$i] . "</td>";
  echo "<td>" . $row["price"][$i] . "</td>";
  echo "<td>" . $row["user_id"][$i] . "</td>";
  echo "<td>" . $row["date"][$i] . "</td>";
  echo "</tr>";
 
}
 ?>
 

</table>


<h2> Rented Car </h2>

<table border='1'>
<tr>

<th>VehicleID</th>
<th>UserID</th>
<th>Date</th>
<th>Duration</th>
<th>Bill</th>
</tr>
<?php
$row=$databasecall->rentCar();
for($i=0;$i<count($row['v_id']);$i++) {
  echo "<tr>";
  echo "<td>" . $row['v_id'] [$i]. "</td>";
  echo "<td>" . $row['user_id'] [$i]. "</td>";
  echo "<td>" . $row['date_rent'] [$i]. "</td>";
  echo "<td>" . $row['duration'] [$i]. "</td>";
  echo "<td>" . $row['bill'] [$i]. "</td>";
  echo "</tr>";
  }

  ?>


</table>


</div>
<br><br><br><br>
<div align="center">
<h3>Manage</h3>
<br>
<button><a href="manage_user.php">users</a></button>
<button><a href="manage_car.php">cars</a></button>
<button><a href="bill.php">bills</a></button>
</div>
</body>
</html>