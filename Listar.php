<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personas Registradas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGs4eF5Bz2n5Zi5z5n5uUD5b8s8bsks/k5p2I5F5I5O5e5w5r5X5o5s5t5g5" crossorigin="anonymous">
    <style>
        .container {
            margin-top: 20px;
        }
        h1 {
            color: #007BFF;
        }
        th {
            background-color: #007BFF;
            color: #fff;
        }
        tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Personas Registradas</h1>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">DNI</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Dirección</th>
                    <th scope="col" >Celular</th>
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
                    echo "<td>" . $row['idpersona'] . "</td>";
                    echo "<td>" . $row['documento'] . "</td>";
                    echo "<td>" . $row['nombre'] . "</td>";
                    echo "<td>" . $row['apellido'] . "</td>";
                    echo "<td>" . $row['direccion'] . "</td>";
                    echo "<td>" . $row['celular'] . "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-pzjw8f+ua6VGu4WNy5Cq2L0p5F5w5w5x5z5h5p5uW5Z5y5+5++5U5O5Z5t5s5I5U5w5e5e5" crossorigin="anonymous"></script>
</body>
</html>
