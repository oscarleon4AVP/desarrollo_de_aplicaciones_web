<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href=".css">
    <script src=""></script>
</head>
<body>
    <?php include 'mmenu.php';
          include 'conexion.php';
          
          $sql = "SELECT = FROM alumnos";
          $datos = $conexion->query($sql);
          ?>

    <footer class="text-container">
    <hr>
    CETIS 107 &copy; 2023
    </footer>

    <div class="container">
    <div class="row">
            <div class="col-12">
                <h2>Bienvenido al sistema de gestion de alumnos</h2>
                <img src="imagenes/logo.png" width="128px">
            </div>
        </div>
    </div>
    <script src=""></script>
</body>
</html>