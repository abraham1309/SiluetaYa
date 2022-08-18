/* Funcion para el boton al hacer scroll */
let seccion = document.querySelectorAll('article');
let boton = document.getElementById('btnColor');

window.onscroll = () => {
    seccion.forEach(sec => {
        let top = window.scrollY;
        let cordenas = sec.offsetTop - 150; /*Devuelve la posición superior (en píxeles) relativa a la parte superior del elemento*/
        let alto = sec.offsetHeight;
        let id = sec.getAttribute('id');



        if (top >= cordenas && top < cordenas + alto) {

            switch (id) {
                case 'carruselA':
                    boton.style.backgroundColor = "#000";

                    break;

                case 'articulo1':
                    boton.style.backgroundColor = "#28B9EB";

                    break;

                case 'articulo2':
                    boton.style.backgroundColor = "#FF6C00";
                    break;

                case 'articulo3':
                    boton.style.backgroundColor = "#000";;
                    break;

                case 'articulo4':
                    boton.style.backgroundColor = "#5B50AA";;
                    break;

                case 'articulo5':
                    boton.style.backgroundColor = "#3CC5DC";;
                    break;

                case 'articulo6':
                    boton.style.backgroundColor = "#BF930D";;
                    break;

                case 'articulo7':
                    boton.style.backgroundColor = "#000";;
                    break;

                case 'articulo8':
                    boton.style.backgroundColor = "#FE3402";;
                    break;

                case 'articulo9':
                    boton.style.backgroundColor = "#006432";;
                    break;
            }
        }
    });
};

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
    var rutaPrincipal = "";

    imgPrincipal.dataset.zoomImage = smallImg.src;
    rutaPrincipal = imgPrincipal.src;
    imgPrincipal.src = smallImg.src;

    smallImg.src = rutaPrincipal;

    /* Funcion para el zoom de la imagen del producto */
    if (anchoPantalla > 800) {
        imgPrincipal.classList.add('imgPrincipal2');
        $('.imgPrincipal2').ezPlus({
            zoomWindowPosition: 11,
            easing: true
        });

    }
}

/* Codigo especial para ver la imagen en los productos de KidzYa 
var clickCaja = false;
function verImagenKidz(smallImg) {
    var imgPrincipal = document.getElementById("imagenPrincipal");
    var rutaPrincipal = "";

    if (clickCaja == false) {
        imgPrincipal.style.width = "50%";
        clickCaja = true;

    } else {
        imgPrincipal.style.width = "35%";
        clickCaja = false;
    }

    imgPrincipal.dataset.zoomImage = smallImg.src;
    rutaPrincipal = imgPrincipal.src;
    imgPrincipal.src = smallImg.src;

    smallImg.src = rutaPrincipal;

    if (anchoPantalla > 800) {
        imgPrincipal.classList.add('imgPrincipal2');
        $('.imgPrincipal2').ezPlus({
            zoomWindowPosition: 11,
            easing: true
        });

    }
}
 */

/* Funciones para agregar y eliminar producto */
var label = document.getElementById("labelCantidad");
if (!label == "") {
    label.innerHTML = 1
}

var contador = 1;

function agregarProducto() {
    contador++;
    label.innerHTML = contador;
}

function eliminarProducto() {
    if (contador == 1) {

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