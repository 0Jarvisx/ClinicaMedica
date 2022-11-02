<?php
include_once("model/functions.php");
session_start();
if(!$_SESSION['user_id']){
    header("location: index.php");
} 

$us_id = $_SESSION['user_id'];

if (!empty($_FILES['imagen']['name'])){
	# code...


$dir = "../assets/img/fotos/";
	$target_file = $dir.basename($_FILES["imagen"]["name"]);
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


		}
	}




$conexion = mysqli_connect(SERVER, USERDB, PASSDB, DATABASE);
   
    $sql_update = "UPDATE Sistema.users
    SET imagen='$img'
    WHERE id=$us_id";

  
    if(mysqli_query($conexion,$sql_update)){



		


	
        header("location: editar_perfil.php");
      	
    
    }else{
        echo "Error al actualizar ".$sql_update."<br>".mysqli_error($conexion);
        	
           
    
    }mysqli_close($conexion);

?>