<?php

	function conexion(){

	$host = "containers-us-west-203.railway.app";
	$port = "6958";
	$dbname = "railway";
	$user = "postgres";
	$password = "4MztO8M0VkUDlbOC3hnr";

	$db = pg_connect("$host $port $dbname $user $password");

	return $db;
}
?>