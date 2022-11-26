<?php 

class pacientesModel {

    /**
     * Funcion para obtener el listado de pacientes
     */
    function getPacientes(){
        $conexionClass = new Tools();
        $conexion = $conexionClass->conectar();

        $sql = "SELECT id,
                        nombre,
                        nit,                        
                        telefono,
                        direccion,                                                
                        estado 
                FROM paciente ";
 
        $resultado = mysqli_query($conexion, $sql);
        $conexionClass->desconectar($conexion);
        return $resultado;
    }
    

    /**
     * Funcion para obtener el listado de pacientes
     */
    function getPacienteById($paciente_id){
        $conexionClass = new Tools();
        $conexion = $conexionClass->conectar();

        $sql = "SELECT id,
                        nombre,
                        nit,                        
                        telefono,
                        direccion,                                                
                        estado 
                FROM paciente where id = $paciente_id";
        
        $resultado = mysqli_query($conexion, $sql);
        $conexionClass->desconectar($conexion);
        return $resultado;
    }
    /**
     * funcion para crear nuevo paciente
     */
    function crearPaciente($nombre, $nit, $telefono, $direccion){
        $conexionClass = new Tools();
        $conexion = $conexionClass->conectar();
        $sql = "INSERT INTO Sistema.paciente
                (nombre,
                nit,
                telefono,
                direccion,
                estado)
                VALUES('$nombre',
                        'n$nit',
                        '$telefono',
                        '$direccion',
                        'A')";        

        
        $resultado = mysqli_query($conexion, $sql);
        if($resultado){
            $conexionClass->desconectar($conexion);
            return 1;
        }else{
            $conexionClass->desconectar($conexion);
            return 0;
        }
    }

    /**
     * Función para actualizar un paciente
     */

    function actualizarPaciente($nombre, $nit, $telefono, $direccion, $paciente_id){
        $conexionClass = new Tools();
        $conexion = $conexionClass->conectar();
        $sql = "UPDATE Sistema.paciente
            SET
                nombre = '$nombre',
                nit = '$nit',
                telefono ='$telefono',
                direccion = '$direccion',
                estado = 'A'
            WHERE
                id = $paciente_id";        
        
        $resultado = mysqli_query($conexion, $sql);
        if($resultado){
            $conexionClass->desconectar($conexion);
            return 1;
        }else{
            $conexionClass->desconectar($conexion);
            return 0;
        }
    }

    /**
     * funcion para eliminar un paciente por su id
     */
    function eliminarPaciente($paciente_id){
        $conexionClass = new Tools();
        $conexion = $conexionClass->conectar();
        $sql = "DELETE FROM paciente WHERE id = $paciente_id";
        
        $resultado = mysqli_query($conexion, $sql);
        if($resultado){
            $conexionClass->desconectar($conexion);
            return 1;
        }else{
            $conexionClass->desconectar($conexion);
            return 0;
        }
    }
}
?>