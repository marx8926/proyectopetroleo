<?php $ruta = base_url(); ?>
<header class="head" style="margin-left:0;">
    <!-- ."main-bar -->
    <div class="main-bar" style="margin-left:0;">
        <h3 style="color:#000;" ><i class="fa fa-home" ></i> Usuario</h3>
    </div>
    <!-- /.main-bar -->
</header>
<div class="row">
    <div class="col-lg-12">
        <div class="box primary">
            <header>
                <h5>Buscar Usuario</h5>
                <a class="btn btn-default" href="#modalRegistrarUsuario" data-toggle="modal" style="float: right; margin: 5px;"><i class="glyphicon glyphicon-plus"></i></a>
            </header>
            <div id="collapse4" class="body">
                <table id="dataTable" class="table table-bordered table-condensed table-hover table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Usuario</th>
                            <th>Password</th>                                             
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            
                            <td><!--<a href="#modalRegistrarUsuario" class="btn btn-success" data-toggle="modal">Crear Usuario</a>-->
                                <a href="#modalEditarUsuario" class="btn btn-info" data-toggle="modal">Editar</a></td>
						</tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- #modalRegistrarUsuario -->        
<div id="modalRegistrarUsuario" class="modal fade">
    <div class="modal-dialog" style="width:500px;">
        <div class="modal-content">
            <form id="agregar-items">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Registrar Usuario</h4>
                </div>
                <div class="modal-body">
                    <div class="form-horizontal">
                        <fieldset style="margin-top:20px;">
                            <div class="col-lg-12">

                                <div class="form-group">
                                    <label class="control-label col-lg-4">Usuario</label>
                                    <div class="col-lg-7">
                                        <input type="text" class="validate[required] form-control" name="usuario" id="usuario">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="pass1" class="control-label col-lg-4">Password</label>
                                    <div class="col-lg-8">
                                        <input class="form-control" type="password" id="pass1" name="pass1"
                                        data-original-title="Please use your secure password" data-placement="top"/>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="control-label col-lg-4">Personal</label>
                                    <div class="controls col-lg-7">
                                       <select id="selectPersonal" name="selectPersonal" class="form-control">
                                           <?php if(count($listar_todos)>0): ?>
                                              <?php foreach ($listar_todos as $lt): ?>
                                                    <option value="<?php echo $lt->id; ?>"><?php echo $lt->nombre.', '.$lt->apellido; ?></option>      
                                              <?php endforeach; ?>
                                            <?php endif; ?>
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
<!-- /#modalRegistrarUsuario -->

<!-- #modalEditarUsuario -->        
<div id="modalEditarUsuario" class="modal fade">
        <div class="modal-dialog" style="width:500px;">
            <div class="modal-content">
                <form id="agregar-items">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Editar Usuario</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-horizontal">
                            <fieldset style="margin-top:20px;">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="control-label col-lg-4">Usuario</label>
                                        <div class="col-lg-7">
                                            <input type="text" class="validate[required] form-control" name="usuario" id="usuario">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="pass1" class="control-label col-lg-4">Password</label>
                                        <div class="col-lg-8">
                                        <input class="form-control" type="password" id="pass1"
                                        data-original-title="Please use your secure password" data-placement="top"/>
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="form-group">
                                        <label for="pass1" class="control-label col-lg-4">Confirmar Password</label>
                                        <div class="col-lg-8">
                                        <input class="form-control" type="password" id="pass1"
                                        data-original-title="Please use your secure password" data-placement="top"/>
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="form-group">
                                          <label class="control-label col-lg-4">Estado</label>
                                                <div class="controls col-lg-7">
                                                   <select id="selectprov" name="selectprov" class="form-control">
                                                       <option></option>
                                                       <option></option>
                                                   </select>
                                                </div>
                                    </div>
                                      
                                </div>
                                
                             
                            </fieldset>
                        </div>
                    </div>
                    <div style="clear:both;"></div>
                    <div class="modal-footer">
                           <button type="submit" class="btn btn-primary">Guardar </button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    </div>
                </form>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
</div>
<!-- /#modalEditarUsuario -->

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
    });
</script>