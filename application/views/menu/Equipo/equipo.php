<?php $ruta = base_url(); ?>
<header class="head" style="margin-left:0;">
    <!-- ."main-bar -->
    <div class="main-bar" style="margin-left:0;">
        <h3 style="color:#000;" ><i class="fa fa-home" ></i> Equipo</h3>
    </div>
    <!-- /.main-bar -->
</header>
<div class="box">
    <header>
        <ul class="nav nav-tabs">
            <li class="active">
                <a href="#Listado_registro" data-toggle="tab">Lista de Equipos</a>
            </li>
            <li>
                <a href="#Regitro_evaluacion" data-toggle="tab">Registro de Equipos</a>
            </li>
        </ul>

    </header>
    <div class="form-horizontal">
        <div class="tab-content">
            <!--Tab Lista Registro-->
            <div id="Listado_registro" class="tab-pane active">
                    <div id="collapse4" class="body">
                        <table id="dataTable" class="table table-bordered table-condensed table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>Código</th>
                                    <th>Bateria</th>
                                    <th>Serie</th>
                                    <th>Puesta en Marcha</th>
                                    <th>Carretel</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (count($listar_equio)>0): ?>
                                <?php foreach ($listar_equio as $le): ?>
                                    <tr>
                                        <td><?php echo $le->codigo_eq;?></td>
                                        <td><?php echo $le->bateria_eq;?></td>
                                        <td><?php echo $le->serie_eq;?></td>
                                        <td><?php echo $le->puestaMarca_eq;?></td>
                                        <td><?php echo $le->carretel_eq?></td>
                                        <td><a href="#<?php echo $le->id;?>" class="btn btn-info"><i class="glyphicon glyphicon-eye-open"></i> Ver</a></td>
                                    </tr>
                                <?php endforeach; ?>
                                <?php endif;?>
                            </tbody>
                        </table>
                    </div>
            </div>
            <!--Tab Formulario Registro-->
            <div id="Regitro_evaluacion" class="tab-pane">
              <fieldset >    
                <div class="modal-body">
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a href="#equipo" data-toggle="tab">Equipo</a>
                        </li>
                        <li>
                            <a href="#componente" data-toggle="tab">Componentes</a>
                        </li>
                        <li>
                            <a href="#itemsComponente" data-toggle="tab">Items Componentes</a>
                        </li>
                    </ul>
                    <div class="form-horizontal">
                        <div class="tab-content">
                            <div id="equipo" class="tab-pane active">
                                <form id="frmEquipo" name="frmEquipo" action="#" method="POST">
                                    <fieldset style="margin-top:20px;">
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="control-label col-lg-3">Nombre Equipo</label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control col-lg-3" name="codigo_eq" id="codigo_eq">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-lg-3">Serie</label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" name="serie_eq" id="serie_eq">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-lg-3">Batería</label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control col-lg-3" name="bateria" id="bateria">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-lg-3">Tipo</label>
                                                <div class="col-lg-6">
                                                    <select id="select_tipo" name="select_tipo" class="form-control col-lg-3">
                                                       <option>1</option>
                                                       <option>2</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="control-label col-lg-3">Puesta en Marcha</label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control datepicker col-lg-3" name="puesta_marcha" id="puesta_marcha">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-lg-3">Modelo de Cable</label>
                                                <div class="col-lg-6">
                                                    <select id="select_modelo_cable" name="select_modelo_cable" class="form-control col-lg-3">
                                                       <option>1</option>
                                                       <option>2</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-lg-3">Longitud de Cable</label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" name="long_cable" id="long_cable">
                                                </div>
                                            </div>
                                           
                                        </div>
                                        <div class="col-lg-4">
                                             <div class="form-group">
                                                <label class="control-label col-lg-3">Carrete</label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" name="carrete" id="carrete">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-lg-3">Tipo Colectora</label>
                                                <div class="col-lg-6">
                                                    <select id="select_tipoColector" name="select_tipoColector" class="form-control">
                                                       <option>1</option>
                                                       <option>2</option>
                                                   </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-lg-3">Contrapeso</label>
                                                <div class="col-lg-6">
                                                    <select id="select_tipoContrapeso" name="select_tipoContrapeso" class="form-control">
                                                       <option>1</option>
                                                       <option>2</option>
                                                   </select>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <div class="modal-footer">
                                        <button  class="btn btn-default" id="btnCancelar" >Cancelar</button>
                                        <button  class="btn btn-primary" id="btnEquipo" name="btnEquipo" >Guardar</button>
                                    </div>
                                </form>
                            </div>
                            <!--- Temrino Equipo -->
                            <div id="componente" class="tab-pane">
                                <form id="frmEquipo_Componente" name="frmEquipo_Componente" action="#" method="POST">
                                <fieldset style="margin-top:20px;">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Equipo</label>
                                            <div class="col-lg-3">
                                                <select id="select_Equipo" name="select_Equipo" class="form-control" onclick="listar_componentes_tabla()" >
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
                                    <hr/>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Ubicación</label>
                                            <div class="col-lg-6">
                                                <select id="select_ubicacion" name="select_ubicacion" class="form-control">
                                                   <option>1</option>
                                                   <option>2</option>
                                                   <option>3</option>
                                                   <option>4</option>
                                                   <option>5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Descripción</label>
                                            <div class="col-lg-6">
                                                <textarea class="form-control" name="descripcion_comp" id="descripcion_comp"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Código Petrobras</label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" name="cod_petrobras" id="cod_petrobras">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">N° Partes</label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" name="num_partes" id="num_partes">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-4"></label>
                                            <div class="col-lg-6">
                                                <button id="btnComponente" name="btnComponente" class="btn btn-metis-5" data-toggle="modal">Agregar Componente</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="dt_componente"></div>
                                    <!--<table id="dt_componente" class="table table-bordered table-condensed table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>Equipo</th>
                                                <th>Ubicacion</th>
                                                <th>Código Petrobas</th>
                                                <th>Descripcion</th>
                                                <th>Nro Partes</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>-->
                                </fieldset>
                                </form>
                            </div>
                            <!--- Temrino Componente -->
                            <div id="itemsComponente" class="tab-pane">
                                    <form id="frmItemComponente" name="frmItemComponente" action="#" >
                                    <fieldset style="margin-top:20px;">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="control-label col-lg-4">Equipo</label>
                                                <div class="col-lg-3">
                                                    <select id="select_Equipo_item" name="select_Equipo_item" class="form-control" onclick="listar_componentes_select()" tabindex="5">
                                                       <?php if (count($listar_equio)>0): ?>
                                                        <?php foreach ($listar_equio as $le): ?>
                                                            <option value="<?php echo $le->id;?>"> 
                                                            <?php echo $le->codigo_eq;?></option>
                                                        <?php endforeach; ?>
                                                        <?php endif;?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-lg-4">Componente</label>
                                                <div class="col-lg-3">
                                                    <select id="select_Componente_item" name="select_Componente_item" class="form-control" onclick="listar_item_tabla();">
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <hr/>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="control-label col-lg-4">Características</label>
                                                <div class="col-lg-7">
                                                    <textarea class="form-control" name="caracteristicas" id="caracteristicas"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-lg-4">Unidad de Medida</label>
                                                <div class="col-lg-7">
                                                    <input type="text" class="form-control" name="un_medida" id="un_medida">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="control-label col-lg-4">Descripción</label>
                                                <div class="col-lg-7">
                                                    <textarea class="form-control" name="desccripcion_item" id="desccripcion_item"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-lg-4"></label>
                                                <div class="col-lg-7">
                                                    <button class="btn btn-metis-5" data-toggle="modal" id="btnItems" name="btnItems">Agregar Item</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="dt_item"></div>
                                        <!--<table id="dt_item" class="table table-bordered table-condensed table-hover table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Características</th>
                                                    <th>Unidad de Medida</th>
                                                    <th>Descripción</th>
                                                    <th>Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Trident</td>
                                                    <td>Internet Explorer 5.0</td>
                                                    <td>Win 95+</td>
                                                    <td><a href="#" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Eliminar</a></td>
                                                </tr>                                        
                                                <tr>
                                                    <td>Trident</td>
                                                    <td>Internet Explorer 5.5</td>
                                                    <td>Win 95+</td>
                                                    <td><a href="#" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Eliminar</a></td>
                                                </tr>
                                            </tbody>
                                        </table>-->
                                    </fieldset>
                                </form>
                            <div>
                        </div>
                    </div>
                </div>
              </fieldset>
            </div>
            <!-- ----Formulario  Registro-->
        </div>
    </div>
