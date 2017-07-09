<?php 
  require_once('funtion.php');
  $databasecall->showUser();
 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<div align="center">
<h2> Users </h2>



<table border='1'>
<tr>
<th>UserName</th>
<th>UserID</th>
<th>Email</th>
<th>NationalID</th>
<th>Address</th>
</tr>
<?php 
  $row = $databasecall->showUser();
  for($i=0; $i< count($row["user_id"]); $i++){
    echo "<tr>";
    //echo "<td>" . $row['sl_no'] . "</td>";
    echo "<td>" . $row['username'][$i] . "</td>";
    echo "<td>" . $row['user_id'][$i] . "</td>";
    echo "<td>" . $row['email'][$i] . "</td>";
    echo "<td>" . $row['na_id'] [$i]. "</td>";
    echo "<td>" . $row['address'] [$i]. "</td>";
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
  UserID: <input type="text" name="u_id">
</form><br>
<button>delete</button>
<button>ban</button>
</div>
</body>
</html>