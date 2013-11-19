<?php $ruta = base_url(); ?>
<header class="head" style="margin-left:0;">
    <!-- ."main-bar -->
    <div class="main-bar" style="margin-left:0;">
        <h3 style="color:#000;" ><i class="fa fa-home" ></i> Mantenimiento</h3>
    </div>
    <!-- /.main-bar -->
</header>
<div class="box primary">
    <header>
        <h5>Lista</h5>
        <a class="btn btn-default" href="#modalRegistrarMantenimiento" data-toggle="modal" style="float: right; margin: 5px;"><i class="glyphicon glyphicon-plus"></i></a>
    </header>
    <div id="collapse4" class="body">
        <table id="dataTable" class="table table-bordered table-condensed table-hover table-striped">
            <thead>
                <tr>
                    <th>Código Mantenimiento</th>                                                
                    <th>Equipo</th>
                    <th>Tipo</th>
                    <th>Fecha de Registro</th>
                    <th>Fecha Programada</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php if (count($listar_mantenimiento)>0): ?>
                    <?php foreach ($listar_mantenimiento as $lm ): ?>
                        <tr>
                            <td><?php echo $lm->id;?></td>
                            <td><?php echo $lm->equipo;?></td>
                            <td><?php echo $lm->tipo;?></td>
                            <td><?php echo $lm->fecRegistro;?></td>
                            <td><?php echo $lm->fecProgramada;?></td>
                            <td><?php echo $lm->estado;?></td>
                            <td>
                              <a href="#modalEditarMantenimiento" class="btn btn-success" data-toggle="modal">Editar</a>
                                <a href="#modalVerMantenimiento" class="btn btn-info" data-toggle="modal"><i class="glyphicon glyphicon-eye-open"></i> Ver</a>
                           </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif;?>
            </tbody>
        </table>
    </div>
</div>

<!-- #modalRegistrarMantenimiento -->        
<div id="modalRegistrarMantenimiento" class="modal fade">
    <div class="modal-dialog" style="width:1000px;">
        <div class="modal-content">
            <form id="frmMantenimiento" name="frmMantenimiento" action="#">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Registrar Mantenimiento</h4>
                </div>
                <div class="modal-body">
                        <div class="form-horizontal">
                        <div class="tab-content">
                            <div id="mantenimiento" class="tab-pane active">
                                <fieldset style="margin-top:20px;">
                                    <div class="col-lg-6">
                                         <div class="form-group">
                                            <label class="control-label col-lg-5">Tipo Mantenimiento</label>
                                            <div class="col-lg-6">
                                                <select id="select_tipo" name="select_tipo" class="form-control col-lg-3">
                                                   <option value="1">Trimestral</option>
                                                   <option value="2">Anual</option>
                                                   <option value="3">Semestral</option>
                                                </select>
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <label class="control-label col-lg-5">Equipo</label>
                                            <div class="col-lg-6">
                                                <select id="select_Equipo" name="select_Equipo" class="form-control col-lg-3">
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
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="control-label col-lg-5">Fecha Programada</label>
                                            <div class="col-lg-4">
                                                <input type="text" class="validate[required] form-control datepicker" name="fec_pro" id="fec_pro">
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="control-label col-lg-5">Estado</label>
                                            <div class="col-lg-6">
                                                <select id="select_Estado" name="select_Estado" class="form-control col-lg-3">
                                                   <option>1</option>
                                                   <option>2</option>
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
                    <button class="btn btn-primary" id="btnRegistrar" name="btnRegistrar" >Registrar</button>
                    <button class="btn btn-default" data-dismiss="modal">Cancelar</button>
                   
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->        
<!-- /#modalRegistrarMantenimiento -->

