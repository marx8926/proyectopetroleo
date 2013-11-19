<?php $ruta = base_url(); ?>
<header class="head" style="margin-left:0;">
    <!-- ."main-bar -->
    <div class="main-bar" style="margin-left:0;">
        <h3 style="color:#000;" ><i class="fa fa-home" ></i> Personal</h3>
    </div>
    <!-- /.main-bar -->
</header>

<div class="box primary">
  	<header>
        <h5>LISTA</h5>
        <a class="btn btn-default" href="#modalRegistrarPersonal" data-toggle="modal" style="float: right; margin: 5px;"><i class="glyphicon glyphicon-plus"></i></a>
    </header>
      <div class="form-horizontal">
         <div class="tab-content" style="margin-top:2%">
            <table id="dataTable" class="table table-bordered table-condensed table-hover table-striped">
                <thead>
                    <tr>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>DNI</th>
                        <th>Direccion</th>
                        <th>Teléfono</th>
                        <th>Sexo</th>
                        <th>Cargo</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(count($listar_todos)>0): ?>
                      <?php foreach ($listar_todos as $lt): ?>
                          <tr>
                            <td><?php echo $lt->nombre; ?></td>
                            <td><?php echo $lt->apellido; ?></td>
                            <td><?php echo $lt->dni; ?></td>
                            <td><?php echo $lt->direccion; ?></td>
                            <td><?php echo $lt->telefono; ?></td>
                            <td><?php if ($lt->sexo == 'M' ) { echo "Masculino" ; } else { echo "Femenino";}  ?></td>
                            <td><?php echo $lt->cargo; ?></td>
                            <td>
                                <a href="#modalEditarPersonal" class="btn btn-success" data-toggle="modal">Editar</a>
                                <a href="#modalVerPersonal" class="btn btn-info" data-toggle="modal"><i class="glyphicon glyphicon-eye-open"></i> Ver</a>
                            </td>
                         </tr>
                      <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
         </div>
      </div>
</div>

<!-- #modalRegistrarPersonal -->        
<div id="modalRegistrarPersonal" class="modal fade">
    <div class="modal-dialog" style="width:1000px;">
        <div class="modal-content">
            <form  id="frmPersona" name="frmPersona" action="#">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Registrar Personal</h4>
                </div>
                <div class="modal-body">
                    <div class="form-horizontal">
                        <fieldset style="margin-top:20px;">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="control-label col-lg-4">Nombres</label>
                                    <div class="col-lg-7">
                                        <input type="text" class="validate[required] form-control" name="nombres" id="nombres">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-4">DNI</label>
                                    <div class="col-lg-7">
                                        <input type="text" class="validate[required] form-control" name="dni" id="dni">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-4">Teléfono</label>
                                    <div class="col-lg-7">
                                        <input type="text" class="validate form-control" name="telefono" id="telefono">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-4">Departamento</label>
                                    <div class="controls col-lg-7">
                                       <select id="selectDep" name="selectDep" class="form-control">
                                           <option>x</option>
                                           <option>x</option>
                                       </select>
                                    </div> 
                                </div>
                                <div class="form-group">
                                      <label class="control-label col-lg-4">Provincia</label>
                                            <div class="controls col-lg-7">
                                               <select id="selectprov" name="selectprov" class="form-control">
                                                   <option>x</option>
                                                   <option>x</option>
                                               </select>
                                            </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="control-label col-lg-4">Apellidos</label>
                                    <div class="col-lg-7">
                                        <input type="text" class="validate[required] form-control" name="apellidos" id="apellidos">
                                    </div>
                                </div>
                                 <div class="form-group">
                                      <label class="control-label col-lg-4">Sexo</label>
                                            <div class="controls col-lg-7">
                                               <select id="selectSexo" name="selectSexo" class="form-control">
                                                   <option value="M">Masculino</option>
                                                   <option value="F">Femenino</option>
                                               </select>
                                            </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-4">Cargo</label>
                                     <div class="controls col-lg-7">
                                          <select id="selectCargo" name="selectCargo" class="form-control">
                                                  <option value="1">Administrador</option>
                                                  <option value="2">Operario</option>
                                          </select>
                                      </div>
                                </div>
                                <div class="form-group">
                                      <label class="control-label col-lg-4">Distrito</label>
                                            <div class="controls col-lg-7">
                                               <select id="selectDist" name="selectDist" class="form-control">
                                                   <option>1</option>
                                                   <option>2</option>
                                               </select>
                                            </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-4">Dirección</label>
                                    <div class="col-lg-7">
                                        <input type="text" class="validate[required] form-control" name="direccion" id="direccion">
                                    </div>
                                </div>
                            </div>
                         
                        </fieldset>
                    </div>
                </div>
                <div style="clear:both;"></div>
                <div class="modal-footer">
                       <button class="btn btn-primary" id="btnRegistrar" name="btnRegistrar">Registrar </button>
                        <button class="btn btn-default" data-dismiss="modal">Cancelar</button>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
