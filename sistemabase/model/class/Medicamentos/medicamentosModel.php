<?php 

class medicamentosModel {

    /**
     * Funcion para obtener el listado de medicamentos
     */
    function getMedicamentos(){
        $conexionClass = new Tools();
        $conexion = $conexionClass->conectar();

        $sql = "SELECT id,
                        nombre,                                                
                        estado 
                FROM medicamento ";
 
        $resultado = mysqli_query($conexion, $sql);
        $conexionClass->desconectar($conexion);
        return $resultado;
    }
    

    /**
     * Funcion para obtener el listado de medicamentos
     */
    function getMedicamentoById($medicamento_id){
        $conexionClass = new Tools();
        $conexion = $conexionClass->conectar();

        $sql = "SELECT id,
                        nombre,                                               
                        estado
                FROM medicamento where id = $medicamento_id";
 
        $resultado = mysqli_query($conexion, $sql);
        $conexionClass->desconectar($conexion);
        return $resultado;
    }
    /**
     * funcion para crear nuevo medicamento
     */
    function crearMedicamento($nombre){
        $conexionClass = new Tools();
        $conexion = $conexionClass->conectar();
        $sql = "INSERT INTO Sistema.medicamento
                            (nombre,
                                estado)
                            VALUES('$nombre',
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
     * Función para actualizar un medicamento
     */

    function actualizarMedicamento($nombre, $medicamento_id){
        $conexionClass = new Tools();
        $conexion = $conexionClass->conectar();
        $sql = "UPDATE Sistema.medicamento
                    SET
                        nombre = '$nombre',
                        estado = 'A'
                    WHERE
                        id = $medicamento_id";        
        
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
     * funcion para eliminar un medicamento por su id
     */
    function eliminarMedicamento($medicamento_id){
        $conexionClass = new Tools();
        $conexion = $conexionClass->conectar();
        $sql = "DELETE FROM medicamento WHERE id=$medicamento_id;";
        
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