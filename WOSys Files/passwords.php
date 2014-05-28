<?php
include 'connect.php';
$query = 'SELECT * FROM Account';
$result = sqlsrv_query($conn, $query) or die(print_r( sqlsrv_errors(), true));
$row = sqlsrv_fetch_array($result,SQLSRV_FETCH_ASSOC);

$USERNAME = $row['USERNAME'];
$PASSWORD = $row['PASSWORD'];


while ($USER = sqlsrv_fetch_array($result)){
$USERS['$USERNAME'] = "$PASSWORD";
echo $USERS['USERNAME'];
}
function check_logged(){
	global $_SESSION, $USERS;
	if (!array_key_exists($_SESSION['logged'], $USERS)){
		header("Location: login.php");
	}
}