<?php
session_start();
if (!$_SESSION['user_id']) {
    header("location: ../../index.php");
}

include_once("../../model/functions.php");

$usrClass = new pacientesModel();

$result = array();
$resultRoles = array();
$result = $usrClass->getPacientes();

?>
<script src="assets/js/moduloPacientes.js"></script>
<link rel="stylesheet" href="assets/css/home.css">
<link rel="stylesheet" href="assets/css/pacientes.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Sofia|Trirong">
<div class="card">
    <div class="card-header">
        <div
            class="titulo">
            <h1 align="center" class="titulo">LISTADO DE PACIENTES</h1>
            <style>
            h1{font-family: "Audiowide", sans-serif;}
            </style> 
        </div>
    </div>

    <div class="card-body">


        <div class="container">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button class="btn-neon1" id="btnNuevoPaciente" name="btnNuevoPaciente" type="button"
                    data-bs-toggle="modal" data-bs-target="#formNuevoPaciente">Nuevo Paciente
                    <span id="span1"></span>
                    <span id="span2"></span>
                    <span id="span3"></span>
                    <span id="span4"></span>
                </button>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">FOTO</th>
                            <th scope="col">NOMBRE</th>
                            <th scope="col">NIT</th>
                            <th scope="col">TELEFONO</th>
                            <th scope="col">DIRECCION</th>
                            <th scope="col">ESTADO</th>
                            <th scope="col">EDITAR</th>
                            <th scope="col">ELIMINAR</th>
                        </tr>
                    

                    </thead>
                    <tbody>

                        <?php 
                while ($fila = mysqli_fetch_array($result)){
                    ?>
                        <tr>
                            <th><?php echo $fila['id']; ?></th>
                            <td><img src="assets/img/fotos/<?php echo $fila['imagen']; ?>" /></td>
                            <td><?php echo $fila['nombre'];?></td>
                            <td><?php echo $fila['nit']; ?></td>
                            <td><?php echo $fila['telefono']; ?></td>
                            <td><?php echo $fila['direccion']; ?></td>
                            <td><?php echo $fila['estado']; ?></td>
                            
                            <td>
                                
                                    <button  class="btn_paciente" id="btnEditarPAciente" 
                                        name="btnEditarUsuario" type="button" onclick="obtenerPaciente(<?php echo $fila['id']; ?>);">Editar
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </button>
                                
                            </td>
                            <td>
                                    <button class="btn_paciente" id="btnEliminarPaciente"
                                        onclick="eliminarPaciente(<?php echo $fila['id']; ?>);" name="btnEliminarPaciente"
                                        type="button">Eliminar
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </button>
                               
                            </td>
                        </tr>

                    <?php 
                    }
                    ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- AQUI INICIA ESTA EL FORMULARIO MODAL PARA AGREGAR PACIENTES -->
    <div class="modal fade" id="formNuevoPaciente" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="formNuevoPaciente">Nuevo Paciente</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
            
                <div class="modal-body">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="nombresPaciente" placeholder="aqui van los nombres">
                        <label for="nombresPaciente">Nombres</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="nitPaciente" placeholder="aqui va el nit">
                        <label for="nitPaciente">NIT</label>
                    </div>


                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="telefonoPaciente" placeholder="telefono">
                        <label for="telefonoPaciente">Telefono</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="tex" class="form-control" id="direccionPaciente" placeholder="aqui va la direccion">
                        <label for="direccionPaciente">Direccion</label>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="btnAgregarPaciente">Agregar Paciente</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- AQUI INICIA ESTA EL FORMULARIO MODAL PARA ACTUALIZAR PACIENTES -->
    <div class="modal fade" id="formActualizaPaciente" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="formActualizaPaciente">Paciente</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="id_updPaciente" disabled="">
                        <label for="id_updPaciente">ID</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="nombres_updPaciente">
                        <label for="nombres_updPaciente">NOMBRES</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="nit_updPaciente" placeholder="aqui va el nit">
                        <label for="nit_updPaciente">NIT</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="telefono_updPaciente" placeholder="aqui va el telefono">
                        <label for="telefono_updPaciente">TELEFONO</label>
                    </div>


                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="direccion_updPaciente" placeholder="direccion">
                        <label for="direccion_updPaciente">DIRECCION</label>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="btnActualizarPaciente">Actualizar Paciente</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                </div>

            </div>
        </div>
    </div>
