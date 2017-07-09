<?php 
    require_once('database.php');

    $databasecall->soldCar();
    $databasecall->rentCar();
    /*$databasecall->showbill();*/
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
<th>Date</th>
</tr>
<?php 
        $arr=$databasecall->soldCar();
        for($i=0; $i< count($arr["v_id"]); $i++){
          echo "<tr>";
          /*echo "<td>" . $row['sl_no'][$i] . "</td>";*/
          echo "<td>" . $row['v_id'][$i] . "</td>";
          echo "<td>" . $row['price'][$i] . "</td>";
          echo "<td>" . $row['date'][$i] . "</td>";
          echo "</tr>";
        }
        ?>
</table>



<h2>Rented Car</h2>

<table border='1'>
<tr>
<th>VehicleID</th>
<th>Bill</th>
<th>Date</th>
</tr>;
<?php 
  
  $arr=$databasecall->rentCar();
  for($i=0; $i< count($arr["v_id"]); $i++){
  echo "<tr>";
  //echo "<td>" . $row['sl_no'] . "</td>";
  echo "<td>" . $row['v_id'] . "</td>";
  echo "<td>" . $row['bill'] . "</td>";
  echo "<td>" . $row['date_rent'] . "</td>";
  echo "</tr>";
  }

 ?>

</table>;


<h2>Account</h2>

<?php


$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("bsr", $con);



$result = mysql_query("SELECT * FROM bill");


echo "<table border='1'>
<tr>
<th>WeekNo</th>
<th>SellPrice</th>
<th>RentPrice</th>
<th>Total</th>
</tr>";
$totaltotal=0;
$renttotal=0;
$selltotal=0;
while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['week_no'] . "</td>";
  echo "<td>" . $row['sell_price'] . "</td>";
  echo "<td>" . $row['rent_price'] . "</td>";
  echo "<td>" . $total=($row['sell_price']+ $row['rent_price']). "</td>";
  echo "</tr>";
  $totaltotal=($totaltotal+$total);
  $selltotal=($selltotal+$row['sell_price']);
  $renttotal=($renttotal+$row['rent_price']);

  //$row['tottal']
  }
  echo "<tr>";
  echo "<td>" ."total" . "</td>";
  echo "<td>" . $selltotal . "</td>";
  echo "<td>" . $renttotal . "</td>";
  echo "<td>" .$totaltotal . "</td>";
  echo "</tr>";
echo "</table>";

mysql_close($con);
?>

</div>

</body>
</html>