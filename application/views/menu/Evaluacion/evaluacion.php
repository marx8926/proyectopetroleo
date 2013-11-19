<?php $ruta = base_url(); ?>
<header class="head" style="margin-left:0;">
    <!-- ."main-bar -->
    <div class="main-bar" style="margin-left:0;">
        <h3 style="color:#000;" ><i class="fa fa-home"></i> Evaluacion</h3>
    </div>
    <!-- /.main-bar -->
</header>
<div class="box">
    <header>
        <ul class="nav nav-tabs">
            <li class="active">
                <a href="#Listado_registro" data-toggle="tab">Lista de Evaluación</a>
            </li>
            <li>
                <a href="#Regitro_evaluacion" data-toggle="tab">Registro de Evaluacion</a>
            </li>
        </ul>

    </header>
    <div class="form-horizontal">
        <div class="tab-content">
          <!--Tab Reporte_Evaluacion-->
            <div id="Listado_registro" class="tab-pane active">
                <fieldset style="margin-top:20px;">
                     <table id="dataTable" class="table table-bordered table-condensed table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Equipo</th>
                                <th>Serie</th>
                                <th>Hora Inicio</th>
                                <th>Hora Término</th>
                                <th>Fecha de Registro</th>
                                <th>Estado Encontrado</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><a href="#modalEditarRegistro" class="btn btn-success" data-toggle="modal">Editar</a>
                                    <a href="#modalVerRegistro" class="btn btn-info" data-toggle="modal"><i class="glyphicon glyphicon-eye-open"></i> Ver</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </fieldset>
            </div>
            <!--Fin Reporte_Evaluacion-->
            
            <!--Tab Regitro_evaluavcon-->
            <div id="Regitro_evaluacion" class="tab-pane">
                    <form id="frmRegEvaluacion" name="frmRegEvaluacion" accept="#">  
                           <fieldset style="margin-top:20px;">                             
                            <div class="col-lg-4">
                                  <div class="form-group">
                                        <label class="control-label col-lg-4">Equipo</label>
                                        <div class="col-lg-5">
                                            <select id="select_Equipo" name="select_Equipo" class="form-control" >
                                                <?php if (count($listar_equio)>0): ?>
                                                    <?php foreach ($listar_equio as $le ): ?>
                                                        <option value="<?php echo $le->id;?>"> 
                                                        <?php echo $le->codigo_eq;?> </option>
                                                    <?php endforeach; ?>
                                                <?php endif;?>
                                            </select>
                                        </div>
                                  </div>
                            </div>
                            
                          </fieldset>
                          <legend></legend>
                          <fieldset style="margin-top:20px;"> 
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="control-label col-lg-4">Cuadrilla</label>
                                        <div class="controls col-lg-5">
                                           <select id="select_cuadrilla" name="select_cuadrilla" class="form-control">
                                                <?php if (count($listar_cuadrilla)>0): ?>
                                                    <?php foreach ($listar_cuadrilla as $lc): ?>
                                                        <option value="<?php echo $lc->id;?>"> 
                                                        <?php echo $lc->nombre;?> </option>
                                                    <?php endforeach; ?>
                                                <?php endif;?>
                                           </select>
                                        </div>
                                     </div>
                                     <div class="form-group">
                                        <label class="control-label col-lg-4">Fecha de Ejecucion</label>
                                        <div class="col-lg-5">
                                            <input type="text" class="validate[required] form-control datepicker" name="fec_ejecucion" id="fec_ejecucion">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                            <label class="control-label col-lg-4">Estado Encontrado</label>
                                        <div class="controls col-lg-5">
                                           <select id="select_estadoEncontrado" name="select_estadoEncontrado" class="form-control">
                                               <option value="1">OPERATIVO</option>
                                               <option value="2">PARADO</option>
                                           </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-lg-4">Presión</label>
                                        <div class="col-lg-5">
                                            <input type="text" class="validate[required] form-control" name="presion" id="presion">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-lg-4">Color de Cable</label>
                                        <div class="col-lg-5">
                                            <select id="selectColorCable" name="selectColorCable" class="form-control">
                                                <option value="1">Verde</option>
                                                <option value="2">Negro</option>
                                            </select>
                                       </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="control-label col-lg-4">Hora Inicio</label>
                                        <div class="col-lg-5">
                                            <input type="time" class="validate[required] form-control" name="hora_inicio" id="hora_inicio">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-lg-4">Hora Fin</label>
                                        <div class="col-lg-5">
                                            <input type="time" class="validate[required] form-control" name="hora_fin" id="hora_fin">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-lg-4">Problematica</label>
                                        <div class="col-lg-5">
                                            <input type="text" class="validate[required] form-control" name="problematica" id="problematica">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-lg-4">Tiempo Ciclo</label>
                                        <div class="col-lg-5">
                                            <input type="text" class="validate[required] form-control" name="tiempo_ciclo" id="tiempo_ciclo">
                                        </div>
                                    </div>

                                     <div class="form-group">
                                        <label class="control-label col-lg-4">Fuga Cabezal</label>
                                        <div class="col-lg-5">
                                            <select id="selectFuga_cabezal" name="selectFuga_cabezal" class="form-control">
                                                <option value="1">Si</option>
                                                <option value="2">No</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="control-label col-lg-4">ODT</label>
                                        <div class="col-lg-5">
                                            <input type="text" class="validate[required] form-control" name="odt" id="odt">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="control-label col-lg-4">Vale Elect.\Manual</label>
                                        <div class="col-lg-5">
                                            <input type="text" class="validate[required] form-control" name="valeElect" id="valeElect">
                                        </div>
                                    </div>
                                     <div class="form-group">
                                        <label class="control-label col-lg-4">Columna Fluido</label>
                                        <div class="col-lg-5">
                                            <input type="text" class="form-control" name="colum_fluido" id="colum_fluido">
                                        </div>
                                    </div>
                                       <div class="form-group">
                                        <label class="control-label col-lg-4">PSI Total Ciclos</label>
                                        <div class="col-lg-5">
                                            <input type="text" class="validate[required] form-control" name="psi_totalciclo" id="psi_totalciclo">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-lg-4">Eficiencia BBA</label>
                                        <div class="col-lg-5">
                                            <input type="text" class="validate[required] form-control" name="efic_bba" id="efic_bba">
                                        </div>
                                    </div>
                                </div>
                          </fieldset>
                          <legend></legend>
                            <fieldset style="margin-top:5px;">
                                <div class="col-lg-12" style="margin-bottom:10px;">
                                    <label >NIVEL / BOMBA / CICLO </label>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="control-label col-lg-2">Tipo</label>
                                        <div class="controls col-lg-5">
                                           <select id="select_tipoNBC" name="select_tipoNBC" class="form-control">
                                            <option value="1">Nivel</option>
                                            <option value="2">Bomba</option>
                                            <option value="3">Ciclo</option>
                                           </select>
                                        </div>
                                    </div>
                                </div>
                                 <div class="col-lg-6">
                                    <div class="form-group">
                                       <label class="control-label col-lg-2">Valor</label>
                                        <div class="col-lg-3">
                                            <input type="text" class="form-control" name="valor_nbc" id="valor_nbc">
                                        </div>
                                        <a class="btn btn-default" onclick="nivel_ciclo_bomba();" style="float: rigth;"><i class="glyphicon glyphicon-plus"></i></a>
                                    </div>
                                </div>
                                <div id="dt_nbc"></div>
                            </fieldset>
                          <legend></legend>
                          <!-- valores de medicion -->
                          <fieldset style="margin-top:5px;">
                            <div class="col-lg-12" style="margin-bottom:10px;">
                                <label >VALOR DE MEDICIÓN </label>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="control-label col-lg-2">Tipo</label>
                                    <div class="controls col-lg-5">
                                       <select id="select_tipoValorM" name="select_tipoValorM" class="form-control">
                                        <option value="1">TG</option>
                                        <option value="2">TD</option>
                                       </select>
                                    </div>
                                </div>
                            </div>
                             <div class="col-lg-6">
                                <div class="form-group">
                                   <label class="control-label col-lg-2">Valor</label>
                                        <div class="col-lg-3">
                                            <input type="text" class="form-control" name="valor_mv" id="valor_mv">
                                        </div>
                                        <a class="btn btn-default" onclick="valor_medicion();" style="float: rigth;"><i class="glyphicon glyphicon-plus"></i></a>
                                </div>
                            </div>
                            <div id="dt_valorMedicion"></div>
                        </fieldset>
                        <legend></legend>
                          <!-- -->
                          <fieldset style="margin-top:35px;">
                          <div class="col-lg-6">
                               <div class="form-group">
                                  <label class="control-label col-lg-4">Trabajos Realizados</label>
                                       <div class="col-lg-5">
                                             <input type="text" class="form-control" name="trabajo_realizado" id="trabajo_realizado">
                                       </div>
                                           <a class="btn btn-default" onclick="valor_TrabajoRealizado();" style="float: left;"><i class="glyphicon glyphicon-plus"></i></a>
                                                    
                                </div>
                                <div id="dt_trabajoRealiza"></div>
                          </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                      <label class="control-label col-lg-2">Observación</label>
                                       <div class="col-lg-5">
                                            <input type="text" class="form-control" name="observacion_eva" id="observacion_eva">
                                       </div>
                                       <a class="btn btn-default" onclick="observacion();" style="float: left;"><i class="glyphicon glyphicon-plus"></i></a>
                                </div>
                                <div id="dt_observacion"></div>
                             </div> 
                          </fieldset>                    
                        <div style="clear:both;"></div>
                        <div class="modal-footer">
                             <button class="btn btn-primary" id="btnRegistrar" name="btnRegistrar" >Registrar</button>
                             <button class="btn btn-default" data-dismiss="modal">Cancelar</button>
                        </div>
                    </form> 
                </div>
            
        </div>
            
             <!--Fin Regitro_evaluavcon-->
        </div>