<!-- #modalEditarMantenimiento -->        
<div id="modalEditarMantenimiento" class="modal fade">
    <div class="modal-dialog" style="width:900px;">
        <div class="modal-content">
            <form id="editar-mantenimiento">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Editar Mantenimiento</h4>
                </div>
                <div class="modal-body">
                        <div class="form-horizontal">
                        <div class="tab-content">
                            <div id="mantenimiento" class="tab-pane active">
                                <fieldset style="margin-top:20px;">
                                    <div class="col-lg-6">
                                    
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Código de Mantenimiento</label>
                                            <div class="col-lg-7">
                                                <span input type="text" class="unidetable form-control" name="cod_man" id="cod_man"></span>
                                            </div>
                                        </div>
                                        
                                        
                                        
                                         <div class="form-group">
                                            <label class="control-label col-lg-4">Tipo</label>
                                            <div class="col-lg-7">
                                                <input type="text" class="form-control" name="tipo" id="tipo">
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <label class="control-label col-lg-4">Código del Equipo</label>
                                            <div class="col-lg-7">
                                                <input type="text" class="form-control" name="cod_equi" id="cod_equi">
                                            </div>
                                        </div>
                                                                                      
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Fecha de Registro</label>
                                            <div class="col-lg-7">
                                                <input type="text" class="form-control datepicker" name="fec_reg" id="fec_reg">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Fecha Programada</label>
                                            <div class="col-lg-7">
                                                <input type="text" class="form-control datepicker" name="fec_pro" id="fec_pro">
                                            </div>
                                        </div> 
                                         <div class="form-group">
                                      <label class="control-label col-lg-4">Estado</label>
                                            <div class="controls col-lg-7">
                                               <select id="selectEstado" name="selectEstado" class="form-control">
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
<!-- /#modalEditarMantenimiento -->

<!-- #modalVerMantenimiento -->        
<div id="modalVerMantenimiento" class="modal fade">
    <div class="modal-dialog" style="width:900px;">
        <div class="modal-content">
            <form id="ver-mantenimiento">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Datos de Mantenimiento</h4>
                </div>
                <div class="modal-body">
                        <div class="form-horizontal">
                        <div class="tab-content">
                            <div id="mantenimiento" class="tab-pane active">
                                <fieldset style="margin-top:20px;">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Código de Mantenimiento</label>
                                            <div class="col-lg-7">
                                                <span input type="text" class="unidetable form-control" name="cod_man" id="cod_man"></span>
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <label class="control-label col-lg-4">Tipo</label>
                                            <div class="col-lg-7">
                                                <span input type="text" class="unidetable form-control" name="tipo" id="tipo"></span>
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <label class="control-label col-lg-4">Código del Equipo</label>
                                            <div class="col-lg-7">
                                                <span input type="text" class=" unidetable form-control" name="cod_equi" id="cod_equi"></span>
                                            </div>
                                        </div>                                           
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Fecha de Registro</label>
                                            <div class="col-lg-7">
                                                 <span input type="text" class="uneditable form-control" name="fec_reg" id="fec_reg">12/5/2013</span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Fecha Programada</label>
                                            <div class="col-lg-7">
                                               <span input type="text" class="uneditable form-control" name="fec_pro" id="fec_pro">12/5/2013</span>
                                            </div>
                                        </div>  
                                        <div class="form-group">
                                             <label class="control-label col-lg-4">Estado</label>
                                                 <div class="controls col-lg-7">
                                                    <span input type="text" class="uneditable form-control" name="selectestado" id="selectestado">Activo</span>
                                                 </div>
                                        </div>                                                
                                    </div>
                                </fieldset>
                                
                            </div>
                           
                        </div>
                    </div>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>    
<!-- /#modalVerMantenimiento -->

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
        $(".datepicker").datepicker({
            dateFormat: 'YY/mm/dd'
        });
        metisTable(); metisSortable();
        //formValidation();
        $('form').validationEngine();

        $("#btnRegistrar").click(function(e){
            e.preventDefault();
             $.ajax({
              url:'<?php echo $ruta;?>mantenimiento/registrar',
              type: 'POST',
              data: $('#frmMantenimiento').serialize(),
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


    btnRegistrar
</script>