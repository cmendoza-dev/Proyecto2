<?php

	function conexion(){

	$host = "host=containers-us-west-203.railway.app";
	$port = "port=6958";
	$dbname = "dbname=railway";
	$user = "user=postgres";
	$password = "password=4MztO8M0VkUDlbOC3hnr";

	$db = pg_connect("$host $port $dbname $user $password");

	return $db;
}
?>

