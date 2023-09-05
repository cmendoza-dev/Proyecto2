<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personas Registradas</title>
    <!-- Agrega el enlace a Bootstrap 4 y Font Awesome 4 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
            <a class="p-2 text-dark" href="/Listar.php">Listar</a>
            <a class="p-2 text-dark" href="/index.php">Registrar</a>
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
                    <th scope="col">Acciones</th>
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
                    echo "<td>";
                    // Agrega los botones de eliminar y actualizar con atributos data-id
                    echo "<button class='btn btn-danger delete-button' data-id='" . $row['idpersona'] . "'><i class='fa fa-trash'></i></button>";
                    echo "<button class='btn btn-primary edit-button' data-id='" . $row['idpersona'] . "'><i class='fa fa-pencil'></i></button>";
                    echo "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
    <!-- Incluye el script de Bootstrap 4 al final del cuerpo de la página -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!-- Incluye jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Manejar el click del botón Eliminar
            $(".delete-button").click(function() {
                var id = $(this).data("id");
                var confirmDelete = confirm("¿Estás seguro de que deseas eliminar esta persona?");
                if (confirmDelete) {
                    // Aquí puedes realizar una solicitud AJAX para eliminar la persona con el ID 'id'
                    alert("Persona eliminada con éxito");
                    // Puedes redirigir o recargar la página si es necesario
                    // window.location.reload();
                }
            });

            // Manejar el click del botón Actualizar
            $(".edit-button").click(function() {
                var id = $(this).data("id");
                var confirmEdit = confirm("¿Deseas editar esta persona?");
                if (confirmEdit) {
                    // Redirigir a la página de edición o realizar alguna otra acción
                    alert("Redirigir a la página de edición para la persona con ID " + id);
                    // Puedes redirigir a la página de edición o realizar otras acciones según tus necesidades
                    // window.location.href = "editar.php?id=" + id;
                }
            });
        });
    </script>
</body>

</html>
