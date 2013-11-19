<?php $ruta = base_url(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Login</title>
        <meta name="msapplication-TileColor" content="#5bc0de"/>
        <meta name="msapplication-TileImage" content="<?php echo $ruta;?>recursos/assets/img/metis-tile.png"/>
        
    <link rel="stylesheet" href="<?php echo $ruta;?>recursos/assets/lib/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo $ruta;?>recursos/assets/css/main.css">
    <link rel="stylesheet" href="<?php echo $ruta;?>recursos/assets/lib/magic/magic.css">
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-1669764-16', 'onokumus.com');
  ga('send', 'pageview');

</script>
  </head>
  <body class="login">

	      
<div class="container" style="margin-top:100px;">
    <div class="text-center">
        <h2 >SISTEMA LIFTOIL</h2>
    </div>
    <div class="tab-content">
        <div id="login" class="tab-pane active">
            <form action="index.html" class="form-signin">
                <p class="text-muted text-center">
                    Ingresa tu usuario y contraseña
                </p>
                <input type="text" id="usuario" name="usuario" placeholder="Usuario" class="form-control">
                <input type="password" id="password" name="password" placeholder="Contraseña" class="form-control">
                <button class="btn btn-lg btn-primary btn-block" id="btnlogin" name="btnlogin" >Entrar</button>
            </form>
        </div>
    </div>

</div>

	      
	   	<div class="modal hide" id="msj">
		  <div class="modal-header">
		    <button type="button" class="close" data-dismiss="modal">&times;</button>
		    <h3>Alerta..!!</h3>
		  </div>
		  <div class="modal-body">
		    <p>Usuario o clave incorrecta, por favor vuelva a intentar</p>
		  </div>
		  <div class="modal-footer">
		    <a href="#" class="btn btn-primary" data-dismiss="modal">Close</a>
		  </div>
		</div>

      <script src="<?php echo $ruta;?>recursos/assets/lib/jquery.min.js"></script>
      <script src="<?php echo $ruta;?>recursos/assets/lib/bootstrap/js/bootstrap.js"></script>
      
      <script>
            $('.list-inline li > a').click(function() {
                var activeForm = $(this).attr('href') + ' > form';
                $(activeForm).addClass('magictime swap');
                setTimeout(function() {
                    $(activeForm).removeClass('magictime swap');
                }, 1000);
            });

            $(document).ready(function(){
				$("#btnlogin").click(function(event){
					event.preventDefault();		
				    $.ajax({
				    	type: "POST",
				        data: $('#frmLogin').serialize(),
				        url:"<?php echo $ruta;?>login/validar_login",
				        success: function(msj){
				        	if(msj == 'ok'){
								window.location.href = "<?php echo $ruta;?>"+"menu/";
							}else{
								$('#msj').modal('show');	
							}
				        }
				    });
				});	
			});

       </script>

  </body>
</html>