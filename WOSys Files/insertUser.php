<?php
include 'connect.php';
$USERNAME = $_REQUEST['USERNAME'];
$NAME = $_REQUEST['NAME'];
$PASSWORD = $_REQUEST['PASSWORD'];
$EMAIL = $_REQUEST['EMAIL'];

if ($_REQUEST['AUTH_CODE'] == 'A'){
	$ACC_TYPE = "A";
} else if ($_REQUEST['AUTH_CODE']== 'S'){
	$ACC_TYPE = "S";
};
$tsql="INSERT INTO Account(
USERNAME,
NAME,
PASSWORD,
ACC_TYPE,
EMAIL)

VALUES('$USERNAME','$NAME', '$PASSWORD','$ACC_TYPE', '$EMAIL')";
$insertReview = sqlsrv_prepare($conn,$tsql,$params);

if( $insertReview === false ){
	die(print_r( sqlsrv_errors(), true));
}
if( sqlsrv_execute($insertReview) === false ){
	die(print_r( sqlsrv_errors(), true));
}
?>