<?php
include 'connect.php';
$WO_ID = $_REQUEST['WO_ID'];
$ROOM_ID = $_REQUEST['ROOM_ID'];
$COST_CODE= $_REQUEST['COST_CODE'];
$DESCRIPTION= $_REQUEST['DESCRIPTION'];
$DEADLINE= $_REQUEST['DEADLINE'];
$USERNAME= $_REQUEST['USERNAME'];
$DATE= $_REQUEST['DATE'];
$STATUS = "P";
$tsql="INSERT INTO Workorder(ROOM_ID,
COST_CODE,
DESCRIPTION,
DEADLINE,
DATE,
USERNAME,
STATUS)

VALUES('$ROOM_ID', '$COST_CODE', '$DESCRIPTION', '$DEADLINE', '$DATE','$USERNAME','$STATUS')";
$insertReview = sqlsrv_prepare($conn,$tsql,$params);

if( $insertReview === false ){
	die(print_r( sqlsrv_errors(), true));
}
if( sqlsrv_execute($insertReview) === false ){
	die(print_r( sqlsrv_errors(), true));
}
?>