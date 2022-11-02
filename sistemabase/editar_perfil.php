<?php

session_start();
if(!$_SESSION['user_id']){
    header("location: index.php");
} 

include_once("../../model/functions.php");


?>



    <script src="assets/js/moduloUsuarios.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>
    <link rel="stylesheet" href="assets/css/editar.css">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->




<div class="limiter">

<div class="container-login100">
	<form class="foto" method="POST" action="foto.php">
		<div class="wrap-login100">
		<div class="login100-pic js-tilt" data-tilt>
		<IMG src="assets/img/fotos/<?php echo $_SESSION['imagen'];?>" style="height:50PX" />
				<div class="user"> <?php echo $_SESSION['user_nombre']." ".$_SESSION['user_apellido'];
                         ?></b></h4>
						 <hr class="colorgraph">
						 
						 <input type="file"  id="imagen" name="imagen" class="form-control" >
						<button class="img">Subir imagen</button>
						
                    </div>
					</form>
</div>

<form aling= center class="login100-form validate-form" method="POST" action="actualizar.php">
				
			<div class="editarPerfil">
			<h2>Editar perfil </h2>
			</div>
			<hr class="colorgraph">
            
			
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
                        <input type="text" name="nombre_upd" id="nombre" class="form-control" placeholder="<?php echo $_SESSION['user_nombre'];?>" tabindex="1">
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="text" name="apellido_upd" id="apellido" class="form-control" placeholder="<?php echo $_SESSION['user_apellido'];?>" tabindex="2">
					</div>
				</div>
			</div>
			<div class="form-group">
				<input type="nickname" name="user_upd" id="usuario" class="form-control" placeholder="<?php echo $_SESSION['username'];?>"  tabindex="4">
			</div>
		
				
					<div class="form-group">
						<input type="password" name="clave_upd" id="password" class="form-control" placeholder="Password" tabindex="5">
					</div>
		
		
			<hr class="colorgraph">
				<div class="container-login100-form-btn"><button class="login100-form-btn">Actualizar datos</button></div>
</div></div>
			</form>
</div>
</div>
</div>




</html>

<?php