<!-- /#modalRegistrarPersonal -->

<!-- #modalEditarPersonal -->        
<div id="modalEditarPersonal" class="modal fade">
    <div class="modal-dialog" style="width:1000px;">
        <div class="modal-content">
            <form id="agregar-items">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Editar Personal</h4>
                </div>
                <div class="modal-body">
                    <div class="form-horizontal">
                        <fieldset style="margin-top:20px;">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="control-label col-lg-4">Nombres</label>
                                    <div class="col-lg-7">
                                        <input type="text" class="validate[required] form-control" name="nombres" id="nombres">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-4">DNI</label>
                                    <div class="col-lg-7">
                                        <input type="text" class="validate[required] form-control" name="dni" id="dni">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-4">Teléfono</label>
                                    <div class="col-lg-7">
                                        <input type="text" class="validate[required] form-control" name="telefono" id="telefono">
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <label class="control-label col-lg-4">Dirección</label>
                                    <div class="col-lg-7">
                                        <input type="text" class="validate[required] form-control" name="direccion" id="direccion">
                                    </div>
                                </div>
                                <div class="form-group">
                                      <label class="control-label col-lg-4">Provincia</label>
                                            <div class="controls col-lg-7">
                                               <select id="selectprov" name="selectprov" class="form-control">
                                                   <option>x</option>
                                                   <option>x</option>
                                               </select>
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
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="control-label col-lg-4">Apellidos</label>
                                    <div class="col-lg-7">
                                        <input type="text" class="validate[required] form-control" name="apellidos" id="apellidos">
                                    </div>
                                </div>
                                <div class="form-group">
                                     <label class="control-label col-lg-4">Cargo</label>
                                             <div class="controls col-lg-7">
                                                  <select id="selectCargo" name="selectCargo" class="form-control">
                                                          <option>Administrador</option>
                                                          <option>Operario</option>
                                                  </select>
                                              </div>
                                </div>
                                 <div class="form-group">
                                      <label class="control-label col-lg-4">Sexo</label>
                                            <div class="controls col-lg-7">
                                               <select id="selectSexo" name="selectSexo" class="form-control">
                                                   <option>Masculino</option>
                                                   <option>Femenino</option>
                                               </select>
                                            </div>
                                </div>
                                <div class="form-group">
                                      <label class="control-label col-lg-4">Departamento</label>
                                            <div class="controls col-lg-7">
                                               <select id="selectDep" name="selectDep" class="form-control">
                                                   <option>x</option>
                                                   <option>x</option>
                                               </select>
                                            </div>
                                </div>
                                  <div class="form-group">
                                      <label class="control-label col-lg-4">Distrito</label>
                                            <div class="controls col-lg-7">
                                               <select id="selectDist" name="selectDist" class="form-control">
                                                   <option>x</option>
                                                   <option>x</option>
                                               </select>
                                            </div>
                                </div>
                            </div>
                         
                        </fieldset>
                    </div>
                </div>
                <div style="clear:both;"></div>
                <div class="modal-footer">
                       <button class="btn btn-primary">Guardar </button>
                        <button class="btn btn-default" data-dismiss="modal">Cancelar</button>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
