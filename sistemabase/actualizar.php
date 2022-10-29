<?php
include_once("model/functions.php");
session_start();
if(!$_SESSION['user_id']){
    header("location: index.php");
} 
$usuario_upd = $_POST['user_upd'];
$apellido_upd = $_POST['apellido_upd'];
$clave_upd = $_POST['clave_upd'];
$nombre_upd = $_POST['nombre_upd'];
$us_id = $_SESSION['user_id'];
$tipoArchivo=$_POST['foto_upd']['type'];
$nombreArchivo=$_POST['foto_upd']['name'];
$tamanoArchivo=$_POST['foto_upd']['size'];
$imagenSubida=fopen($_FILES['foto_upd']['tmp_name'],'r');
$binariosImagen=fread($imagenSubida, $tamanoArchivo);
$binariosImagen=mysqli_escape_string($conexion, $binariosImagen);
//$query="INSERT INTO users (foto, tipo) VALUES ('".$binariosImagen."', '".$tipoArchivo."')";
//$res=mysqli_query($conexion, $query);



$conexion = mysqli_connect(SERVER, USERDB, PASSDB, DATABASE);
   
    $sql_update = "UPDATE Sistema.users
    SET usuario='$usuario_upd', password='$clave_upd', nombres='$nombre_upd', apellidos='$apellido_upd',
    foto='$binariosImagen', tipo='$tipoArchivo'
    WHERE id=$us_id";
    
    if(mysqli_query($conexion,$sql_update)){
        header("location: editar_perfil.php");
    
    }else{
        echo "Error:".$sql_update."<br>".mysqli_error($conexion);
    
    }mysqli_close($conexion);

?>