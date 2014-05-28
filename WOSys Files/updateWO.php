<?php
include 'connect.php';
$WO_ID = $_REQUEST['WO_ID'];
$ROOM_ID = $_REQUEST['ROOM_ID'];
$COST_CODE= $_REQUEST['COST_CODE'];
$DESCRIPTION= $_REQUEST['DESCRIPTION'];
$DEADLINE= $_REQUEST['DEADLINE'];
$WORKER_ID= $_REQUEST['WORKER_ID'];
$JOB_ID= $_REQUEST['JOB_ID'];
$STATUS= $_REQUEST['STATUS'];
$DATE_ASSIGNED= $_REQUEST['DATE_ASSIGNED'];
$DATE_COMPLETED= $_REQUEST['DATE_COMPLETED'];
$NOTES= $_REQUEST['NOTES'];
$tsql="UPDATE Workorder 
SET 
ROOM_ID='$ROOM_ID',
COST_CODE = '$COST_CODE',
DESCRIPTION = '$DESCRIPTION',
DEADLINE = '$DEADLINE',
/*WORKER_ID = '$WORKER_ID',*/
/*JOB_ID = '$JOB_ID',*/
STATUS = '$STATUS',
DATE_ASSIGNED = '$DATE_ASSIGNED',
DATE_COMPLETED = '$DATE_COMPLETED',
NOTES = '$NOTES'
WHERE WO_ID=$WO_ID";
$insertReview = sqlsrv_prepare($conn,$tsql,$params);

if( $insertReview === false ){
	die(print_r( sqlsrv_errors(), true));
}
if( sqlsrv_execute($insertReview) === false ){
	die(print_r( sqlsrv_errors(), true));
}
?>