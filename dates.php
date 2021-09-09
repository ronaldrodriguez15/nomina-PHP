<?php

// se incluye el archivo que contiene la logica
include('backend.php');

// se llaman las variables que vienen desde el backend
$nombreUser = $_GET['nombreUser'];
$tipo = $_GET['tipo'];
$horasTrabajadas = $_GET['horasTrabajadas'];
$numeroCuota = $_GET['numeroCuota'];
$sueldoBruto = $_GET['sueldoBruto'];
$sueldoAdicion = $_GET['sueldoAdicion'];
$sueldoTotal = $_GET['sueldoTotal'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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


    <title>Datos basicos</title>
</head>

<body>

    <div class="container">
        <div class="text-center mt-5">
            <h3>Datos basicos de <?php echo $nombreUser ?></h3>
        </div>
        <div class="row justify-content-center mt-5">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 mt-3">
                                <h6>Nombre: <i><?php echo $nombreUser ?></i></h6><br>
                                <h6>Tipo de empleado: <i><?php echo $tipo ?></i></h6><br>
                                <h6>Horas trabajadas: <i><?php echo $horasTrabajadas ?></i></h6><br>
                                <h6>Cuota por hora: <i><?php echo $numeroCuota ?></i></h6><br>
                            </div>
                            <div class="col-md-6 text-center">
                                <img src="img/user.png" alt="logo" width="200">
                            </div>
                            <div class="col-md-4 text-center mt-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h6>Sueldo bruto</h6>
                                        <b><?php echo $sueldoBruto ?></b>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 text-center mt-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h6>Sueldo Total</h6><br>
                                        <b><?php echo $sueldoTotal ?></b>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 text-center mt-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h6>sueldo de horas extras</h6>
                                        <b><?php echo $sueldoAdicion ?></b>
                                    </div>
                                </div>
                            </div>
                        </div>
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