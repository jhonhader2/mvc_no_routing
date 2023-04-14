<?php
    include_once '../Config/config.php';
    

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Resultados de las Operaciones</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Calculadora</h1>
                <form action="<?= constant('URL') ?>Controllers/CalculadoraController.php" method="POST">
                    <input type="hidden" name="c" value="1">
                    <div class="mb-3">
                        <label for="num_uno" class="form-label">Número Uno</label>
                        <input type="number" class="form-control" id="num_uno" name="num_uno">
                    </div>
                    <div class="mb-3">
                        <label for="num_dos" class="form-label">Número Dos</label>
                        <input type="number" class="form-control" id="num_dos" name="num_dos">
                    </div>
                    <div class="mb-3">
                        <label for="operacion" class="form-label">Operación</label>
                        <select class="form-select" id="operacion" name="operacion">
                            <option value="1">Sumar</option>
                            <option value="2">Restar</option>
                            <option value="3">Multiplicar</option>
                            <option value="4">Dividir</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary mb-3">Calculadora</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
</body>

</html>