<!-- /#modalEditarPersonal -->

<!-- /#modalVerPersonal -->
<div id="modalVerPersonal" class="modal fade">
        <div class="modal-dialog" style="width:1000px;">
            <div class="modal-content">
                <form id="agregar-items">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Datos del Personal</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-horizontal">
                            <fieldset style="margin-top:20px;">
                                <div class="col-lg-6">
                                    
                                    <div class="form-group">
                                        <label class="control-label col-lg-4">Nombres</label>
                                        <div class="col-lg-7">
                                            <span input type="text" class="uneditable form-control" name="nombres" id="nombres">Juan Jose</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-lg-4">DNI</label>
                                        <div class="col-lg-7">
                                            <span input type="text" class="uneditable form-control" name="dni" id="dni">12345678</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-lg-4">Teléfono</label>
                                        <div class="col-lg-7">
                                            <span input type="text" class="uneditable form-control" name="telefono" id="telefono">871237833</span>
                                        </div>
                                    </div>
                                     <div class="form-group">
                                        <label class="control-label col-lg-4">Dirección</label>
                                        <div class="col-lg-7">
                                            <span input type="text" class="uneditable form-control" name="direccion" id="direccion">Jr Junin # 524</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                          <label class="control-label col-lg-4">Provincia</label>
                                                <div class="controls col-lg-7"> 
                                                 <span input type="text" class="uneditable form-control" name="selectprov" id="selectprov">Trujillo</span>
                                                </div>
                                    </div>
                                      <div class="form-group">
                                          <label class="control-label col-lg-4">Estado</label>
                                                <div class="controls col-lg-7">
                                                  <span input type="text" class="uneditable form-control" name="selectestado" id="selectestado">Activo</span>
                                                </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="control-label col-lg-4">Apellidos</label>
                                        <div class="col-lg-7">
                                            <span input type="text" class="uneditable form-control" name="apellidos" id="apellidos">Rosale Ruiz</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                         <label class="control-label col-lg-4">Cargo</label>
                                                 <div class="controls col-lg-7">
                                                 <span input type="text" class="unidetable form-control" name="selectCargo" id="selectCargo">Administrador</span>
                                                  </div>
                                    </div>
                                     <div class="form-group">
                                          <label class="control-label col-lg-4">Sexo</label>
                                                <div class="controls col-lg-7">
                                                      <span input type="text" class="unidetable form-control" name="selectSexo" id="selectSexo">Masculino</span>
                                                </div>
                                    </div>
                                    <div class="form-group">
                                          <label class="control-label col-lg-4">Departamento</label>
                                                <div class="controls col-lg-7">
                                                     <span input type="text" class="unidetable form-control" name="selectDep" id="selectDep">La Lbertad</span>
                                                </div>
                                    </div>
                                      <div class="form-group">
                                          <label class="control-label col-lg-4">Distrito</label>
                                                <div class="controls col-lg-7">
                                                  <span input type="text" class="unidetable form-control" name="selectDist" id="selectDist">Trujillo</span>
                                                </div>
                                    </div>
                                </div>
                             
                            </fieldset>
                        </div>
                    </div>
                </form>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
</div>
<!-- /#modalVerRegitro -->

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
        //$(".datepicker").datepicker({
          //  dateFormat: 'dd/mm/yy'
        //});

        metisTable(); metisSortable();
        //formValidation();
        $('form').validationEngine();

        
        $("#btnRegistrar").click(function(e){
            e.preventDefault();
               $.ajax({
              url:'<?php echo $ruta;?>personal/registrar',
              type: 'POST',
              data: $('#frmPersona').serialize(),
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