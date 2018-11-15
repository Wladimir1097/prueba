<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require '../controlador/CtrEmpleado.php';
$ctr = new CtrEmpleado();
$ctr->borrar($_GET['id']);
header("Location:../paginas/empleado.php");
