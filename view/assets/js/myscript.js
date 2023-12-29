function registrarUsuario() {
    let contrasena = $('#contrasena').val();
    let confirmarcontrasena = $('#confirmarcontrasena').val();
    if (contrasena === confirmarcontrasena) {
        $.ajax({
            type: "POST",
            url: "../controller/usuarios.php",
            data: {
                'nombre': $('#nombre').val(),
                'apellido': $('#apellido').val(),
                'correo': $('#correo').val(),
                'telefono': $('#telefono').val(),
                'contrasena': $('#contrasena').val(),
                'confirmarcontrasena': $('#confirmarcontrasena').val(),
                'metodo': 'r'
            },
            success: function (data) {
                alert(data);
                $('#nombre').val('');
                $('#apellido').val('');
                $('#correo').val('');
                $('#telefono').val('');
                $('#contrasena').val('');
                $('#confirmarcontrasena').val('');

                mostrarSweetAlertRegistroSuccess();
            }
        });
    } else {
    }
}

function mostrarSweetAlertRegistroSuccess() {
    Swal.fire({
        icon: 'success',
        title: '¡Registrado correctamente!',
        text: 'Formulario enviado con exito',
    });
}

