<?php $ruta = base_url(); ?>
<header class="head" style="margin-left:0;">
    <!-- ."main-bar -->
    <div class="main-bar" style="margin-left:0;">
        <h3 style="color:#000;" ><i class="fa fa-home"></i> Cambios</h3>
    </div>
    <!-- /.main-bar -->
</header>
<div class="box">
    <header>
        <h5>Cambios</h5>
        <a class="btn btn-default" href="#modalRegistrarCambio" data-toggle="modal" style="float: right; margin: 5px;"><i class="glyphicon glyphicon-plus"></i></a>
    </header>
    <div id="collapse4" class="body">
        <table id="dataTable" class="table table-bordered table-condensed table-hover table-striped">
            <thead>
                <tr>
                    <th>Equipo</th>                                                
                    <th>Componente</th>
                    <th>Nro Cambio</th>
                    <th>Fecha de Cambio</th>
                    <th>Observacion</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            
            <tbody>
                <?php if (count($listar_cambio)>0): ?>
                    <?php foreach ($listar_cambio as $lc ): ?>
                         <tr>
                            <td><?php echo $lc->Equipo; ?></td>
                            <td><?php echo $lc->Componente; ?></td>
                            <td><?php echo $lc->NroCambio; ?></td>
                            <td><?php echo $lc->FecCambio; ?></td>
                            <td><?php echo $lc->Observacion?></td>                                        
                            <td>
                              <a href="#modalEditarCambio" class="btn btn-success" data-toggle="modal">Editar</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif;?>
					  
            </tbody>
        </table>
    </div>
</div>

<!-- #modalRegistrarCambio -->        
<div id="modalRegistrarCambio" class="modal fade">
    <div class="modal-dialog" style="width:800px;">
        <div class="modal-content">
            <form id="frmCambio" name="frmCambio" action="#">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Registrar Cambio</h4>
                </div>
                <div class="modal-body">
                        <div class="form-horizontal">
                        <div class="tab-content">
                            <div id="cambio" class="tab-pane active">
                                <fieldset style="margin-top:20px;">
                                 
                                
                                <div class="col-lg-6">
                                    <div class="form-group">
                                      <label class="control-label col-lg-4">Equipo</label>
                                            <div class="controls col-lg-7">
                                               <select id="selectEquipo" name="selectEquipo" class="form-control" onclick="listar_componentes_select();">
                                                   <?php if (count($listar_equio)>0): ?>
                                                        <?php foreach ($listar_equio as $le ): ?>
                                                            <option value="<?php echo $le->id;?>"> 
                                                            <?php echo $le->codigo_eq;?> </option>
                                                        <?php endforeach; ?>
                                                    <?php endif;?>
                                               </select>
                                            </div>
                                    </div>
                                        
                                        
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Nro Cambio</label>
                                            <div class="col-lg-4">
                                                <input type="text" class="validate[required] form-control" name="nro_Cam" id="nro_Cam">
                                            </div>
                                        </div>
                                </div>
                                    
                                <div class="col-lg-6">
                                      <div class="form-group">
                                      <label class="control-label col-lg-4">Componente</label>
                                            <div class="controls col-lg-7">
                                               <select id="selectComponente" name="selectComponente" class="form-control">
                                               </select>

                                            </div>
                                </div>                                                  
                                       <div class="form-group">
                                            <label class="control-label col-lg-4">Fecha de Cambio</label>
                                            <div class="col-lg-7">
                                                <input type="text" class="validate[required] form-control datepicker" name="fec_cam" id="fec_cam">
                                            </div>
                                        </div>
                                       
                                        
                                    </div>
                                      
                                     <div class="form-group">
                                        <label class="control-label col-lg-2">Observación</label>
                                        <div class="col-lg-9">
                                            <textarea class="validate[required] form-control" name="observacion" id="observacion"></textarea>
                                        </div>
                                        
                                    </div>
                                </fieldset>
                            </div>
                           
                        </div>
                    </div>
                </div>
                <div style="clear:both;"></div>
                <div class="modal-footer"> 
                    <button class="btn btn-primary" id="btnRegistrar" name="btnRegistrar" >Registrar</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                   
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->        
<!-- /#modalRegistrarCambio -->

