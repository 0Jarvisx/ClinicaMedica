<?php 

session_start();
if (!$_SESSION['user_id']){
    header("location: ../../index.php");
}


include_once("../../model/functions.php");
$usrClass = new pacientesModel();
$result = 0;
$respuesta = array();


$obtenerPaciente = (isset($_POST['obtener_paciente'])) ? $_POST['obtener_paciente'] : "0";
$crearPaciente = (isset($_POST['crear_paciente'])) ? $_POST['crear_paciente'] : "0";
$actualizarPaciente = (isset($_POST['actualizar_paciente'])) ? $_POST['actualizar_paciente'] : "0";
$eliminarPaciente = (isset($_POST['eliminar_paciente'])) ? $_POST['eliminar_paciente'] : "0";


if($obtenerPaciente == 1){
    
    $paciente_id = (isset($_POST['paciente_id'])) ? $_POST['paciente_id'] : "0";
        
    $result = $usrClass->getPacienteById($paciente_id);

    if ($fila = mysqli_fetch_array($result)){
        $respuesta['id'] = $fila['id'];
        $respuesta['nombre'] = $fila['nombre'];
        $respuesta['nit'] = $fila['nit'];
        $respuesta['telefono'] = $fila['telefono'];
        $respuesta['direccion'] = $fila['direccion'];
    }

    echo json_encode($respuesta);
}

if($crearPaciente == 1){
    
    $nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : "0";
    $nit = (isset($_POST['nit'])) ? $_POST['nit'] : "0";    
    $telefono = (isset($_POST['telefono'])) ? $_POST['telefono'] : "0";
    $direccion = (isset($_POST['direccion'])) ? $_POST['direccion'] : "0";
        
    $result = $usrClass->crearPaciente($nombre, $nit, $telefono, $direccion);
    
    $respuesta['resultado'] = $result;
    echo json_encode($respuesta);
}

if($actualizarPaciente == 1){
    
    $paciente_id = (isset($_POST['id'])) ? $_POST['id'] : "0";
    $nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : "0";
    $nit = (isset($_POST['nit'])) ? $_POST['nit'] : "0";    
    $telefono = (isset($_POST['telefono'])) ? $_POST['telefono'] : "0";
    $direccion = (isset($_POST['direccion'])) ? $_POST['direccion'] : "0";
      
    $result = $usrClass->actualizarPaciente($nombre, $nit, $telefono, $direccion,$paciente_id, $_SESSION['user_id']);
    $respuesta['resultado'] = $result;
    echo json_encode($respuesta);
}

if($eliminarPaciente == 1){
    
    $paciente_id = (isset($_POST['paciente_id'])) ? $_POST['paciente_id'] : "0";

    $result = $usrClass->eliminarPaciente($paciente_id);

    $respuesta['resultado'] = $result;
    echo json_encode($respuesta);
}
?>