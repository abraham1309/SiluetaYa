function generarId() {
    let result = '';
    const characters = '1234567890';
    for (let i = 0; i < 13; i++) {
        result += characters.charAt(Math.floor(Math.random() * characters.length));
    }
    return result;
}

function enviarCorreo() {
    let divConfirmacion = document.getElementById('divConfirmacion');
    let divError = document.getElementById('divError');

    /* Obtenemos los datos del formulario */
    var nombre = document.getElementById('inputNombre').value;
    var correo = document.getElementById('inputCorreo').value;
    var asunto = document.getElementById('selectAsunto').value;
    var mensaje = document.getElementById('areaMensaje').value;
    var datos = {
        nameFrom: nombre,
        emailFrom: correo,
        to: 'abraham@mobil.aullox.com',
        subject: asunto,
        text: mensaje
    };

    var id = generarId();
    var url = 'https://dev.api.ifscore.biz/ifscore/mail/1.0.0/send/multiplica/app/portal_' + id;

    /* Llamamos a la api y enviamos los datos */
    fetch(url, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(datos)

        }).then(respuesta => respuesta.json())
        .catch(error => console.error('El error es: ', error))
        .then((response) => {
            if (response.code == 201) {
                divError.style.display = "none";
                divConfirmacion.style.display = "flex";
            } else {
                if (response.code == 400) {
                    divConfirmacion.style.display = "none";
                    divError.style.display = "flex";
                }
            }
        });

}