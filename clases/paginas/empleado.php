<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Empleados</title>
        <link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <script src="../../js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="../../js/bootstrap.min.js" type="text/javascript"></script>
        <?php require_once '../controlador/CtrEmpleado.php'; ?> 
    </head>
    <body>
        <br>
        <div class="container-fluid">
            <div class="row" style="margin-top: 10%;">
                <div class="col-lg-12">
                    <img src="../../img/empleado.png" class="img-responsive center-block"/>
                    <hr>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="well well-lg text-center">
                                <a href="empleadoMantenimiento.php?id=0&opc=I" class="btn btn-primary">
                                    <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i> Nuevo Empleado
                                </a>
                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal"><i class="fa fa-eye" aria-hidden="true"></i> Consultar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg" style="width: 75%;">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title" style="font-weight: bold;">Listado de empleados <i class="fa fa-eye" aria-hidden="true"></i></h4>
                    </div>
                    <div class="modal-body">
                        <table width="100%" class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr style="font-weight: bold;">
                                    <td>Código</td>
                                    <td>Nombre</td>
                                    <td>Cedula</td>
                                    <td>Sexo</td>
                                    <td>Dirección</td>
                                    <td>Ciudad</td>
                                    <td>Teléfono</td>
                                    <td>Estado</td>
                                    <td>Opciones</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $objetos = CtrEmpleado::getEmpleados();
                                foreach ($objetos as $value) {
                                    $id = $value->getEmpId();
                                    ?>
                                    <tr>
                                        <td><?= $value->getEmpId(); ?></td>
                                        <td><?= $value->getEmpNombres(); ?></td>
                                        <td><?= $value->getEmpDni(); ?></td>
                                        <td><?= $value->getEmpSexo(); ?></td>
                                        <td><?= $value->getEmpDireccion(); ?></td>
                                        <td><?= $value->getEmpCiudad(); ?></td>
                                        <td><?= $value->getEmpTelefono(); ?></td>
                                        <td class="text-center"><?= $value->getEmpEstado(); ?></td>
                                        <td class="text-center">
                                            <a href="empleadoMantenimiento.php?id=<?=$id ?>&opc=M" class="btn btn-success btn-sm"><i class="glyphicon glyphicon-edit"></i> Editar</a>
                                            <a href="empleadoEliminar.php?id=<?=$id ?>" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-remove"></i> Eliminar</a>
                                        </td>
                                    </tr>   

                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-reply" aria-hidden="true"></i> Cerrar</button>
                    </div>
                </div>

            </div>
        </div>
    </body>
</html>
