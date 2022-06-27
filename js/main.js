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

//Metodo para cerrar el menu del navbar para celulares
function cerrarNavbar() {
    if (!$(this).parent().hasClass("dropdown"))
        $(".navbar-collapse").collapse("hide");
}

/* Codigo para el modal */
let cerrar = document.getElementById("btnCerrar");
let abrir = document.getElementById("btnAbrir");
let modal = document.getElementById("divModal");
let contenedorModal = document.getElementById("contenedorModal");
let body = document.getElementById("body");

abrir.style.cursor = "pointer";

abrir.addEventListener("click", function() {
    modal.style.opacity = "1";
    modal.style.visibility = "visible";
    body.classList.add("body-scroll");
    contenedorModal.classList.toggle("modal-cerrar");
});

cerrar.addEventListener("click", function() {
    contenedorModal.classList.toggle("modal-cerrar");
    modal.style.opacity = "0";
    modal.style.visibility = "hidden";
    body.classList.toggle("body-scroll");
});

/* Funcion del filtrado de busqueda */

let inputBuscador = document.getElementById("inputB");
let cajaResultados = document.getElementById("cajaResultados");

document.getElementById("inputB").addEventListener("keyup", buscador);

function buscador() {
    var filtro = inputBuscador.value.toUpperCase();
    var li = cajaResultados.getElementsByTagName("li");

    /* Se recorre los elementos */
    for (i = 0; i < li.length; i++) {
        var a = li[i].getElementsByTagName("a")[0];
        var valorTexto = a.textContent || a.innerText;

        if (valorTexto.toUpperCase().indexOf(filtro) > -1) {
            li[i].style.display = "";
            cajaResultados.style.display = "block";

            if (inputBuscador.value === "") {
                cajaResultados.style.display = "none";
            }
        } else {
            li[i].style.display = "none";
        }
    }
}