// validaciones login
document.addEventListener('DOMContentLoaded', function () {
    var correoInput = document.getElementById('correo');
    var contrasenaInput = document.getElementById('contrasena');
    var btnIngresar = document.getElementById('btnIngresar');

    correoInput.addEventListener('input', validarCampos);
    contrasenaInput.addEventListener('input', validarCampos);

    function validarCampos() {
        // Verifica si ambos campos están llenos
        var camposLlenos = correoInput.value.trim() !== '' && contrasenaInput.value.trim() !== '';

        // Verifica el formato del correo
        var formatoCorreoCorrecto = correoInput.checkValidity();

        // Verifica la longitud y formato de la contraseña
        var formatoContrasenaCorrecto = contrasenaInput.checkValidity();

        // Habilita/deshabilita el botón según el estado de los campos
        btnIngresar.disabled = !camposLlenos || !formatoCorreoCorrecto || !formatoContrasenaCorrecto;
    }
});

// VALIDACIONES REGISTRO
function validarFormularioRegistro() {
    var nombre = document.getElementById('nombre').value.trim();
    var apellido = document.getElementById('apellido').value.trim();
    var correo = document.getElementById('correo').value.trim();
    var contrasena = document.getElementById('contrasena').value;
    var confirmarContrasena = document.getElementById('confirmarcontrasena').value;
    var telefono = document.getElementById('telefono').value.trim();

    // Validar que todos los campos obligatorios estén llenos
    if (nombre === '' || apellido === '' || correo === '' || contrasena === '' || confirmarContrasena === '') {
        AlertaCamposObligatorios();
        return false;
    }

    // Validar el formato del correo
    if (!correo.endsWith('@arbusta.net')) {
        AlertaFormatoCorreo();
        return false;
    }

    // Validar longitud de la contraseña
    if (contrasena.length < 6 || contrasena.length > 20) {
        AlertaContraseña();
        return false;
    }

    // Validar que las contraseñas coincidan
    if (contrasena !== confirmarContrasena) {
        AlertaContraseñas();
        return false;
    }

    // Validar formato del teléfono si se proporciona
    if (telefono !== '' && !/^\d{10}$/.test(telefono)) {
        AlertaTelefono();
        return false;
    }
    
    // Si todas las validaciones pasan, puedes enviar el formulario
    return true;
}

// ALERTAS

function AlertaCamposObligatorios() {
    Swal.fire({
        icon: 'error',
        title: 'Todos los campos son obligatorios.',
        text: 'Revisa que hayas llenado todos los campos',
    });
}

function AlertaFormatoCorreo() {
    Swal.fire({
        icon: 'error',
        title: 'El correo debe ser de dominio @arbusta.net.',
        text: 'Revisa que el correo que ingresaste sea de arbusta',
    });
}
function AlertaContraseña() {
    Swal.fire({
        icon: 'error',
        title: 'La contraseña debe tener entre 6 y 20 caracteres.',
        text: 'Revisa que la contraseña cumpla con la validacion',
    });
}
function AlertaContraseñas() {
    Swal.fire({
        icon: 'error',
        title: '¡Las contraseñas no coinciden!',
        text: 'Revisa que las contraseñas sean iguales en ambos campos',
    });
}
function AlertaTelefono() {
    Swal.fire({
        icon: 'error',
        title: 'El formato del teléfono es incorrecto. Debe tener 10 dígitos.',
        text: 'Revisa que el telefono cumpla con la validacion',
    });
}

// ver contraseña
document.addEventListener('DOMContentLoaded', function () {
    var contrasenaInput = document.getElementById('contrasena');
    var confirmarContrasenaInput = document.getElementById('confirmarcontrasena');
    var verContrasenaButton = document.getElementById('verContrasena');

    verContrasenaButton.addEventListener('click', function () {
        if (contrasenaInput.type === 'password' && confirmarContrasenaInput.type === 'password') {
            contrasenaInput.type = 'text';
            confirmarContrasenaInput.type = 'text';
        } else {
            contrasenaInput.type = 'password';
            confirmarContrasenaInput.type = 'password';
        }
    });
});

// metodo para pasar de pagina
function Metodo(pagina) {
    $.ajax({
        type: "POST",
        url: pagina,
        data: {},
        success: function (data) {
            $("#qCarga").html(data);
        }
    }
    );
};

function mostrarSweetAlertLogin() {
    // Puedes personalizar el mensaje según tus necesidades
    Swal.fire({
        icon: 'success',
        title: '¡Formulario enviado!',
        text: 'Tu formulario ha sido enviado correctamente.',
    });
}




