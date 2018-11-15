<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Mantenimiento de empleados</title>
        <link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../../font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="../../css/estilo.css" rel="stylesheet" type="text/css"/>
        <script src="../../js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="../../js/bootstrap.min.js" type="text/javascript"></script>
        <?php require_once '../controlador/CtrEmpleado.php'; ?> 
    </head>
    <body>
        <?php
        if (isset($_GET['opc'])) {
            if ($_GET['opc'] == 'M') {
                $empleado = CtrEmpleado::getEmpleado($_GET['id']);
                $id = $empleado['id'];
                $nombres = $empleado['nombres'];
                $cedula = $empleado['cedula'];
                $sexo = $empleado['sexo'];
                $direccion = $empleado['direccion'];
                $ciudad = $empleado['ciudad'];
                $telefono = $empleado['telefono'];
                $estado = $empleado['estado'];
            } else {
                $id = 0;
                $nombres = '';
                $cedula = '';
                $sexo = 1;
                $direccion = '';
                $ciudad = 0;
                $telefono = '';
                $estado = 1;
            }
        }
        ?> 
        <br>
        <div class="container">
            <div class="row" style="margin-top: 8%;">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="row center-block">
                                <div class="col-lg-6 text-left">
                                    <h4 class="center-block" style="font-weight: bold;">Mantenimiento de Empleados</h4>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="container-fluid">
                                <form class="form-horizontal" method= "post" action="empleadoGuardar.php">
                                    <div class="form-group">
                                        <input type="hidden" name="opc" value='<?= $_GET['opc']; ?>'/>
                                        <input type="hidden" name="id" value='<?= $id; ?>'/>
                                        <label class="col-sm-2 control-label">Nombres:</label>
                                        <div class="col-lg-10">
                                            <input type="text" value='<?= $nombres; ?>' class="form-control" id="nombres" name="nombres" required="true" placeholder="Ingrese un nombre" maxlength="100" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Cedula:</label>
                                        <div class="col-lg-10">
                                            <input type="text" value='<?= $cedula; ?>' class="form-control" id="cedula" name="cedula" required="true" placeholder="Ingrese un número de cedula" maxlength="10" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Sexo:</label>
                                        <div class="col-lg-10">
                                            <label class="radio-inline">
                                                <input type="radio" name="sexo" value="1" <?= $sexo == 1 ? 'checked' : ''; ?>>Masculino
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="sexo" value="0" <?= $sexo == 0 ? 'checked' : ''; ?>>Femenino
                                            </label>
                                        </div>   
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Dirección:</label>
                                        <div class="col-lg-10">
                                            <input type="text" value='<?= $direccion; ?>' class="form-control" id="direccion" name="direccion" required="true" placeholder="Ingrese una dirección" maxlength="200" autocomplete="off">
                                        </div> 
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Ciudad:</label>
                                        <div class="col-lg-10">
                                            <select class="form-control" id="ciudad" name="ciudad">
                                                <option value="0">Guayas</option>
                                                <option value="1">Esmeraldas</option>
                                                <option value="2">Quito</option>
                                            </select>
                                        </div> 
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Telefono:</label>
                                        <div class="col-lg-10">
                                            <input type="text" value='<?= $telefono; ?>' class="form-control" id="telefono" name="telefono" required="true" placeholder="Ingrese un teléfono" maxlength="10" autocomplete="off">
                                        </div> 
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Estado:</label>
                                        <div class="col-lg-10">
                                            <label class="radio-inline">
                                                <input type="radio" name="estado" value="1" <?= $estado == 1 ? 'checked' : ''; ?>>Activo
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="estado" value="0" <?= $estado == 0 ? 'checked' : ''; ?>>Inactivo
                                            </label>
                                        </div>     
                                    </div><hr>
                                    <div class="row" style="margin-top: 10px; margin-bottom: 0px;">
                                        <div class="col-lg-12">
                                            <button type="submit" class="btn btn-default"><i class="fa fa-floppy-o fa-lg" aria-hidden="true"></i> Guardar</button>
                                            <button type="reset" class="btn btn-default">
                                                <i class="fa fa-refresh" aria-hidden="true"></i> Limpiar
                                            </button>
                                            <a href="empleado.php" class="btn btn-default">
                                                <i class="fa fa-reply" aria-hidden="true"></i> Retornar
                                            </a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $(document).ready(function () {
                document.getElementById('ciudad').selectedIndex = "<?= $ciudad; ?>";
            });
        </script>
    </body>
</html>
