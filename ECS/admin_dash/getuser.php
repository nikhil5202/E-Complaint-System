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



include 'db_connect.php';
$q = $_GET['q'];




$sql="SELECT * FROM complaint WHERE department= '".$q."'";
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>ComplaintId</th>
<th>Email</th>
<th>State</th>
<th>city</th>
<th>Msg</th>
<th>DateTime</th>
<th>Status</th>
<th>Cancel/Change</th>

</tr>";
while($row = mysqli_fetch_array($result)) {
	
    echo "<tr>";
    echo "<td>" . $row['compid'] . "</td>";
	 echo "<td>" . $row['email'] . "</td>";
    echo "<td>" . $row['state'] . "</td>";
    echo "<td>" . $row['city'] . "</td>";
    echo "<td>" . $row['msg'] . "</td>";
    echo "<td>" . $row['datetime'] . "</td>";
	echo "<td>" . $row['status'] . "</td>";
	 ?>
	<td><a href="cancelstatus.php?compid=<?php echo htmlentities($row['compid']);?>" onclick="return confirm('Do you really want to cancel booking')" >Cancel</a> / <a href="directstatus.php?compid=<?php echo htmlentities($row['compid']);?>" onclick="return confirm('Do you really want to confirm booking')" >Confirm</a></td>
 
	 <?php
	  

	
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html> 
