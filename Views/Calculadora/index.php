<?php

include_once '../../Models/CalculadoraModel.php';

$data = new CalculadoraModel();
$registros = $data->getAll();

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

<body class="my-3">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Calculadora</h1>
                <hr>
                <h3>Resultados de las Operaciones</h3>
                <a href="nuevo.php" class="btn btn-sm btn-outline-info my-3">Nueva Operación</a>
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
                        <?php
                        if ($registros) {

                            foreach ($registros as $row) {
                        ?>
                                <tr class="text-center">
                                    <td><?= $row->num_uno ?></td>
                                    <td><?= $row->num_dos ?></td>
                                    <td><?= $row->operacion ?></td>
                                    <td><?= $row->resultado ?></td>
                                    <td>
                                        <a class="btn btn-sm btn-outline-warning" href="../../Controllers/CalculadoraController.php?c=2&id=<?= $row->getId() ?>">Actualizar</a>
                                    </td>
                                    <td>
                                        <a class="btn btn-sm btn-outline-danger" href="../../Controllers/CalculadoraController.php?c=4&id=<?= $row->getId() ?>">Eliminar</a>
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
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
</body>

</html>