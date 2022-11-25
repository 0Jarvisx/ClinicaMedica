$('#btnAgregarMedicamento').on('click', function () {
    
    var nombres = $('#nombreMedicamento').val();
    
    
    if (nombres == ""){
        alert('El nombre es obligatorio');
        return false;
    }
    

    $.ajax({
        type: 'POST',
        data: "crear_medicamento=1&nombre=" + nombres,
        url: 'controller/Medicamentos/medicamentoController.php',
        dataType: 'json',
        success: function(data){
            var resultado = data.resultado;
            if(resultado === 1){
                $('#formNuevoMedicamento').modal('hide');
                $('body').removeClass('modal-open');
                $('.modal-backdrop').remove();

                alert('Medicamento creado exitosamente');
                cargarContenido('view/Medicamentos/medicamentosView.php');
            }else{
                alert('No se pudo crear el paciente');
            }
        }
    });

});


$('#btnActualizarMedicamento').on('click', function () {
    
    var id = $('#id_updMedicamento').val();
    var nombre = $('#nombre_updMedicamento').val();
    
    if (nombre == ""){
        alert('El nombre es obligatorio');
        return false;
    }

    $.ajax({
        type: 'POST',
        data: "actualizar_medicamento=1&medicamento_id=" + id+"&nombre="+nombre,
        url: 'controller/Medicamentos/medicamentoController.php',
        dataType: 'json',
        success: function(data){
            var resultado = data.resultado;
            if(resultado === 1){
                $('#formActualizaMedicamento').modal('hide');
                $('body').removeClass('modal-open');
                $('.modal-backdrop').remove();

                alert('Medicamento actualizado exitosamente');
                cargarContenido('view/Medicamentos/medicamentosView.php');
            }else{
                alert('No se pudo actualizar los datos del medicamento');
            }
        }
    });

});

function obtenerMedicamento(id){

    $.ajax({
        type: 'POST',
        data: "obtener_medicamento=1&medicamento_id=" + id,
        url: 'controller/Medicamentos/medicamentoController.php',
        dataType: 'json',
        success: function (data) {
            var id = data.id;
            var nombre = data.nombre;
            var estado = data.estado;
            
            $('#id_updMedicamento').val(id);
            $('#nombre_updMedicamento').val(nombre);

            $('#formActualizaMedicamento').modal('show');                            
        }
    });
}

function eliminarMedicamento(id){

    $.ajax({
        type: 'POST',
        data: "eliminar_medicamento=1&medicamento_id=" + id,
        url: 'controller/Medicamentos/medicamentoController.php',
        dataType: 'json',
        success: function (data) {
            var resultado = data.resultado;
            if (resultado === 1) {                
                alert('Medicamento Eliminado exitosamente');
                cargarContenido('view/Medicamentos/medicamentosView.php');
            } else {
                alert('No se pudo eliminar el medicamento seleccionado');
            }
        }
    });

}