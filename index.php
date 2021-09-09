<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabajo</title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/user.png" type="image/x-icon">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend&family=Quantico&display=swap" rel="stylesheet">
</head>

<body>


    <div class="container">
        <div class="text-center mt-3">
            <h1>Formulario</h1>
        </div>
        <br>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <form action="backend.php" method="POST">
                            <div class="form-group">
                                <label for="nameUser">Nombre: </label>
                                <input type="text" class="form-control" name="nameUser" id="nameUser"><br>
                                <?php //if (empty($errorName)) {
                                    //echo $errorName;
                                //} ?> 
                                <label for="name">Tipo de empleado: </label>
                                <select name="tipo" class="form-control" id="tipo">
                                    <option value="">Selecciona el tipo de empleado</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select><br>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="name">Numero de horas trabajadas: </label>
                                        <input type="number" class="form-control" name="horasTrabajadas" id="nameUser" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="name">cuota pagada por hora (sin puntos): </label>
                                        <input type="number" class="form-control" name="numeroCuota" id="nameUser" placeholder="Ej: 2000">
                                    </div>
                                </div>
                                <br>
                                <button type="submit" class="btn btn-success" name="submit">Enviar</button>
                                <button type="reset" class="btn btn-primary">Limpiar campos</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>

</html>