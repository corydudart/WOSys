<?php

$serverName = "CIT-SYSDESG1A\WOSys";

$connectionOptions = array("Database"=>"Workorder","ReturnDatesAsStrings"=>true);


$conn = sqlsrv_connect( $serverName, $connectionOptions);


?>