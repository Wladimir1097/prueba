<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DaoEmpleado
 *
 * @author Jhonathan Freire Enderica
 */
class DaoEmpleado {

    private $con;

    function __construct() {
        $this->con = new Conexion();
    }

    public function crear(Empleado $empleado) {
        try {
            $sql = "insert into empleado(empId,empNombres,empDni,empSexo,empDireccion,empCiudad,empTelefono,empEstado) values (?,?,?,?,?,?,?,?)";
            $stmt = $this->con->getConn()->prepare($sql);
            $stmt->bind_param('issisisi', $empleado->getEmpId(), $empleado->getEmpNombres(), $empleado->getEmpDni(), $empleado->getEmpSexo(), $empleado->getEmpDireccion(), $empleado->getEmpCiudad(), $empleado->getEmpTelefono(), $empleado->getEmpEstado());
            $stmt->execute();
            if ($stmt->affected_rows) {
                return true;
            }
        } catch (Exception $ex) {
            throw $ex->getMessage();
        }
        return false;
    }

    public function editar(Empleado $empleado) {
        try {
            $sql = "update empleado set empNombres=?,empDni=?,empSexo=?,empDireccion=?,empCiudad=?,empTelefono=?,empEstado=? where empId=?";
            $stmt = $this->con->getConn()->prepare($sql);
            $stmt->bind_param('ssisisii', $empleado->getEmpNombres(), $empleado->getEmpDni(), $empleado->getEmpSexo(), $empleado->getEmpDireccion(), $empleado->getEmpCiudad(), $empleado->getEmpTelefono(), $empleado->getEmpEstado(), $empleado->getEmpId());
            $stmt->execute();
            if ($stmt->affected_rows) {
                return true;
            }
        } catch (Exception $ex) {
            throw $ex->getMessage();
        }
        return false;
    }

    public function borrar($id) {
        try {
            $sql = "delete from empleado where empId=?";
            $stmt = $this->con->getConn()->prepare($sql);
            $stmt->bind_param('i', $id);
            $stmt->execute();
            if ($stmt->affected_rows) {
                return true;
            }
        } catch (Exception $ex) {
            throw $ex->getMessage();
        }
        return false;
    }

    public function listar() {
        $empleados = array();
        try {
            $sql = "select empId id,empNombres nombres,empDni cedula,case empSexo when 1 then 'Masculino' else 'Fememino' end sexo,empDireccion direccion,case empCiudad when 0 then 'Guayas' when 1 then 'Esmeraldas' when 2 then 'Quito' end ciudad,empTelefono telefono, case empEstado when 1 then 'Activo' else 'Inactivo' end estado from empleado";
            $stmt = $this->con->getConn()->prepare($sql);
            $stmt->execute();
            $sr = $stmt->get_result();
            while (($a = $sr->fetch_object())) {
                $empleados[] = new Empleado($a->id, $a->nombres, $a->cedula, $a->sexo, $a->direccion, $a->ciudad, $a->telefono, $a->estado);
            }
        } catch (Exception $ex) {
            throw $ex->getMessage();
        }
        return $empleados;
    }

    public function listarId($id) {
        $empleado = array();
        try {
            $sql = "select empId id,empNombres nombres,empDni cedula,empSexo sexo,empDireccion direccion,empCiudad ciudad,empTelefono telefono, empEstado estado from empleado where empId = ?";
            $stmt = $this->con->getConn()->prepare($sql);
            $stmt->bind_param('i', $id);
            $stmt->execute();
            $sr = $stmt->get_result();
            if (($a = $sr->fetch_assoc())) {
                $empleado = $a;
            }
        } catch (Exception $ex) {
            throw $ex->getMessage();
        }
        return $empleado;
    }

}
