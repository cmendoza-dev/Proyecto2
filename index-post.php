<!-- <?php
include("conexion.php");
$con = conexion();

$doc = $_POST["doc"];
$nom = $_POST["nom"];
$ape = $_POST["ape"];
$dir = $_POST["dir"];
$cel = $_POST["cel"];

$sql = "insert into persona values(default,'$doc','$nom','$ape','$dir','$cel')";
pg_query($con, $sql);

header("location:index.php");
?> -->

<?php
include("conexion.php");
$con = conexion();

$doc = $_POST["doc"];
$nom = $_POST["nom"];
$ape = $_POST["ape"];
$dir = $_POST["dir"];
$cel = $_POST["cel"];

// Use prepared statement
$sql = "INSERT INTO persona VALUES(default, $1, $2, $3, $4, $5)";
$result = pg_query_params($con, $sql, array($doc, $nom, $ape, $dir, $cel));

if ($result) {
    header("location:index.php");
} else {
    // Handle the error, for example:
    echo "Error: " . pg_last_error($con);
}

// Close the database connection
pg_close($con);
?>
