<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personas Registradas</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/pricing/">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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

<body class="container">

    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
        <h5 class="my-0 mr-md-auto font-weight-normal"><img src="index2.png" style="width: 30px; position: absolute;"> <span style="position: relative; left: 35px;">Index</span></h5>
        <nav class="my-2 my-md-0 mr-md-3">
            <a class="p-2 text-dark" href="Listar.php">Listar</a>
            <a class="p-2 text-dark" href="#">Registrar</a>
            <a class="p-2 text-dark" href="#">Actualizar</a>
            <a class="p-2 text-dark" href="#">Eliminar</a>

        </nav>
    </div>

    <div class="px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4">Personas registradas with Railway</h1>
        <p class="lead">PostgreSQL + PHP</p>
    </div>

    <div class="">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">DNI</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Dirección</th>
                    <th scope="col">Celular</th>
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