<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Empleado
 *
 * @author Jhonathan Freire Enderica
 */
class Empleado {

    //put your code here
    private $empId;
    private $empNombres;
    private $empDni;
    private $empSexo;
    private $empDireccion;
    private $empCiudad;
    private $empTelefono;
    private $empEstado;
    
    function __construct($empId, $empNombres, $empDni, $empSexo, $empDireccion, $empCiudad, $empTelefono, $empEstado) {
        $this->empId = $empId;
        $this->empNombres = $empNombres;
        $this->empDni = $empDni;
        $this->empSexo = $empSexo;
        $this->empDireccion = $empDireccion;
        $this->empCiudad = $empCiudad;
        $this->empTelefono = $empTelefono;
        $this->empEstado = $empEstado;
    }
    
    function getEmpId() {
        return $this->empId;
    }

    function getEmpNombres() {
        return $this->empNombres;
    }

    function getEmpDni() {
        return $this->empDni;
    }

    function getEmpSexo() {
        return $this->empSexo;
    }

    function getEmpDireccion() {
        return $this->empDireccion;
    }

    function getEmpCiudad() {
        return $this->empCiudad;
    }

    function getEmpTelefono() {
        return $this->empTelefono;
    }

    function getEmpEstado() {
        return $this->empEstado;
    }

    function setEmpId($empId) {
        $this->empId = $empId;
    }

    function setEmpNombres($empNombres) {
        $this->empNombres = $empNombres;
    }

    function setEmpDni($empDni) {
        $this->empDni = $empDni;
    }

    function setEmpSexo($empSexo) {
        $this->empSexo = $empSexo;
    }

    function setEmpDireccion($empDireccion) {
        $this->empDireccion = $empDireccion;
    }

    function setEmpCiudad($empCiudad) {
        $this->empCiudad = $empCiudad;
    }

    function setEmpTelefono($empTelefono) {
        $this->empTelefono = $empTelefono;
    }

    function setEmpEstado($empEstado) {
        $this->empEstado = $empEstado;
    }
}
