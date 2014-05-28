
<?php

include 'connect.php';
$query = 'SELECT * FROM Workorder, Account, Worker, Jobs';
$result = sqlsrv_query($conn, $query) or die(print_r( sqlsrv_errors(), true));
$row = sqlsrv_fetch_array($result,SQLSRV_FETCH_ASSOC);

$today = date("Y-m-d")

?>
<html>

	<form action="insertWO.php">
	Submitter Name 
		<input type=" text" name="USERNAME" value=""><br><br>
	Submittion Date 
		<input type ="date" name="DATE" value="<?php echo $today?>" readonly>
	Deadline
		<input type="date" name="DEADLINE" value="<?php echo $today?>"><br><br>
	Cost Code 
		<input type="text" name="COST_CODE" value="">
	Work Location
		<input type="text" name="ROOM_ID" value=""><br><br>
	Work Description <br>
		<textarea rows="6" cols="100" name="DESCRIPTION"></textarea><br>
		<hr>
	<input type="button" value="Print" onClick="window.print();">
	<input type="submit" value="Submit">

</form>


</http>