</div>


<!-- #modalEditarRegistro -->        
<div id="modalEditarRegistro" class="modal fade">
    <div class="modal-dialog" style="width:1000px;">
        <div class="modal-content">
            <form id="agregar-equipo">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Editar  Registro</h4>
                </div>
                
                 <div class="modal-body">
                    <div class="form-horizontal">
                            <fieldset style="margin-top:20px;">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                            <label class="control-label col-lg-4">Cuadrilla</label>
                                        <div class="controls col-lg-5">
                                           <select id="select_cua" name="select_cua" class="form-control">
                                               <option>x</option>
                                               <option>x</option>
                                           </select>
                                        </div>
                                     </div>
                                      
                                    <div class="form-group">
                                        <label class="control-label col-lg-4">Fecha de Registro</label>
                                        <div class="col-lg-5">
                                            <input type="text" class="validate[required] form-control datepicker" name="fec_reg" id="fec_reg">
                                        </div>
                                    </div>
                            
                                    <div class="form-group">
                                        <label class="control-label col-lg-4">ODT</label>
                                        <div class="col-lg-5">
                                            <input type="text" class="validate[required] form-control" name="odt" id="odt">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="control-label col-lg-4">Hora Inicio</label>
                                        <div class="col-lg-5">
                                            <input type="time" class="validate[required] form-control" name="hora_ini" id="hora_ini">
                                        </div>
                                    </div>
                                        <div class="form-group">
                                        <label class="control-label col-lg-4">Hora Fin</label>
                                        <div class="col-lg-5">
                                            <input type="time" class="validate[required] form-control" name="hora_fin" id="hora_fin">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-lg-4">Vale Elect.\Manual</label>
                                        <div class="col-lg-5">
                                            <input type="text" class="validate[required] form-control" name="Vale" id="Vale">
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <legend></legend>
                            <fieldset style="margin-top:20px;"> 
                                <div class="col-lg-6">
                                    <div class="form-group">
                                            <label class="control-label col-lg-4">Estado Encontrado</label>
                                        <div class="controls col-lg-5">
                                           <select id="select_cua" name="select_cua" class="form-control">
                                               <option>A</option>
                                               <option>I</option>
                                           </select>
                                        </div>
                                     </div>
                                </div>
                                 <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="control-label col-lg-4">Problematica</label>
                                        <div class="col-lg-5">
                                            <input type="text" class="validate[required] form-control" name="problem" id="problem">
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <legend></legend>
                            <fieldset style="margin-top:20px;"> 
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="control-label col-lg-4">Presión</label>
                                        <div class="col-lg-5">
                                            <input type="text" class="validate[required] form-control" name="problem" id="problem">
                                        </div>
                                    </div>
                                     <div class="form-group">
                                        <label class="control-label col-lg-4">Tiempo Ciclo</label>
                                        <div class="col-lg-5">
                                            <input type="time" class="validate[required] form-control" name="tiem_ciclo" id="tiem_ciclo">
                                        </div>
                                    </div>
                                     <div class="form-group">
                                        <label class="control-label col-lg-4">Columna Fluido</label>
                                        <div class="col-lg-5">
                                            <input type="time" class="validate[required] form-control" name="colum_flui" id="colum_flui">
                                        </div>
                                    </div>
                                </div>

                                 <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="control-label col-lg-4">PSI Total Ciclos</label>
                                        <div class="col-lg-5">
                                            <input type="text" class="validate[required] form-control" name="psi_ciclo" id="psi_ciclo">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-lg-4">Eficiencia BBA</label>
                                        <div class="col-lg-5">
                                            <input type="text" class="validate[required] form-control" name="efic_bba" id="efic_bba">
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <legend></legend>
                            <fieldset style="margin-top:20px;"> 
                                <div class="col-lg-6">
                                   <div class="form-group">
                                        <label class="control-label col-lg-4">Tipo</label>
                                        <div class="controls col-lg-5">
                                           <select id="select_tipo" name="select_tipo" class="form-control">
                                               <option>x</option>
                                               <option>x</option>
                                           </select>
                                        </div>
                                     </div>
                                </div>
                                 <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="control-label col-lg-4">Valor</label>
                                        <div class="col-lg-5">
                                            <input type="text" class="validate[required] form-control" name="valor" id="valor">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <table id="dataTable" class="table table-bordered table-condensed table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <th>Tipo</th>
                                            <th>Valor</th>
                                            <th>Estado</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Trident</td>
                                            <td>4</td>
                                             <td>x</td>
                                            <td>
                                               <a href="#modalEditar_medicion" class="btn btn-success" data-toggle="modal">Editar</a>
                                        </tr>
                                        <tr>
                                            <td>Trident</td>
                                            <td>5</td>
                                            <td>C</td>
                                            <td><a href="#modalEditar_medicion" class="btn btn-success" data-toggle="modal">Editar</a></td>
                                        </tr>        
                                    </tbody>
                                    </table>
                                </div>
                            </fieldset>
                            <legend></legend>
                            <fieldset style="margin-top:20px;"> 
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="control-label col-lg-4">Color de Cable</label>
                                        <div class="col-lg-5">
                                            <input type="checkbox" class="validate[required]" name="color_cable []" id="color_cable" value="Negro"/> Negro<br>
                                            <input type="checkbox" class="validate[required]" name="color_cable []" id="color_cable" value="Verde"/> Verde<br>
                                       </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="control-label col-lg-4">Fuga Cabezal</label>
                                        <div class="col-lg-5">
                                            <input type="text" class="validate[required] form-control" name="fug_cabe" id="fug_cabe">
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                    </div>
                </div>
                <div style="clear:both;"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->        
