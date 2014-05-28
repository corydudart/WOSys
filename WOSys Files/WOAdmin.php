
<?php
include 'connect.php';
$WO_ID = $_REQUEST['WO_ID'];
$query = "SELECT * FROM Workorder, Worker, Jobs
			WHERE WO_ID = '$WO_ID'";
$result = sqlsrv_query($conn, $query) or die(print_r( sqlsrv_errors(), true));
$row = sqlsrv_fetch_array($result,SQLSRV_FETCH_ASSOC);



?>
<html>
	<form action="updateWO.php" method="post">
	Work Order ID
		<input type="text" name="WO_ID" value="<?php echo $row['WO_ID']?>" readonly> 
	Submitter Name 
		<input type=" text" name="USERNAME" value="<?php echo $row['USERNAME']?>"readonly><br><br>
	Submittion Date 
		<input type ="date" id="DATE" name="sub_date" value="<?php echo $row['DATE']?>"readonly>
	Deadline
		<input type="datetime" name="DEADLINE" value="<?php echo $row['DEADLINE']?>"readonly>
	Cost Code 
		<input type="text" name="COST_CODE" value="<?php echo $row['COST_CODE']?>">
	Work Location
		<input type="text" name="ROOM_ID" value="<?php echo $row['ROOM_ID']?>"><br><br>
	Work Description <br>
		<textarea rows="6" cols="125" name="DESCRIPTION" readonly><?php echo $row['DESCRIPTION']?></textarea><br>
		<hr>
	Work Order Status
		<select name="STATUS">
			<option value="P"<?php if ($row['STATUS'] == 'P'){echo 'selected="selected"';} ?>>Pending</option>
			<option value="C"<?php if ($row['STATUS'] == 'C'){echo 'selected="selected"';} ?>>Completed</option>
			<option value="A"<?php if ($row['STATUS'] == 'A'){echo 'selected="selected"';} ?>>Assigned</option>
		</select>
	Job Type
		<select>
			<option value="Add" onclick="addjob.html">Add Job..</option>
			<?php
			while ($option = sqlsrv_fetch_array($result)){
				echo '<option value="'.$option['JOB_DESC'].'">'.$option['JOB_DESC'].'</option>';
			}
			?>
		</select> <br><br>
	Worker Name/ID
		<input type="text" value="<?php echo $row['WORKER_NAME']?>">
	<br><br>
	Work Started
		<input type="time" value="<?php echo $row['DATE_ASSIGNED']?>">
	Work Completed
		<input type="text" value="<?php echo $row['DATE_COMPLETED']?>"> <br> <br>
	Notes <br>
		<textarea rows="6" cols="125" name="NOTES"><?php echo $row['NOTES']?></textarea> <br> <br>
	<input type="submit" value="Update" >
	<input type="button" value="Print" onClick="window.print();">
	</form>
</html>