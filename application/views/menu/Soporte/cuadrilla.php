<?php $ruta = base_url(); ?>
<header class="head" style="margin-left:0;">
    <!-- ."main-bar -->
    <div class="main-bar" style="margin-left:0;">
        <h3 style="color:#000;" ><i class="fa fa-home" ></i> Cuadrilla</h3>
    </div>
    <!-- /.main-bar -->
</header>
<div class="row">
  <div class="col-lg-6">
      <div class="box primary">
        <header>
           <h5>Listar Cuadrilla</h5>
        </header>
        <div id="div-1" class="accordion-body collapse in body">
            <div id="componente" class="tab-pane">
                  <fieldset style="margin-top:20px;">
                          <table id="dataTable" class="table table-bordered table-condensed table-hover table-striped">
                          <thead>
                              <tr>
                                  <th>Codigo</th>
                                  <th>Nombre</th>
                                  <th>Acciones</th>
                              </tr>
                          </thead>
                          <tbody>
                              <?php if(count($listar_todos)>0):?>
                                <?php foreach ($listar_todos as $lt): ?>
                                      <tr>
                                          <td><?php echo $lt->id?></td>
                                          <td><?php echo $lt->nombre?></td>
                                      <td>
                                          <a href="#modalEditarCuadrilla" class="btn btn-success" data-toggle="modal">Editar</a>
                                      </td>
                                      </tr>  
                                <?php endforeach;?>
                              <?php endif;?>
                          </tbody>
                      </table>                      
                  </fieldset>
              </div>
          </div>
        </div>
  </div>

  <div class="col-lg-6">
      <div class="box primary">
          <header>
              <h5>Regisistrar Cuadrila</h5>

          </header>
              <div id="div-2" class="accordion-body collapse in body">
                  <form class="form-horizontal" id="frmCuadrilla" name="frmCuadrilla" accept="#">
                         <div class="form-group">
                             <label class="control-label col-lg-4">Nombre</label>
                             <div class="col-lg-5">
                                <input type="text" class="validate[required] form-control" name="nombre" id="nombre">
                             </div>
                         </div>
                         <div style="clear:both;"></div>
                          <div class="modal-footer">
                              <button class="btn btn-primary" id="btnRegistrar" name="btnRegistrar" 
                              data-toggle="modal" >Registrar</button>
                          </div>
                  </form>
              </div>
     </div>
  </div>
</div>

<!--#modalEditarCuadrilla-->
 <div id="modalEditarCuadrilla" class="modal fade">
  <div class="modal-dialog" style="width:500px;">
      <div class="modal-content">
          <form id="agregar-items">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title">Editar Cuadrilla</h4>
              </div>
              <div class="modal-body">
                  <div class="form-horizontal">
                      <fieldset style="margin-top:20px;">
                         <div class="form-group">
                            <label class="control-label col-lg-4">Nombre</label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" name="nombre_edit" id="nombre_edit">
                            </div>
                          </div>
                          <div class="control-group">
                             <label class="control-label col-lg-4">Estado</label>
                                  <div class="controls col-lg-6">
                                       <select id="selectEstado" name="selectEstado" class="form-control">
                                          <option>1</option>
                                          <option>2</option>
                                      </select>
                                  </div>
                          </div>
                      </fieldset>
                  </div>
              </div>
              <div style="clear:both;"></div>
              <div class="modal-footer"> 
                  <button class="btn btn-primary" id="btnActualizar" name="btnActualizar" >Guardar</button>
                  <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
              </div>
          </form>
      </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->  
<!--EDITAR CUADRILLA-->

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
    $(function() { 
        $(".datepicker").datepicker({
            dateFormat: 'dd/mm/yy'
        });
        //Mi Tabla
        metisTable(); metisSortable();
        //formValidation();
        $('form').validationEngine();
        //--------------------------
       

        $("#btnRegistrar").click(function(e){
            e.preventDefault();
               $.ajax({
              url:'<?php echo $ruta;?>cuadrilla/registrar',
              type: 'POST',
              data: $('#frmCuadrilla').serialize(),
              success:function(msj){
                  if(msj == 'guardo'){
                      $("#OK").modal('show');
                  }else{
                      $("#NO").modal('show');
                  }
              }
            });
          });
    });
</script>