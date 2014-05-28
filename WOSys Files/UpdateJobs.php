<?php
include 'connect.php';
$value = $_REQUEST['JOB_DESC'];
$tsql="INSERT INTO Jobs(JOB_DESC)VALUES('$value')";
$insertReview = sqlsrv_prepare($conn,$tsql,$params);

if( $insertReview === false ){
	die(print_r( sqlsrv_errors(), true));
}
if( sqlsrv_execute($insertReview) === false ){
	die(print_r( sqlsrv_errors(), true));
}
?>