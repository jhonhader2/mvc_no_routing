<?php

require_once '../Models/CalculadoraModel.php';

$calculadora = new CalculadoraController;

class CalculadoraController
{
    private $calculadora;

    public function __construct()
    {
        $this->calculadora = new CalculadoraModel();
        var_dump($_REQUEST);
        echo "<hr>";
        if (isset($_REQUEST['c'])) {
            switch ($_REQUEST['c']) {
                case 1: //Almacenar en la base de datos
                    self::store();
                    break;
                case 2: //Ver usuario
                    self::show();
                    break;
                case 3: //Actualizar el registro 
                    self::update();
                    break;
                case 4: //Actualizar el registro 
                    self::delete();
                    break;
                default:
                    self::index();
                    break;
            }
        }
    }

    public function index()
    {
        return $this->calculadora->getAll();
    }

    public function show()
    {
        $id = $_REQUEST['id'];
        header("Location: " . constant('URL') . "Views/calculadora/editar.php?id=" . $id);
    }

    public function store()
    {
        $datos = [
            'num_uno' => $_REQUEST['num_uno'],
            'num_dos' => $_REQUEST['num_dos'],
            'operacion' => $_REQUEST['operacion']
        ];


        $result = $this->calculadora->store($datos);

        if ($result) {
            header("Location: " . constant('URL') . "Views/calculadora/index.php");
            exit();
        }

        return $result;
    }

    public function update()
    {

        $datos = [
            'id'        => $_REQUEST['id'],
            'num_uno'   => $_REQUEST['num_uno'],
            'num_dos'   => $_REQUEST['num_dos'],
            'operacion' => $_REQUEST['operacion']
        ];

        $result = $this->calculadora->update($datos);

        if ($result) {
            header("Location: " . constant('URL') . "Views/calculadora/index.php");
            exit();
        }

        return $result;
    }

    public function delete()
    {
        // var_dump($_REQUEST);
        $id = $_REQUEST['id'];
        $result = $this->calculadora->delete($id);
        if ($result) {
            header("Location: " . constant('URL') . "Views/calculadora/index.php");
            exit();
        }
    }
}
