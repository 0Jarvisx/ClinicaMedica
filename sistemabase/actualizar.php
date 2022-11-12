<?php
include_once("model/functions.php");
session_start();
if(!$_SESSION['user_id']){
    header("location: index.php");
} 


$apellido_upd = $_POST['apellido_upd'];
$clave_upd = $_POST['clave_upd'];
$nombre_upd = $_POST['nombre_upd'];

$us_id = $_SESSION['user_id'];


$_SESSION['user_nombre'] = $_POST['nombre_upd'];
$_SESSION['user_apellido'] = $_POST['apellido_upd'];




/*if (!empty($_FILES['imagen']['name'])){
	# code...

$target_dir = "assets/img/logos/fotos/";
	$target_file = $target_dir.basename($_FILES["imagen"]["name"]);
	$uploadok = 1;
	$imagefiletype = pathinfo($target_file, PATHINFO_EXTENSION);
	//check if image file is a actual image or fake image
	$check=getimagesize($_FILES["imagen"]["tmp_name"]);
	if($check!==false) {
		echo "archivo es una imagen - ". $check["mime"]. ".";
		$uploadok = 1;
	}else{
		echo "el archivo no es una imagen.";
		$uploadok=0;
	}
	
	
	//check if file already exists
	if(file_exists($target_file)){
		echo "lo siento, el archivo ya existe.";
		$uploadok=0;
	}
	
	//check file size
	if($_FILES["imagen"]["size"]>500000){
		echo "lo siento, tu archivo es demasiado grande.";
		$uploadok=0;
	}
	
	

		if(move_uploaded_file($_FILES["imagen"]["tmp_name"], $target_file)){
			
	$img=basename($_FILES["imagen"]["name"]);

*/


$conexion = mysqli_connect(SERVER, USERDB, PASSDB, DATABASE);
   
    $sql_update = "UPDATE Sistema.users
    SET  password='$clave_upd', nombres='$nombre_upd', apellidos='$apellido_upd'
    WHERE id=$us_id";

  
    if(mysqli_query($conexion,$sql_update)){
	
        header("location: main.php");
      	
    
    }else{
        echo "Error al actualizar ".$sql_update."<br>".mysqli_error($conexion);
        	
           
    
    }mysqli_close($conexion);

?>
