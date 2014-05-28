<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
</head>

<body>
<div class="banner"> <a href="/index.php"><img class="banner" src="images/logo.png" alt="Work Order System" /></a>
<div class="menu">
	<ul>
      <li><a href="/listings.php">Listings</a></li>
      <li><a href="/createwo.php">Create</a></li>
      <li><a href="/stats.php">Stats</a></li>
	</ul>
</div>
</div>
<div class="results">
	<form>
	<label>
	Comparison Type
		<select name="compare" >
			<option value="">Select a comparison type...</option>
			<option value="WORKER_ID">Worker Name</option>
			<option value="ROOM_ID">Location</option>
			<option value="JOB_ID">Job Type</option>
			<option value="COST_CODE">Cost Code</option>
		</select>
	</label>
	<label>
	Compare Details
		<select name="detail">
			<option value="">Time</option>
		</select>
	</label>
	<label>
	From
		<input type="date" name="start">
	</label>
	<label>
	To
		<input type="date" name="end">
	</label>
	<label>
		<input type="submit" name="submit" value="Get Results">
	</label>
	</form>

</div>
<div id="">
<?php
	include "connect.php";
	$sql = "SELECT ".$_REQUEST['compare'].", ".$_REQUEST['detail']." FROM Workorder WHERE DATE_COMPLETED >= '".$_REQUEST['start']."' AND DATE_COMPLETED <= ".$_REQUEST['end']."'" ;
	$result = sqlsrv_query($conn, $sql);
	echo "<table><tr><th>Compare Type 1: ".$_REQUEST['compare']."</th><th>From";
	while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ARRAY)){
		
	}
?>
</div>

</body>

</html>