<!-- #modalEditarRegistro -->   

<!-- #modalVerRegistro -->        
<div id="modalVerRegistro" class="modal fade">
    <div class="modal-dialog" style="width:1000px;">
        <div class="modal-content">
            <form id="agregar-equipo">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Reporte de Equipos</h4>
                </div>
                
                 <div class="modal-body">
                    <div class="form-horizontal">
                        <fieldset style="margin-top:20px;">
                            <div class="col-lg-6">
                                <div class="form-group">
                                        <label class="control-label col-lg-4">Cuadrilla</label>
                                        <div class="col-lg-7">
                                            <span input type="text" class="unidetable form-control" name="cuadrilla" id="cuadrilla"></span>
                                        </div>
                                    </div>
                                    
                                     <div class="form-group">
                                        <label class="control-label col-lg-4">Fecha de Registro</label>
                                        <div class="col-lg-7">
                                            <span input type="text" class="unidetable form-control" name="Fec_Reg" id="Fec_Reg"></span>
                                        </div>
                                    </div>
                                  
                                    <div class="form-group">
                                        <label class="control-label col-lg-4">ODT</label>
                                        <div class="col-lg-7">
                                            <span input type="text" class="unidetable form-control" name="ODT" id="ODT"></span>
                                        </div>
                                    </div>
                            </div>
                            <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="control-label col-lg-4">Hora Inicio</label>
                                        <div class="col-lg-7">
                                            <span input type="text" class="unidetable form-control" name="Hor_Inic" id="Hor_Inic"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-lg-4">Hora Fin</label>
                                        <div class="col-lg-7">
                                            <span input type="text" class="unidetable form-control" name="Hor_Fin" id="Hor_Fin"></span>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-lg-4">Vale Elect.\Manual</label>
                                        <div class="col-lg-7">
                                            <span input type="text" class="unidetable form-control" name="Vale" id="Vale"></span>
                                        </div>
                                    </div>
                            </div>
                        </fieldset>
                           <legend></legend>
                                <fieldset style="margin-top:20px;"> 
                                    <div class="col-lg-6">
                                       
                                          <div class="form-group">
                                                <label class="control-label col-lg-4">Estado Encontrado</label>
                                                <div class="col-lg-7">
                                                    <span input type="text" class="unidetable form-control" name="Est_Enc" id="Est_Enc"></span>
                                                </div>
                                            </div>
                                    </div>
                                     <div class="col-lg-6">
                                      <div class="form-group">
                                                <label class="control-label col-lg-4">Problematica</label>
                                                <div class="col-lg-7">
                                                    <span input type="text" class="unidetable form-control" name="Problematica" id="Problematica"></span>
                                                </div>
                                            </div>
                                      
                                    </div>
                                </fieldset>
                                   <legend></legend>
                                <fieldset style="margin-top:20px;"> 
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                                <label class="control-label col-lg-4">Presión</label>
                                                <div class="col-lg-7">
                                                    <span input type="text" class="unidetable form-control" name="Presion" id="Presion"></span>
                                                </div>
                                            </div>
                                         <div class="form-group">
                                                <label class="control-label col-lg-4">Tiempo Ciclo</label>
                                                <div class="col-lg-7">
                                                    <!-- <span input ></span> -->
                                                    <input type="text" class="form-control" name="Tiempo_Ciclo" id="Tiempo_ciclo" />
                                                </div>
                                            </div>
                                          <div class="form-group">
                                                <label class="control-label col-lg-4">Columna Fluido</label>
                                                <div class="col-lg-7">
                                                    <span input type="text" class="unidetable form-control" name="Col_Flu" id="Col_Flu"></span>
                                                </div>
                                           </div>
                                    </div>

                                     <div class="col-lg-6">
                                         <div class="form-group">
                                                <label class="control-label col-lg-4">PSI Total Ciclos</label>
                                                <div class="col-lg-7">
                                                    <span input type="text" class="unidetable form-control" name="PSI" id="PSI"></span>
                                                </div>
                                            </div>
                                        <div class="form-group">
                                                <label class="control-label col-lg-4">Eficiencia BBA</label>
                                                <div class="col-lg-7">
                                                    <span input type="text" class="unidetable form-control" name="BBA" id="BBA"></span>
                                                </div>
                                            </div>
                                    </div>
                                </fieldset>
                                <legend></legend>
                                <fieldset style="margin-top:20px;"> 
                                    <div class="col-lg-12">
                                        <table id="dataTable" class="table table-bordered table-condensed table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>Tipo</th>
                                                <th>Valor</th>
                                                <th>Estado</th>
                                             
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Trident</td>
                                                <td>4</td>
                                                 <td>x</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>Trident</td>
                                                <td>5</td>
                                                <td>C</td>
