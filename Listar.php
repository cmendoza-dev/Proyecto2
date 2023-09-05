<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Persona Data</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGs4eF5Bz2n5Zi5z5n5uUD5b8s8bsks/k5p2I5F5I5O5e5w5r5X5o5s5t5g5" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Persona Data</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Document</th>
                    <th>Name</th>
                    <th>Last Name</th>
                    <th>Address</th>
                    <th>Phone</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include("conexion.php");
                $con = conexion();
                
                $query = "SELECT * FROM persona";
                $result = pg_query($con, $query);
                
                while ($row = pg_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['document'] . "</td>";
                    echo "<td>" . $row['name'] . "</td>";
                    echo "<td>" . $row['last_name'] . "</td>";
                    echo "<td>" . $row['address'] . "</td>";
                    echo "<td>" . $row['phone'] . "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <!-- Include Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-pzjw8f+ua6VGu4WNy5Cq2L0p5F5w5w5x5z5h5p5uW5Z5y5+5++5U5O5Z5t5s5I5U5w5e5e5" crossorigin="anonymous"></script>
</body>
</html>
