<?php

require_once '../conexion/Conexion.php';
require_once '../modelo/Empleado.php';
require_once '../dao/DaoEmpleado.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CtrEmpleado
 *
 * @author Jhonathan Freire Enderica
 */
class CtrEmpleado {

    private $datos;

    public function __construct() {
        $this->datos = "";
    }

    public static function getEmpleados() {
        $dao = new DaoEmpleado();
        return $dao->listar();
    }

    public static function getEmpleado($id) {
        $dao = new DaoEmpleado();
        return $dao->listarId($id);
    }

    public static function guardar($datos = array()) {
        $emp = new Empleado($datos['id'], $datos['nombres'], $datos['cedula'], $datos['sexo'], $datos['direccion'], $datos['ciudad'], $datos['telefono'], $datos['estado']);
        $daoEmpleado = new DaoEmpleado();
        switch ($datos['opc']) {
            case 'I':$daoEmpleado->crear($emp);
                return 'Ok';
            case 'M':$daoEmpleado->editar($emp);
                return 'Ok';
        }
        return "Error en la Transacción";
    }

    public static function borrar($id) {
        $daoEmpleado = new DaoEmpleado();
        if ($daoEmpleado->borrar($id)) {
            return 'Ok';
        }
        return "Error en la Transacción";
    }

}
