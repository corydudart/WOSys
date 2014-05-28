<?php 
include 'connect.php';
$query = 'SELECT * FROM Workorder';
$result = sqlsrv_query($conn, $query) or die(print_r( sqlsrv_errors(), true));


?>

<html>
	<table border='1'>
		<tr>
			<th>Work Order ID</th>
			<th>Date Submitted</th>
			<th>Status</th>
		</tr>
		<?php
		while ($row = sqlsrv_fetch_array($result,SQLSRV_FETCH_ASSOC)){
			if ($row['STATUS'] == 'P'){$STATUS = "Pending";}
			else if ($row['STATUS'] == 'A'){$STATUS = "Assigned";}
			else if ($row['STATUS'] == 'C'){$STATUS = "Completed";}


			echo "<tr>\n";
			echo "<td name='WO_ID'><a href='WOAdmin.php?WO_ID=".$row['WO_ID']."'>".$row['WO_ID']."</a></td>\n";
			echo "<td>".$row['DATE']."</td>\n";
			echo "<td>".$STATUS."</td>\n";
			echo "</tr>\n";
		}
		?>

	</table>
<form action="WOSub.php">
<input type="submit" value="New Work Order">
</form>
</html>