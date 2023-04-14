<?php

include_once '../Config/config.php';
include_once constant('URL') . 'Controllers/CalculadoraController.php?c=';
// include_once ;

var_dump(constant('URL') . 'Models/CalculadoraModel.php');

$calculadora = new CalculadoraModel();
// $calculadora->getAll();

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Calculadora</title>
</head>

<body class="mt-3">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Calculadora</h1>
                <h1>Resultados de las Operaciones</h1>
                <a href="nuevo.php" class="btn bnt-sm btn-outline-info my-3">Nueva Operación</a>
                <a href="http://"></a>
                <table class="table table-sm table-hover">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">Número Uno</th>
                            <th scope="col">Número Dos</th>
                            <th scope="col">Operación</th>
                            <th scope="col">Resultado</th>
                            <th scope="col" colspan="2">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- <?php
                                if ($this->alumnos) {
                                    foreach ($this->alumnos as $row) {
                                ?>
                                <tr class="text-center">
                                    <td><?= $row->nombres ?></td>
                                    <td><?= $row->apellidos ?></td>
                                    <td>
                                        <a class="btn btn-sm btn-outline-info" href="<?= constant('URL') . "alumno/show/" . $row->id ?>">Actualizar</a>
                                    </td>
                                    <td>
                                        <a class="btn btn-sm btn-outline-danger" href="<?= constant('URL') . "alumno/destroy/" . $row->id ?>"">Eliminar</a> 
                                </td>
                            </tr>
                            <?php
                                    }
                                } else {
                            ?>
                        <tr class=" text-center">
                                    <td colspan="6">Sin datos</td>
                                </tr>
                            <?php
                                }
                            ?> -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
</body>

</html>