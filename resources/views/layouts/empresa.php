<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Formularios</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Le styles -->
        <link href="../css/bootstrap.css" rel="stylesheet">
        <link href="../css/bootstrap-theme.css" rel="stylesheet">
        <link href="../css/datepicker.css" rel="stylesheet">
        <link href="../css/estilos.css" rel="stylesheet">

        <script src="../js/jquery-1.11.1.js"></script>
        <script src="../js/bootstrap.js"></script>
        <script src="../js/validarcampos.js"></script>
        <script src="../js/bootstrap-datepicker.js"></script>
        <script src="../js/bootstrap-datepicker.es.js"></script>
        <script src="../js/dtgenerales.js"></script>
        <style type="text/css">
            table#tbl_totales {
                border-collapse: separate;
                border-spacing:  5px;

            }

            .Rotate-90
            {
                -webkit-transform: rotate(-90deg);
                -moz-transform: rotate(-90deg);
                -ms-transform: rotate(-90deg);
                -o-transform: rotate(-90deg);
                transform: rotate(-90deg);

                -webkit-transform-origin: 50% 50%;
                -moz-transform-origin: 50% 50%;
                -ms-transform-origin: 50% 50%;
                -o-transform-origin: 50% 50%;
                transform-origin: 50% 50%;
                width: 30px;

                font-size: 12px;
                position: relative;
                font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
                font-weight: bold;

            }
            table#dt_grupofamiliar tr td{
                border: 1px solid #CCCCCC;
                padding: 5px;
            }
        </style>

    </head>

    <body>

        <div class="container" style="width:1190px; margin-top: -60px; ">

            <div id="contenedor">

                <!-----ENCABEZADO Y TITULOS--->
                <div id="titform">

                    <!--- Inicio Datos Personales --->
                    <form id="frm_dp">

                        <table border="0" style="width: 100%">

                            <tbody>
                                <tr>
                                    <td colspan="4" align= "center" style="height: 80px;">
                                        <fieldset>
                                            <legend>DATOS GENERALES</legend>
                                        </fieldset>
                                    </td>
                                </tr>

                                 <tr>
                                    <td width="292">
                                        <label style="display:block;margin-top:0;margin-left: 0px" for="fecha_registro"> Fecha de Registro</label>
                                    </td>
                                    <td width="338">
                                        <div id="div_fecha_registo" class="form-group">
                                            <input  style="background-color: #FFFFFF" disabled="disabled" type="text" class="form-control" value="" id="fecha_registro" name="fecha_registro" >
                                        </div>
                                    </td>
                                    <td>
                                        <label style="display:block;margin-top:0;margin-left: 25px" for="nom"> C&oacute;digo</label>
                                    </td>
                                    <td>
                                        <div id="div_codigo" class="form-group">
                                            <input  class="form-control input-sm" maxlength="09" readonly type="text" name="codigo" id="codigo" value="<?php echo $codigo ?>"/>
                                        </div>
                                    </td>
                                </tr>


                                <tr>
                                    <td style="width:80px;">
                                        <label style="display:block;margin-top:0;margin-left: 0px" >Tipo de Documento:</label>
                                    </td>
                                    <td>
                                        <div id="div_tipodocumento" class="form-group">
                                            <select class="form-control input-sm" id="tipodocumento" name="tipodocumento">
                                                <option value="0">Seleccione</option>
                                                <?php
                                                $sql    = "SELECT id_tipodocumento,tipodocumento FROM dtg_tipodocumento";
                                                $result = $conn->query($sql);
                                                while ($row    = $result->fetch_array()) {
                                                    ?>
                                                    <option value="<?php echo $row['id_tipodocumento'] ?>"><?php echo $row['tipodocumento']; ?></option>
                                                    <?php
                                                }
                                                ?>

                                            </select>
                                        </div>
                                    </td>

                                </tr>

                                <tr>
                                    <td colspan="4" align= "justify" style="height: 20px;">
                                        <fieldset>
                                            <legend>Datos del Entrevistador</legend>
                                        </fieldset>
                                    </td>
                                </tr>


                                <tr>
                                    <td>
                                        <label style="display:block;margin-top:0;margin-left: 0px" for="nom">Nombres:</label>
                                    </td>
                                    <td>
                                        <div id="div_nombres" class="form-group">
                                            <input   class="form-control input-sm" maxlength="50" type="text" name="nombres" id="nombres"/>
                                        </div>
                                    </td>
                                    <td style="width:150px;">
                                        <label style="display:block;margin-top:0;margin-left: 25px" for="ape">Apellidos:</label>
                                    </td>
                                    <td>
                                        <div id="div_apellidos" class="form-group">
                                            <input  class="form-control input-sm" maxlength="50" type="text" name="apellidos" id="apellidos"/>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <label style="display:block;margin-top:0;margin-left: 0px" for="nom">Organizaci&oacute;n a la que Pertenece:</label>
                                    </td>
                                    <td>
                                        <div id="div_organizacion" class="form-group">
                                            <select class="form-control input-sm" name="organizacion" id="organizacion">
                                                <option value="0">Seleccione</option>
                                                <option value="A">Alcaldia</option>
                                                <option value="C">C.C.</option>
                                                <option value="U">Ubch</option>
                                                <option value="T">Otros</option>
                                            </select>
                                        </div>
                                    </td>
                                    <td style="width:70px;">
                                        <label style="display:block;margin-top:0;margin-left: 25px"for="telef">Telef&oacute;no:</label>
                                    </td>
                                    <td>
                                        <div class="form-inline">
                                            <div id="div_codtlf" class="form-group">
                                                <select style="width: 120px;" class="form-control input-sm" name="codtlf" id="codtlf">
                                                    <option value="0">C&oacute;digo</option>
                                                    <option value="0243">0243</option>
                                                    <option value="0244">0244</option>
                                                    <option value="0412">0412</option>
                                                    <option value="0414">0414</option>
                                                    <option value="0416">0416</option>
                                                    <option value="0424">0424</option>
                                                    <option value="0426">0426</option>
                                                </select>
                                            </div>
                                            <div id="div_telefono" class="form-group" style="width: 250px;">
                                                <input   class="form-control input-sm" type="text" name="telefono" id="telefono" maxlength="7" />
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="4">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td colspan="4" align= "justify" style="height: 40px;">
                                        <fieldset>
                                            <legend>Datos del Entrevistado</legend>
                                        </fieldset>
                                    </td>
                                </tr>

                                <tr>
                                    <td style="width:150px;">
                                        <label style="display:block;margin-top:0;margin-left: 0px" for="nacionalid">Nacionalidad:</label>
                                    </td>
                                    <td>
                                        <div id="div_nacionalidad" class="form-group">
                                            <select class="form-control input-sm" name="nacionalidad" id="nacionalidad">
                                                <option value="0">Seleccione</option>
                                                <option value="V">Venezolano</option>
                                                <option value="E">Extranjero</option>
                                            </select>
                                        </div>
                                    </td>
                                    <td>
                                        <label style="display:block;margin-top:0;margin-left: 25px" for="nom"> C&eacute;dula</label>
                                    </td>
                                    <td>
                                        <div id="div_cedula" class="form-group">
                                            <input  class="form-control input-sm" maxlength="09" type="text" name="cedula" id="cedula"/>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label style="display:block;margin-top:0;margin-left: 0px" for="nom">Nombres:</label>
                                    </td>
                                    <td>
                                        <div id="div_nombresen" class="form-group">
                                            <input   class="form-control input-sm" maxlength="50" type="text" name="nombresen" id="nombresen"/>
                                        </div>
                                    </td>
                                    <td style="width:150px;">
                                        <label style="display:block;margin-top:0;margin-left: 25px" for="ape">Apellidos:</label>
                                    </td>
                                    <td>
                                        <div id="div_apellidosen" class="form-group">
                                            <input  class="form-control input-sm" maxlength="50" type="text" name="apellidosen" id="apellidosen"/>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                   <td style="width:60px;">
                                        <label style="display:block;margin-top:0;margin-left: 0px"for="telef">Telef&oacute;no:</label>
                                    </td>
                                    <td>
                                        <div class="form-inline">
                                            <div id="div_codtlf_1" class="form-group">
                                                <select style="width: 120px;" class="form-control input-sm" name="codtlf_1" id="codtlf_1">
                                                    <option value="0">C&oacute;digo</option>
                                                    <option value="0243">0243</option>
                                                    <option value="0244">0244</option>
                                                    <option value="0412">0412</option>
                                                    <option value="0414">0414</option>
                                                    <option value="0416">0416</option>
                                                    <option value="0424">0424</option>
                                                    <option value="0426">0426</option>
                                                </select>

                                                    </div>

                                            <div id="div_telef_entrevistado" class="form-group" style="width: 210px;">
                                                <input   class="form-control input-sm" type="text" name="telef_entrevistado" id="telef_entrevistado" maxlength="7" />
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                 <tr>
                                    <td colspan="4" align= "justify" style="height: 80px;">
                                        <fieldset>
                                            <legend>Ubicaci&oacute;n Geogr&aacute;fica</legend>
                                        </fieldset>
                                    </td>
                                </tr>

                                <tr>
                                    <td style="width:80px;">
                                        <label style="display:block;margin-top:0;margin-left: 0px" >Ejes:</label>
                                    </td>
                                    <td>
                                        <div id="div_estado" class="form-group">
                                            <select class="form-control input-sm" id="ejes" name="ejes">
                                                <option value="0">Seleccione</option>
                                                <?php
                                                $sql    = "SELECT id_ejes,ejes FROM dtg_ejes";
                                                $result = $conn->query($sql);
                                                while ($row    = $result->fetch_array()) {
                                                    ?>
                                                    <option value="<?php echo $row['id_ejes'] ?>"><?php echo $row['ejes']; ?></option>
                                                    <?php
                                                }
                                                ?>

                                            </select>
                                        </div>
                                    </td>
                                    <td style="width:80px;">
                                        <label style="display:block;margin-top:0;margin-left: 25px" for="sectores">Sectores:</label>
                                    </td>
                                    <td>
                                        <div id="div_sectores" class="form-group">
                                            <select class="form-control input-sm" id="sectores" name="sectores">
                                                <option value="0">Seleccione</option>
                                            </select>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td style="width:80px;">
                                        <label style="display:block;margin-top:0;margin-left: 0px" for="direc"> Direcci&oacute;n:</label>
                                    </td>
                                    <td>
                                        <div id="div_direc" class="form-group">
                                            <textarea class="form-control" rows="3" maxlength="100" id="direccion" name="direccion"></textarea>
                                        </div>
                                    </td>
                                    <td style="width:80px;">
                                        <label style="display:block;margin-top:0;margin-left: 25px" for="direc"> Punto de Referencia:</label>
                                    </td>
                                    <td>
                                        <div id="div_punto_referencia" class="form-group">
                                            <textarea class="form-control" rows="3" maxlength="100" id="punto_referencia" name="punto_referencia"></textarea>
                                        </div>
                                    </td>

                                </tr>
                                <tr>
                                    <td colspan="4">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td colspan="4">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td colspan="4" align="center">
                                        <button type="button" id="guardardp" class="btn btn-warning btn-sm">Guardar Datos Generales</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="4">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td colspan="4">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td colspan="4">&nbsp;</td>
                                </tr>
                            </tbody>


                        </table>
                        <!-------------- Fin Datos Personales -->
                    </form>
                </div>


            </div> <!-- container -->
        </div>

    </body>
</html>
