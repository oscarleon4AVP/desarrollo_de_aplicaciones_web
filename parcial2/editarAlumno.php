<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Alumnos</title>
    <link rel="stylesheet" href="https://code.jquery.com/jquery-3.7.1.js">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <?php include 'home.php'; ?>

    <div class="container">
        <div class="row">
            <div class="col-12">
            <form action="GuardarRegistro.php" method="POST">
                <div class="form-group">
                    <label for="">Nombre</label>
                    <input name="nombre" type="text" class="form-control" placeholder="teclea el nombre del alumno" required>
                </div>
                <div class="form-group">
                    <label for="">Número de control</label>
                    <input name="nc" type="text" class="form-control" placeholder="teclea el número de control del alumno" required>
                </div>
                <div class="form-group">
                    <label for="">Semestre</label>
                    <input name="semestre" type="number" class="form-control" placeholder="teclea el número semestre" required>
                </div>

                <div class="form-group">
                    <label for="">Edad</label>
                    <input name="edad" type="number" class="form-control" placeholder="teclea la edad del alumno" required>
                </div>
                <div class="form-group">
                    <label for="">Turno</label>
                    <select name="turno" id=""class="form-control">
                        <option value="">Selecciona el turno</option>
                        <option value="MATUTINO">MATUTINO</option>
                        <option value="VESPERTINO">VESPERTINO</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Sexo</label>
                    <select name="sexo" id=""class="form-control">
                        <option value="">Selecciona el sexo</option>
                        <option value="0">Femenino</option>
                        <option value="1">Masculino</option>
                        <option value="2">Prefiero no responder</option>
                    </select>
                </div>
                <div>
                    <input type="submit" value="registrar" class="btn btn-primary">
                    <a href="ConsultarAlumno.php" class="btn btn-primary">atras</a>

                </div>

            </form>
            </div>
        </div>
    </div>




    <footer class="text-center">
        <hr>
        CETIS 107 web-app &copy; 2023
    </footer>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>