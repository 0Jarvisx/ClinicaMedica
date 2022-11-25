<?php
session_start();
if (!$_SESSION['user_id']) {
    header("location: ../../index.php");
}

include_once("../../model/functions.php");

$usrClass = new medicamentosModel();

$result = array();
$resultRoles = array();
$result = $usrClass->getMedicamentos();

?>
<script src="assets/js/moduloMedicamentos.js"></script>
<link rel="stylesheet" href="assets/css/home.css">
<div class="card">
    <div class="card-header">
        <div
            class="titulo">
            <h1 align="center" class="titulo">LISTADO DE MEDICAMENTOS</h1>
        </div>
    </div>

    <div class="card-body">


        <div class="container">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button class="btn btn-success me-md-2" id="btnNuevoMedicamento" name="btnNuevoMedicamento" type="button"
                    data-bs-toggle="modal" data-bs-target="#formNuevoMedicamento">Nuevo Medicamento</button>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">FOTO</th>
                            <th scope="col">NOMBRE</th>
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
                            <td><?php echo $fila['nombre']; ?></td>
                            <td><?php echo $fila['estado']; ?></td>
                            
                            <td>
                                
                                    <button  class="btn_edit" id="btnEditarMedicamento" 
                                        name="btnEditarMedicamento" type="button" onclick="obtenerMedicamento(<?php echo $fila['id']; ?>);">Editar</button>
                                
                            </td>
                            <td>
                                    <button class="btn_elim" id="btnEliminarMedicamento"
                                        onclick="eliminarMedicamento(<?php echo $fila['id']; ?>);" name="btnEliminarMedicamento"
                                        type="button">Eliminar</button>
                               
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
    <!-- AQUI INICIA ESTA EL FORMULARIO MODAL PARA AGREGAR MEDICAMENTOS -->
    <div class="modal fade" id="formNuevoMedicamento" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="formNuevoMedicamento">Nuevo Medicamento</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
            
                <div class="modal-body">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="nombreMedicamento" placeholder="aqui va el nombre">
                        <label for="nombreMedicamento">Nombre</label>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="btnAgregarMedicamento">Agregar Medicamento</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- AQUI INICIA ESTA EL FORMULARIO MODAL PARA ACTUALIZAR MEDICAMENTOS -->
    <div class="modal fade" id="formActualizaMedicamento" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="formActualizaMedicamento">Medicamento</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="id_updMedicamento" disabled="">
                        <label for="id_updMedicamento">ID</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="nombre_updMedicamento" placeholder="aqui va el nombre">
                        <label for="nombre_updMedicamento">Nombre</label>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="btnActualizarMedicamento">Actualizar Medicamento</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                </div>

            </div>
        </div>
    </div>