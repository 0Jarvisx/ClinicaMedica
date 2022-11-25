<?php 
session_start();
if (!$_SESSION['user_id']){
    header("location: ../../index.php");
}

include_once("../../model/functions.php");
$usrClass = new medicamentosModel();
$result = 0;
$respuesta = array();
$obtenerMedicamento = (isset($_POST['obtener_medicamento'])) ? $_POST['obtener_medicamento'] : "0";
$crearMedicamento = (isset($_POST['crear_medicamento'])) ? $_POST['crear_medicamento'] : "0";
$actualizarMedicamento = (isset($_POST['actualizar_medicamento'])) ? $_POST['actualizar_medicamento'] : "0";
$eliminarMedicamento = (isset($_POST['eliminar_medicamento'])) ? $_POST['eliminar_medicamento'] : "0";


if($obtenerMedicamento == 1){
    $medicamento_id = (isset($_POST['medicamento_id'])) ? $_POST['medicamento_id'] : "0";
        
    $result = $usrClass->getMedicamentoById($medicamento_id);

    if ($fila = mysqli_fetch_array($result)){
        $respuesta['id'] = $fila['id'];
        $respuesta['nombre'] = $fila['nombre'];
        
    }

    echo json_encode($respuesta);
}

if($crearMedicamento == 1){
    $nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : "0";
        
    $result = $usrClass->crearMedicamento($nombre);

    $respuesta['resultado'] = $result;
    echo json_encode($respuesta);
}
    
if($actualizarMedicamento == 1){
    $medicamento_id = (isset($_POST['medicamento_id'])) ? $_POST['medicamento_id'] : "0";
    $nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : "0";
     
    $result = $usrClass->actualizarMedicamento($nombre, $medicamento_id);
    $respuesta['resultado'] = $result;
    echo json_encode($respuesta);
    
}

if($eliminarMedicamento == 1){
    $medicamento_id = (isset($_POST['medicamento_id'])) ? $_POST['medicamento_id'] : "0";

    $result = $usrClass->eliminarMedicamento($medicamento_id);

    $respuesta['resultado'] = $result;
    echo json_encode($respuesta);
}
?>