>
                                            </tr>        
                                        </tbody>
                                    </table>
                                    </div>
                                </fieldset>
                                <legend></legend>
                                
                      
                    </div>
                </div>
                                        
                
             
                <div style="clear:both;"></div>
               
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->        
<!-- #modalVerRegistro -->  


<style>
    div.dataTables_length {
        position: static;
    }
</style>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

<script type="text/javascript">
    
    var lista_nivelciclobomba= new Array();
    var lista_valorMedicion= new Array();
    var lista_trabajoRealizado = new Array();
    var lista_observacion = new Array();

    var contador_ncb=0;
    var contador_vm=0;
    var contador_tr=0;

    $(document).ready(function(){

        $(".datepicker").datepicker({
            dateFormat: 'dd/mm/yy'
        });

        metisTable(); metisSortable();
        //formValidation();
        $('form').validationEngine();

        $("#btnRegistrar").click(function(e){
            e.preventDefault();
             $.ajax({
              url:'<?php echo $ruta;?>evaluacion/registrar',
              type: 'POST',
              data: $('#frmRegEvaluacion').serialize(),
              success:function(msj){
                  if(msj.trim() == 'guardo'){
                      $("#OK").modal('show');
                  }else{
                      $("#NO").modal('show');
                  }
              }
            });   
        });

    });


    function nivel_ciclo_bomba(){
        var nivelciclobomba = {};
            nivelciclobomba.nro = contador_ncb+1;
            nivelciclobomba.tipo = $('#select_tipoNBC').val();
            nivelciclobomba.nomTipo = $("#select_tipoNBC option:selected").html();
            nivelciclobomba.valor = $('#valor_nbc').val();
            
            lista_nivelciclobomba.push(nivelciclobomba) ;
            
            //Limpiar Caja Texto
            document.getElementById('valor_nbc').value="";

            var $tabla = $("#dt_nbc");
            $tabla.find("table").remove();
            $tabla.append('<table id="dt_nbc" class="table table-bordered table-condensed table-hover table-striped" style="float: left;">'+
                           '<thead><tr><th>Tipo</th><th>Valor</th><th>Accion</th></tr></thead></table>');
            var tbody = $('<tbody></tbody>');
             jQuery.each(lista_nivelciclobomba, function (i, value) {
                 tbody.append(
                        '<tr><td style="text-align: center;" >' + value["nomTipo"]+ '</td>' +
                        '<td style="text-align: center;" >' + value["valor"] + '</td>' +
                        '<td><a class="btn btn-danger" onclick="del_nivelCicloBomba('+ value["nro"] +')">'+'<i class="glyphicon glyphicon-remove"></i>Eliminar</a></td></tr>');
            });
            $tabla.find("table").append(tbody);
    }

    function valor_medicion(){
            var valorMedicion = {};
            valorMedicion.nro = contador_vm+1;
            valorMedicion.tipo = $('#select_tipoValorM').val();
            valorMedicion.nomTipo = $("#select_tipoValorM option:selected").html();
            valorMedicion.valor = $('#valor_mv').val();
            
            lista_valorMedicion.push(valorMedicion) ;

            //Limpiar Caja Texto
            document.getElementById('valor_mv').value="";

            var $tabla = $("#dt_valorMedicion");
            $tabla.find("table").remove();
            $tabla.append('<table id="dt_valorMedicion" class="table table-bordered table-condensed table-hover table-striped" style="float: left;">'+
                           '<thead><tr><th>Tipo</th><th>Valor</th><th>Accion</th></tr></thead></table>');
            var tbody = $('<tbody></tbody>');
             jQuery.each(lista_valorMedicion, function (i, value) {
                 tbody.append(
                        '<tr><td style="text-align: center;" >' + value["nomTipo"]+ '</td>' +
                        '<td style="text-align: center;" >' + value["valor"] + '</td>' +
                        '<td><a class="btn btn-danger" onclick="del_valorMedicion('+ value["nro"] +')">'+'<i class="glyphicon glyphicon-remove"></i>Eliminar</a></td></tr>');
            });
            $tabla.find("table").append(tbody);
    }

    function valor_TrabajoRealizado(){
            var trabajoRealizado = {};
            trabajoRealizado.nro = contador_tr+1;
            trabajoRealizado.descripcion = $("#trabajo_realizado").val();
            
            lista_trabajoRealizado.push(trabajoRealizado) ;
            //Limpiar Caja Texto
            document.getElementById('trabajo_realizado').value="";

            var $tabla = $("#dt_trabajoRealiza");
            $tabla.find("table").remove();
            $tabla.append('<table id="dt_trabajoRealiza" class="table table-bordered table-condensed table-hover table-striped"><thead><tr><th>Descripcion</th><th>Acciones</th></tr></thead></table>');
            var tbody = $('<tbody></tbody>');
             jQuery.each(lista_trabajoRealizado, function (i, value) {
                 tbody.append(
                        '<tr><td style="text-align: center;" >' + value["descripcion"] + '</td>' +
                        '<td><a class="btn btn-danger" onclick="('+ value["nro"] +')">'+'<i class="glyphicon glyphicon-remove"></i>Eliminar</a></td></tr>');
            });
            $tabla.find("table").append(tbody);
    }

    function observacion(){

            var observacion = {};
            observacion.nro = contador_tr+1;
            observacion.descripcion = $("#observacion_eva").val();
            
            lista_observacion.push(observacion) ;
            //Limpiar Caja Texto
            document.getElementById('observacion_eva').value="";

            var $tabla = $("#dt_observacion");
            $tabla.find("table").remove();
            $tabla.append('<table id="dt_observacion" class="table table-bordered table-condensed table-hover table-striped"><thead><tr><th>Descripcion</th><th>Accion</th></tr></thead>');
            var tbody = $('<tbody></tbody>');
             jQuery.each(lista_observacion, function (i, value) {
                 tbody.append(
                        '<tr><td style="text-align: center;" >' + value["descripcion"] + '</td>' +
                        '<td><a class="btn btn-danger" onclick="('+ value["nro"] +')">'+'<i class="glyphicon glyphicon-remove"></i>Eliminar</a></td></tr>');
            });
            $tabla.find("table").append(tbody);
    }

    function del_nivelCicloBomba(id){

        jQuery.each(lista_nivelciclobomba, function (i, value) {
            if (value["nro"]==id){
                lista_nivelciclobomba.splice(i,1); 
            }
        });

        var $tabla = $("#dt_nbc");
        $tabla.find("table").remove();
        $tabla.append('<table id="dt_nbc" class="table table-bordered table-condensed table-hover table-striped" style="float: left;">'+
                           '<thead><tr><th>Tipo</th><th>Valor</th><th>Accion</th></tr></thead></table>');
            var tbody = $('<tbody></tbody>');
         jQuery.each(lista_nivelciclobomba, function (i, value) {
             tbody.append(
                        '<tr><td style="text-align: center;" >' + value["nomTipo"]+ '</td>' +
                        '<td style="text-align: center;" >' + value["valor"] + '</td>' +
                        '<td><a class="btn btn-danger" onclick="del_nivelCicloBomba('+ value["nro"] +')">'+'<i class="glyphicon glyphicon-remove"></i>Eliminar</a></td></tr>');
        });
        $tabla.find("table").append(tbody);
    }

    function del_valorMedicion(id){

        jQuery.each(lista_valorMedicion, function (i, value) {
            if (value["nro"]==id){
                lista_valorMedicion.splice(i,1); 
            }
        });

        var $tabla = $("#dt_valorMedicion");
            $tabla.find("table").remove();
            $tabla.append('<table id="dt_valorMedicion" class="table table-bordered table-condensed table-hover table-striped" style="float: left;">'+
                           '<thead><tr><th>Tipo</th><th>Valor</th><th>Accion</th></tr></thead></table>');
            var tbody = $('<tbody></tbody>');
             jQuery.each(lista_valorMedicion, function (i, value) {
                 tbody.append(
                        '<tr><td style="text-align: center;" >' + value["nomTipo"]+ '</td>' +
                        '<td style="text-align: center;" >' + value["valor"] + '</td>' +
                        '<td><a class="btn btn-danger" onclick="del_valorMedicion('+ value["nro"] +')">'+'<i class="glyphicon glyphicon-remove"></i>Eliminar</a></td></tr>');
            });
            $tabla.find("table").append(tbody);
    }

</script>