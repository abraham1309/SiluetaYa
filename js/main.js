/* Funciones para la pagina de producto */
var anchoPantalla;
window.onload = function() {
    anchoPantalla = screen.width;

    /* Funcion para el zoom de la imagen del producto */
    if (anchoPantalla > 800) {

        $('.imgPrincipal').ezPlus({
            zoomWindowPosition: 11,
            easing: true
        });
    }
}

function verImagen(smallImg) {
    var imgPrincipal = document.getElementById("imagenPrincipal");
    imgPrincipal.dataset.zoomImage = smallImg.src;
    imgPrincipal.src = smallImg.src;

    /* Funcion para el zoom de la imagen del producto */
    if (anchoPantalla > 800) {
        imgPrincipal.classList.add('imgPrincipal2');
        $('.imgPrincipal2').ezPlus({
            zoomWindowPosition: 11,
            easing: true
        });

    }
}

/* Funciones para agregar y eliminar producto */
var label = document.getElementById("labelCantidad");
var contador = 0;

function agregarProducto() {
    contador++;
    label.innerHTML = contador;
}

function eliminarProducto() {
    if (contador == 0) {

    } else {
        contador--;

        label.innerHTML = contador;
    }
}