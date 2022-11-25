$('#btnAgregarPaciente').on('click', function () {
    
    var nombres = $('#nombresPaciente').val();
    var nit = $('#nitPaciente').val();    
    var telefono = $('#telefonoPaciente').val();
    var direccion = $('#direccionPaciente').val();
    
    if (nombres == ""){
        alert('El nombre es obligatorio');
        return false;
    }
    if (nit == "") {
        alert('El nit es obligatorio');
        return false;
    }

    if (telefono == "") {
        alert('El telefono es obligatorio');
        return false;
    }

    if (direccion == "") {
        alert('La direccion es obligatoria');
        return false;
    }

    $.ajax({
        type: 'POST',
        data: "crear_paciente=1&nombre=" + nombres + "&nit=" + nit + "&telefono=" + telefono + "&direccion=" + direccion,
        url: 'controller/Pacientes/pacienteController.php',
        dataType: 'json',
        success: function(data){
            var resultado = data.resultado;
            if(resultado === 1){
                $('#formNuevoPaciente').modal('hide');
                $('body').removeClass('modal-open');
                $('.modal-backdrop').remove();

                alert('Paciente creado exitosamente');
                cargarContenido('view/Pacientes/pacientesView.php');
            }else{
                alert('No se pudo crear el paciente');
            }
        }
    });

});


$('#btnActualizarPaciente').on('click', function () {
    
    var id = $('#id_updPaciente').val();
    var nombres = $('#nombres_updPaciente').val();
    var nit = $('#nit_updPaciente').val();    
    var telefono = $('#telefono_updPaciente').val();
    var direccion = $('#direccion_updPaciente').val();
    
    if (nombres == ""){
        alert('El nombre es obligatorio');
        return false;
    }
    if (nit == "") {
        alert('El nit es obligatorio');
        return false;
    }

    if (telefono == "") {
        alert('El telefono es obligatorio');
        return false;
    }

    if (direccion== "") {
        alert('La direccion es obligatoria');
        return false;
    }

    $.ajax({
        type: 'POST',
        data: "actualizar_paciente=1&id=" + id + "&nombre=" + nombres +"&nit="+nit+ "&telefono=" + telefono + "&direccion=" + direccion,
        url: 'controller/Pacientes/pacienteController.php',
        dataType: 'json',
        success: function(data){
            var resultado = data.resultado;
            if(resultado === 1){
                $('#formActualizaPaciente').modal('hide');
                $('body').removeClass('modal-open');
                $('.modal-backdrop').remove();

                alert('Paciente actualizado exitosamente');
                cargarContenido('view/Pacientes/pacientesView.php');
            }else{
                alert('No se pudo actualizar los datos del paciente');
            }
        }
    });

});

function obtenerPaciente(id){

    $.ajax({
        type: 'POST',
        data: "obtener_paciente=1&paciente_id=" + id,
        url: 'controller/Pacientes/pacienteController.php',
        dataType: 'json',
        success: function (data) {

            var id = data.id;
            var nombre = data.nombre;
            var nit = data.nit;
            var telefono = data.telefono;
            var direccion = data.direccion;
            
            $('#id_updPaciente').val(id);
            $('#nombres_updPaciente').val(nombre);
            $('#nit_updPaciente').val(nit);
            $('#telefono_updPaciente').val(telefono);
            $('#direccion_updPaciente').val(direccion);

            $('#formActualizaPaciente').modal('show');                            
        }
    });
}

function eliminarPaciente(id){

    $.ajax({
        type: 'POST',
        data: "eliminar_paciente=1&paciente_id=" + id,
        url: 'controller/Pacientes/pacienteController.php',
        dataType: 'json',
        success: function (data) {
            var resultado = data.resultado;
            if (resultado === 1) {                
                alert('Paciente Eliminado exitosamente');
                cargarContenido('view/Pacientes/pacientesView.php');
            } else {
                alert('No se pudo eliminar el paciente seleccionado');
            }
        }
    });

}