</div>

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
        listar_componentes_tabla();
        

        $(".datepicker").datepicker({
          dateFormat: 'Y-m-d'
        });

        metisTable(); metisSortable();
        //formValidation();
        
        $("#btnEquipo").click(function(e){
            e.preventDefault();
             $.ajax({
              url:'<?php echo $ruta;?>equipo/registrar',
              type: 'POST',
              data: $('#frmEquipo').serialize(),
              success:function(msj){
                  if(msj.trim() == 'guardo'){
                      $("#OK").modal('show');
                  }else{
                      $("#NO").modal('show');
                  }
              }
            });   
        });

        $("#btnComponente").click(function(e){
            e.preventDefault();
             $.ajax({
              url:'<?php echo $ruta;?>equipo/registrar_componente',
              type: 'POST',
              data: $('#frmEquipo_Componente').serialize(),
              success:function(msj){
                  if(msj.trim() == 'guardo'){
                        jQuery.fn.reset = function(){
                            $(this).each(function(){this.reset();});
                        };
                        $("#frmEquipo_Componente").reset();
                      //$("#OK").modal('show');
                  }else{
                      $("#NO").modal('show');
                  }
              }
            });   
        });

        $("#btnItems").click(function(e){
            e.preventDefault();
             $.ajax({
              url:'<?php echo $ruta;?>equipo/registrar_item',
              type: 'POST',
              data: $('#frmItemComponente').serialize(),
              success:function(msj){
                  if(msj.trim() == 'guardo'){
                        jQuery.fn.reset = function(){
                            $(this).each(function(){this.reset();});
                        };
                        $("#frmItemComponente").reset();
                      //$("#OK").modal('show');
                  }else{
                      $("#NO").modal('show');
                  }
              }
            });   
        });

    });

    function listar_item_tabla(){
       var equipo = $("#select_Equipo_item").val();
       var componente = $("#select_Componente_item").val();
       
        //$("#dt_componente").show();
        var $tabla = $("#dt_item");
        $tabla.find("table").remove();
        $tabla.append('<table id="dt_item" class="table table-bordered table-condensed table-hover table-striped">'+
                           '<thead><tr><th>Características</th><th>Unidad de Medida</th><th>Descripción</th><th>Acciones</th></tr></thead></table>');
        var tbody = $('<tbody></tbody>');

       $.ajax({
            type: 'POST',
            data: "select_Equipo="+equipo+"&select_Componente="+componente,
            dataType: "json",
            url:'<?php echo $ruta;?>equipo/listar_item_byEquipoComponente',
            success:function(msj){
                jQuery.each( msj, function( key, value ) {
                     tbody.append(
                        '<tr><td >' + value["caracteristica"] + 
                        '</td><td >' + value["unidadMedida"] + 
                        '</td><td >' + value["descripcion"] + 
                        '</td><td >'+
                        '<a onclick="del_item('+ value["equipo"] + ','+ value["componente"] + ');" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Eliminar</a></td>'+
                        '</tr>'
                        );
                });

                $tabla.find("table").append(tbody);
            }
        });
        return false;
    }

    function  listar_componentes_tabla(){
       var equipo = $("#select_Equipo").val().trim();
       
       //$("#dt_componente").show();
        var $tabla = $("#dt_componente");
        $tabla.find("table").remove();
        $tabla.append('<table id="dt_componente" class="table table-bordered table-condensed table-hover table-striped">'+
                           '<thead><tr><th>Equipo</th><th>Ubicacion</th><th>Código Petrobas</th><th>Descripcion'+
                           '</th><th>Nro Partes</th><th>Acciones</th></tr></thead></table>');
        var tbody = $('<tbody></tbody>');

       $.ajax({
            type: 'POST',
            data: "select_Equipo="+equipo,
            dataType: "json",
            url:'<?php echo $ruta;?>equipo/listar_componentes_byEquipo',
            success:function(msj){
                jQuery.each( msj, function( key, value ) {
                     tbody.append(
                        '<tr><td >' + value["equipo"] + 
                        '</td><td >' + value["ubicacion"] + 
                        '</td><td >' + value["codigoPetrobas"] + 
                        '</td><td >' + value["descripcion"] + 
                        '</td><td >' + value["nroPartes"] + 
                        '</td><td >'+
                        '<a onclick="del_componente('+ value["id"] + ');" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Eliminar</a></td>'+
                        '</tr>'
                        );
                });

                $tabla.find("table").append(tbody);
            }
        });
        return false;
    }

    function listar_componentes_select(){
       var equipo = $("#select_Equipo_item").val().trim();
       var $tabla = $("#select_Componente_item");
       document.getElementById("select_Componente_item").innerHTML = "";
       $.ajax({
            type: 'POST',
            data: "select_Equipo="+equipo,
            dataType: "json",
            url:'<?php echo $ruta;?>equipo/listar_componentes_byEquipo',
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

    function del_componente(id){

    }

    function del_item(equipo,componente){

    }

</script>