<!-- #modalEditarCambio -->        
<div id="modalEditarCambio" class="modal fade">
    <div class="modal-dialog" style="width:800px;">
        <div class="modal-content">
            <form id="editar-cambio">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Editar Cambio</h4>
                </div>
                <div class="modal-body">
                        <div class="form-horizontal">
                        <div class="tab-content">
                            <div id="cambio" class="tab-pane active">
                                 <fieldset style="margin-top:20px;">
                                 <div class="col-lg-6">
                                         <div class="form-group">
                                            <label class="control-label col-lg-4">Equipo</label>
                                            <div class="controls col-lg-7">
                                               <select id="selectEquipo_edit" name="selectEquipo_edit" class="validate[required] form-control">
                                                   <option>x</option>
                                                   <option>x</option>
                                               </select>
                                            </div>
                                        </div>
                                        
                                         <div class="form-group">
                                            <label class="control-label col-lg-4">Nro Cambio</label>
                                            <div class="col-lg-7">
                                                <input type="text" class="validate[required] form-control" name="cod_Cam_edi" id="cod_Cam_edit">
                                            </div>
                                        </div>
                                         <div class="form-group">
                                        <label class="control-label col-lg-4">Observación</label>
                                        <div class="col-lg-8">
                                            <textarea class="validate[required] form-control" name="observacion_edit" id="observacion_edit"></textarea>
                                        </div>
                                    </div>
                                                                                      
                                    </div>
                                    <div class="col-lg-6">
                                      <div class="form-group">
                                      <label class="control-label col-lg-4">Componente</label>
                                            <div class="controls col-lg-7">
                                               <select id="selectComponente_edit" name="selectComponente_edit" class="validate[required] form-control">
                                                   <option>x</option>
                                                   <option>x</option>
                                               </select>
                                            </div>
                                </div>                                                  
                                       <div class="form-group">
                                            <label class="control-label col-lg-4">Fecha de Cambio</label>
                                            <div class="col-lg-7">
                                                <input type="text" class="validate[required] form-control datepicker" name="fec_cam" id="fec_cam">
                                            </div>
                                        </div>
                                       <div class="form-group">
                                      <label class="control-label col-lg-4">Estado</label>
                                            <div class="controls col-lg-7">
                                               <select id="selectEstado" name="selectEstado" class="validate[required] form-control">
                                                   <option>x</option>
                                                   <option>x</option>
                                               </select>
                                            </div>
                                </div>   
                                        
                                    </div>
                                    
                                </fieldset>
                            </div>
                           
                        </div>
                    </div>
                </div>
                <div style="clear:both;"></div>
                <div class="modal-footer"> 
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                   
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>    
<!-- /#modalEditarCambio -->

<div class="modal fade" id="OK">
  <div class="modal-dialog" style="width:500px;">
    <div class="modal-content">
        <div class="modal-header">
           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
           <h4 class="modal-title">Mensaje</h4>
        </div>
        <div class="modal-body">
          <p>Registro Exitosa</p>
        </div>
        <div class="modal-footer">
          <a href="#" class="btn btn-primary" data-dismiss="modal" onclick="javascript:window.location.reload();">Close</a>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="NO">
  <div class="modal-dialog" style="width:500px;">
    <div class="modal-content">
       <div class="modal-header">
       <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
       <h4 class="modal-title">Mensaje</h4>
      </div>
      <div class="modal-body">
        <p>Registro Fallido</p>
      </div>
      <div class="modal-footer">
        <a href="#" class="btn btn-primary" data-dismiss="modal">Close</a>
      </div>
    </div>
  </div>
</div>

<style>
    div.dataTables_length {
        position: static;
    }
</style>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

<script>
    $(document).ready(function(){

        listar_componentes_select();

        $(".datepicker").datepicker({
          dateFormat: 'Y-m-d'
        });

        metisTable(); metisSortable();
    });

    $("#btnRegistrar").click(function(e){
            e.preventDefault();
             $.ajax({
              url:'<?php echo $ruta;?>cambio/registrar',
              type: 'POST',
              data: $('#frmCambio').serialize(),
              success:function(msj){
                  if(msj.trim() == 'guardo'){
                      $("#OK").modal('show');
                  }else{
                      $("#NO").modal('show');
                  }
              }
            });   
        });

    function listar_componentes_select(){
       var equipo = $("#selectEquipo").val().trim();
       var $tabla = $("#selectComponente");
       document.getElementById("selectComponente").innerHTML = "";
       $.ajax({
            type: 'POST',
            data: "select_Equipo="+equipo,
            dataType: "json",
            url:'<?php echo $ruta;?>cambio/listar_componentes_byEquipo',
            success:function(msj){
                jQuery.each( msj, function( key, value ) {
                     $tabla.append(
                    '<option value ="'+ value["id"]  + '">'+ value["descripcion"]+'</option>'
                    );
                });
            }
        });
        return false;
    }
</script>