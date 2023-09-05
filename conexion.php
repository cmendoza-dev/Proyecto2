
<?php

function conexion(){

    $host = "containers-us-west-203.railway.app";
    $port = "6958";
    $dbname = "railway";
    $user = "postgres";
    $password = "4MztO8M0VkUDlbOC3hnr";

    // Use pg_connect with proper connection string
    $connection_string = "host=$host port=$port dbname=$dbname user=$user password=$password";
    
    $db = pg_connect($connection_string);

    if (!$db) {
        die("Error in connection: " . pg_last_error());
    }

    return $db;
}

// Example usage:
$con = conexion();

// Now you can use $con to perform database operations
?>
