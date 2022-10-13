<?php

class loginModel {

    /**
     * METODO DE AUTENTICACION
     */

     function autenticar($user, $pass){
        $connClass = new Tools();
        $conexion = $connClass->conectar();

        $sql = "SELECT
                    *
                FROM
                    users
                WHERE
                    UPPER(user) = UPPER('$user')
                    and password = '$pass'";

        $resultado = mysqli_query($conexion, $sql);
        $connClass->desconectar($conexion);
        
        return $resultado;
     }


}

?>