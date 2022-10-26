<?php

session_start();
if(!$_SESSION['user_id']){
    header("location: index.php");
} 

?>



<head>
    <script src="assets/js/moduloUsuarios.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>
    <link rel="stylesheet" href="assets/css/style2.css">
    <title>Perfil</title>
</head>
<body>
<div>
	<div>
        <div class="col-md-4 well" id="leftPanel">
            <div class="row">
                <div class="col-md-12">
					
                	<div>
        				<img src="assets/img/logos/fotos/user.png" class="img-circle img-thumbnail">
						
                        <div> <?php echo $_SESSION['user_nombre']." ".$_SESSION['user_apellido'];
                         ?></b></h4>
						 <hr class="colorgraph">
				<button class="foto">Seleccionar foto</button>
                    </div>
        		  </div>
        		</div>
            </div>
        </div>
        <div class="col-md-8 well" id="rightPanel">
            <div class="row">
    <div class="col-md-12">
    	<form align="center" class="form" method="POST" action="actualizar.php">
			<h2>Editar perfil </h2>
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
			<div class="row">
				
					<div class="form-group">
						<input type="password" name="clave_upd" id="password" class="form-control" placeholder="Password" tabindex="5">
					</div>
		
			</div>
			<hr class="colorgraph">
				<div class="form"><button class="update">Actualizar datos</button></div>
		</form>
	</div>
</div> 
</body>
</html>

<?php

