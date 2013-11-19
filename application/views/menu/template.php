<?php $ruta = base_url(); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>SISTEMA LIFTOIL</title>
        <meta name="msapplication-TileColor" content="#5bc0de"/>
        <!--<meta name="msapplication-TileImage" content="<?php echo $ruta;?>recursos/assets/img/metis-tile.png"/>-->

        <link rel="stylesheet" href="<?php echo $ruta;?>recursos/assets/lib/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="<?php echo $ruta;?>recursos/assets/css/main.css"/>
        <link rel="stylesheet" href="<?php echo $ruta;?>recursos/assets/lib/Font-Awesome/css/font-awesome.css"/>
        
        <link rel="stylesheet" href="<?php echo $ruta;?>recursos/assets/css/theme.css">
        <link rel="stylesheet" href="<?php echo $ruta;?>recursos/assets/lib/uniform/themes/default/css/uniform.default.css">
        <link rel="stylesheet" href="<?php echo $ruta;?>recursos/assets/lib/inputlimiter/jquery.inputlimiter.1.0.css">
        <link rel="stylesheet" href="<?php echo $ruta;?>recursos/assets/lib/chosen/chosen.min.css">
        <link rel="stylesheet" href="<?php echo $ruta;?>recursos/assets/lib/colorpicker/css/colorpicker.css">
        <link rel="stylesheet" href="<?php echo $ruta;?>recursos/assets/lib/tagsinput/jquery.tagsinput.css">
        <link rel="stylesheet" href="<?php echo $ruta;?>recursos/assets/lib/daterangepicker/daterangepicker-bs3.css">

        <link rel="stylesheet" href="<?php echo $ruta;?>recursos/assets/lib/datatables/css/DT_bootstrap.css">
        <link rel="stylesheet" href="<?php echo $ruta;?>recursos/assets/lib/validationengine/css/validationEngine.jquery.css">
        <link rel="stylesheet" href="<?php echo $ruta;?>recursos/assets/lib/bootstrap/css/datepicker.css">
        <link rel="stylesheet" href="<?php echo $ruta;?>recursos/assets/lib/switch/static/stylesheets/bootstrap-switch.css">

        <script src="<?php echo $ruta;?>recursos/assets/lib/modernizr-build.min.js"></script>

        <style>
            div.dataTables_length {
                position: static;
            }
            .dropdown-menu {
                z-index: 1041;
            }
        </style>

    </head>
    <body class="hide-sidebar" >
        <div id="wrap">
            <div id="top">
                <!-- .navbar -->
                <!--<nav class="navbar navbar-inverse navbar-static-top">-->
                <nav class="navbar navbar-inverse navbar-static-top">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <header class="navbar-header">
                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        	<span class="sr-only">Toggle navigation</span>
                        	<span class="icon-bar"></span>
                        	<span class="icon-bar"></span>
                        	<span class="icon-bar"></span>
                      </button>
                      
                      <a href="index.html" class="navbar-brand"><img src="<?php echo $ruta;?>recursos/assets/img/logo.png" alt=""></a>
                      
                  </header>
    

                    <div class="topnav">

                        <div class="btn-toolbar">
                            <div class="btn-group">
                                <a href="login.html" data-toggle="tooltip" data-original-title="Logout" data-placement="bottom" class="btn btn-metis-1 btn-sm">
                		           <i class="fa fa-power-off"></i>
                                </a>
                            </div>
                        </div>

                    </div>


                    <!-- /.topnav -->
                    <div class="collapse navbar-collapse navbar-ex1-collapse">
                        <!-- .nav -->
                        <ul class="nav navbar-nav">
                            <li><a href="<?php echo $ruta;?>menu/">INICIO</a></li>
                            <li class='dropdown '>
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    EVALUACION <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo $ruta;?>evaluacion/">Registrar</a></li>
                                    <li><a href="#">Reporte</a></li>
                                </ul>
                            </li>
                            <li class='dropdown '>
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    MANTENIMIENTO <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo $ruta;?>mantenimiento/">Registrar</a></li>
                                    <li><a href="#">Reporte</a></li>
                                </ul>
                            </li>
                            <li class='dropdown '>
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    CAMBIOS <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo $ruta;?>cambio/">Registrar</a></li>
                                    <li><a href="#">Reporte</a></li>
                                </ul>
                            </li>
                            <li class='dropdown '>
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    EQUIPO <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo $ruta;?>equipo/">Registrar</a></li>
                                    <li><a href="#">Reporte</a></li>
                                </ul>
                            </li>
                            <li class='dropdown '>
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    SOPORTE <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo $ruta;?>cuadrilla/">CUADRILLA</a></li>
                                    <li><a href="<?php echo $ruta;?>personal/">PERSONAL</a></li>
                                    <li><a href="<?php echo $ruta;?>usuario/">USUARIO</a></li>
                                </ul>
                            </li>
                        </ul>
                        <!-- /.nav -->
                    </div>
        </nav>
        <!-- /.navbar -->

        <!-- header.head -->
            <!--<header class="head">
                <div class="main-bar">
                    <h3><i class="fa fa-home"></i> Metis</h3>
                </div>
            </header>-->
        <!-- end header.head -->


            </div>
            <!-- /#top -->
            <!-- /#left -->

            <div id="content">
                    <div class="inner">

                        <div class="col-lg-12">
                                
                            <!-- Aqui va el contenido-->
                            <?php echo $cuerpo;?>

                        </div>

                    </div>
                    <!-- end .inner -->
            </div>
            <!-- end #content -->

            

        </div>
        <!-- /#wrap -->


        <div id="footer">
            <p>2013 &copy; UCV</p>
        </div>
        

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?php echo $ruta;?>recursos/assets/lib/jquery.min.js"><\/script>')</script> 
        <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
        <script src="<?php echo $ruta;?>recursos/assets/lib/bootstrap/js/bootstrap.js"></script>
        <script src="<?php echo $ruta;?>recursos/assets/lib/uniform/jquery.uniform.min.js"></script>
        <script src="<?php echo $ruta;?>recursos/assets/lib/inputlimiter/jquery.inputlimiter.1.3.1.min.js"></script>
        <script src="<?php echo $ruta;?>recursos/assets/lib/chosen/chosen.jquery.min.js"></script>
        <script src="<?php echo $ruta;?>recursos/assets/lib/daterangepicker/daterangepicker.js"></script>
        <script src="<?php echo $ruta;?>recursos/assets/lib/daterangepicker/moment.min.js"></script>
        <script src="<?php echo $ruta;?>recursos/assets/lib/bootstrap/js/bootstrap-datepicker.js"></script>

        <script src="<?php echo $ruta;?>recursos/assets/lib/datatables/jquery.dataTables.js"></script>
        <script src="<?php echo $ruta;?>recursos/assets/lib/colorpicker/js/bootstrap-colorpicker.js"></script>
        <script src="<?php echo $ruta;?>recursos/assets/lib/tagsinput/jquery.tagsinput.min.js"></script>
        <script src="<?php echo $ruta;?>recursos/assets/lib/validVal/js/jquery.validVal.min.js"></script>
        <script src="<?php echo $ruta;?>recursos/assets/lib/jquery.dualListbox-1.3/jquery.dualListBox-1.3.min.js"></script>
        <script src="<?php echo $ruta;?>recursos/assets/lib/autosize/jquery.autosize.min.js"></script>
        <script src="<?php echo $ruta;?>recursos/assets/lib/timepicker/js/bootstrap-timepicker.min.js"></script>

        <script src="<?php echo $ruta;?>recursos/assets/lib/datatables/DT_bootstrap.js"></script>
        <script src="<?php echo $ruta;?>recursos/assets/lib/tablesorter/js/jquery.tablesorter.min.js"></script>
        <script src="<?php echo $ruta;?>recursos/assets/lib/touch-punch/jquery.ui.touch-punch.min.js"></script>
        <script src="<?php echo $ruta;?>recursos/assets/lib/switch/static/js/bootstrap-switch.min.js"></script>
        
        <script src="<?php echo $ruta;?>recursos/assets/lib/validationengine/js/jquery.validationEngine.js"></script>
        <script src="<?php echo $ruta;?>recursos/assets/lib/validationengine/js/languages/jquery.validationEngine-es.js"></script>
        <script src="<?php echo $ruta;?>recursos/assets/lib/jquery-validation-1.11.1/dist/jquery.validate.min.js"></script>
        <script src="<?php echo $ruta;?>recursos/assets/lib/jquery-validation-1.11.1/localization/messages_ja.js"></script>


        <script src="<?php echo $ruta;?>recursos/assets/js/main.js"></script>

    </body>
</html>