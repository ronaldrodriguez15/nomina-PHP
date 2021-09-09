<?php

// se verifica que el formulario envie los datos
if (isset($_POST['submit'])) {

    // se obtienen los datos del formulario
    $nombre = $_POST["nameUser"];
    $tipo = $_POST["tipo"];
    $horasTrabajadas = $_POST["horasTrabajadas"];
    $numeroCuota = $_POST["numeroCuota"];


    // se realizan las validaciones de los campos
    if (empty($nombre) || $nombre == '') {
        $errorName = "<p class='text-danger'>Por favor ingresa un nombre.</p>";
    };
    if (empty($tipo) || $tipo == '') {
        $errorTipo = "<p class='text-danger'>Por favor ingresa el tipo de empleado.</p><br>";
    } else {
        if (!is_numeric($tipo)) {
            $errorNumberTipo = "<p class='text-danger'>Por favor ingresa un numero valido.</p><br>";
        }
    };
    if (empty($horasTrabajadas) || $horasTrabajadas == '') {
        $errorHoras = "<p class='text-danger'>Por favor ingresa el numero de horas trabajadas.</p><br>";
    } else {
        if (!is_numeric($horasTrabajadas)) {
            $errorNumberHoras = "<p class='text-danger'>Por favor ingresa un numero valido.</p><br>";
        }
    };
    if (empty($numeroCuota) || $numeroCuota == '') {
        $errorCuota = "<p class='text-danger'>Por favor ingresa la cuota pagada por hora.</p><br>";
    } else {
        if (!is_numeric($numeroCuota)) {
            $errorNumberCuota = "<p class='text-danger'>Por favor ingresa un numero valido.</p><br>";
        }
    };

    // se calcula el sueldo a partir de las horas trabajadas por la cuota por hora
    $sueldoBruto = $horasTrabajadas * $numeroCuota;


    // se crea una variable vacia para despues agregar la adicion dependiendo el tipo de empleado
    $adicion = 0;

    if ($horasTrabajadas > 40) {

        if ($tipo == 1) {
            $adicion = 1.5;
        } else if ($tipo == 2) {
            $adicion = 2;
        } else if ($tipo == 3) {
            $adicion = 2.5;
        } else if ($tipo == 4) {
            $adicion = 3;
        }
    };


    // se realiza la logica del problema, acá se identifica el numero de horas extras trabajadas
    // ademas, se le agrega la adicion (cuota) y finalmente se suma con el valor bruto
    $horasExtras = $horasTrabajadas - 40;
    $extrasxCuota = $horasExtras * $numeroCuota;
    $sueldoAdicion = $extrasxCuota * $adicion;
    $sueldoTotal = $sueldoBruto + $sueldoAdicion;


    // la información se envia al frontend por medio del header, se envia por tipo get
    header('location: dates.php?nombreUser=' . $nombre . '&tipo=' . $tipo . '&horasTrabajadas=' . $horasTrabajadas . '&numeroCuota=' . $numeroCuota . '&sueldoBruto=' . $sueldoBruto . '&sueldoAdicion=' . $sueldoAdicion . '&sueldoTotal=' . $sueldoTotal);
};
