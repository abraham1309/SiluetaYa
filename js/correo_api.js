var camposLlenos = false;

function validarCampos() {
    var nombre = document.getElementById("inputNombre").value;
    var correo = document.getElementById("inputCorreo").value;

    if (!nombre == "" && !correo == "") {
        document.getElementById("divErrorCampos").style.display = "none";
        camposLlenos = true;
        validarRecaptcha();
    } else {
        document.getElementById("divErrorCampos").style.display = "flex";
        camposLlenos = false;
    }
}


function validarRecaptcha() {
    let divError = document.getElementById('divError');
    if (camposLlenos == false) {
        divError.style.display = "flex";
    } else {
        grecaptcha.execute();
    }
}

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

    html = "<div style='height: 100%; width: 100%; background: rgb(254, 214, 0); background: radial-gradient(circle, rgba(254, 214, 0, 1) 0%, rgba(241, 109, 34, 1) 85%); display: flex; justify-content: center; align-items: center; flex-direction: column;'>" + "<div style=' width: 80%; height: auto; margin-left: 10%; margin-right: 10%;'>" + "<h1 style='margin-bottom: -35px; text-align: center;'>Asunto: " + asunto + " </h1>" + "<h2 style='margin-bottom: -30px; text-align: center;'>Nombre: " + nombre + " </h2>" + "<p style='text-align: center; font-size: 16px;'> " + mensaje + " </p>" + "</div>" + "</div>";

    var datos = {
        nameFrom: nombre,
        emailFrom: correo,
        to: 'abraham@mobil.aullox.com',
        subject: asunto,
        text: mensaje,
        html
    };

    var id = generarId();
    var url = 'https://dev.api.ifscore.biz/ifscore/mail/1.0.0/send/app/portal_' + id;

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
                divConfirmacion.style.display = "none";
                divError.style.display = "none";
                divConfirmacion.style.display = "flex";

                setTimeout(function() {
                    divConfirmacion.style.display = "none";
                }, 10000);
            } else {
                if (response.code == 400) {
                    divError.style.display = "none";
                    divConfirmacion.style.display = "none";
                    divError.style.display = "flex";

                    setTimeout(function() {
                        divError.style.display = "none";
                    }, 10000);
                }
            }
        });

}