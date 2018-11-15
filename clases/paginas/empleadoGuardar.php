<?php

require '../controlador/CtrEmpleado.php';
$ctr = new CtrEmpleado();
$ctr->guardar($_POST);
header("Location:../paginas/empleado.php");
