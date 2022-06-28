<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ContactaYa</title>

    <link rel="stylesheet" href="../estilos/normalize.css">
    <link rel="stylesheet" href="../estilos/ConocenosYa.css">

    <!--Iconos-->
    <script src="https://kit.fontawesome.com/817731e670.js" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body id="body" class="body">
    <!--Menu de navegacion-->
    <nav class="navbar  navbar-expand-lg navbar-light bg-light fixed-top" id="navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="../index.html" style="margin-left: 5%;" onclick="cerrarNavbar()">
                <img src="../images/logo-nav.png" alt="" width="125">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav  ms-auto mb-2 mb-lg-0" style="margin-right: 5%;">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="./ConocenosYa.html" onclick="cerrarNavbar()">ConócenosYa!</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="./compraYa.html" onclick="cerrarNavbar()">CompraYa!</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="./vendeYa.html" onclick="cerrarNavbar()">VendeYa!</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="./app.html" onclick="cerrarNavbar()">App</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="./blogYa.html" onclick="cerrarNavbar()">BlogYa!</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" href="./contactaYa.php" onclick="cerrarNavbar()">ContactaYa!</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="./KidzYa.html" onclick="cerrarNavbar()">KidzYa!</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="./andyya.html" onclick="cerrarNavbar()">Andyya!</a>
                    </li>

                    <li class="nav-item" style="margin-right: 2%; margin-top: 5px;">
                        <a class="nav-link" href="./compraYa.html" style="padding: 0;" onclick="cerrarNavbar()">
                            <img src="../images/Icono-Carrito.png" style="width: 25px; " alt="" srcset="">
                        </a>
                    </li>

                    <li class="nav-item" style="margin-top: 5px;">
                        <a class="nav-link" style="padding: 0;" onclick="cerrarNavbar()">
                            <img src="../images/Icono-Lupa.png" style="width: 25px;" alt="" srcset="" id="btnAbrir">
                        </a>
                    </li>

                    <li class="nav-item" style="margin-left: 2%;">
                        <button style="margin-top: 2%; border: none; width: 150px; height: 38px; background-color: rgb(255, 106, 0); color: #fff; font-weight: bold;" onclick="cerrarNavbar()">
                            <a href="./compraYa.html" style="color: #fff; text-decoration: none;">
                                Comprar Ahora
                            </a>
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Modal para la busqueda -->
    <div class="div-modal" id="divModal">
        <div class="contenedor-modal modal-cerrar" id="contenedorModal">
            <div class="div-cuerpo">
                <img src="../images/Icono-Lupa.png" alt="" class="img-lupa">
                <input type="text" placeholder="Buscar" id="inputB">
                <img src="../images/circle-xmark-solid.svg" alt="" srcset="" class="img-cerrar" id="btnCerrar">
            </div>

            <div class="caja-resultados" id="cajaResultados">
                <ul>

                    <li>
                        <a href="./productos/SiluetaYa-Raiz-de-Tejocote.html">
                            <i class="fas fa-search"></i> SiluetaYa
                        </a>
                    </li>

                    <li>
                        <a href="./productos/SiluetaYa-365.html">
                            <i class="fas fa-search"></i> SiluetaYa 365
                        </a>
                    </li>

                    <li>
                        <a href="./productos/Siluetabs.html">
                            <i class="fas fa-search"></i> SiluetabsYa
                        </a>
                    </li>

                    <li>
                        <a href="./productos/SiluetaYa-Tejoforte.html">
                            <i class="fas fa-search"></i> SiluetaYa Tejoforte
                        </a>
                    </li>

                    <li>
                        <a href="./productos/MJ-YA.html">
                            <i class="fas fa-search"></i> MJ Ya
                        </a>
                    </li>

                    <li>
                        <a href="./productos/NeuYa.html">
                            <i class="fas fa-search"></i> NEUYa
                        </a>
                    </li>

                    <li>
                        <a href="./productos/UPP-Ya.html">
                            <i class="fas fa-search"></i> UPP Ya
                        </a>
                    </li>

                    <li>
                        <a href="./productos/DoreYa.html">
                            <i class="fas fa-search"></i> DoréYa
                        </a>
                    </li>

                    <li>
                        <a href="./productos/duo-NeuYa+MJYa.html">
                            <i class="fas fa-search"></i> Duo NeuYa + MJYa
                        </a>
                    </li>

                    <li>
                        <a href="./productos/duo-neuYa+Upp-Ya.html">
                            <i class="fas fa-search"></i> Duo NeuYa + Upp-Ya
                        </a>
                    </li>

                    <li>
                        <a href="./productos/duo-neuYa+Raíz-+de-Tejocote.html">
                            <i class="fas fa-search"></i> Duo NeuYa + raiz de tejocote
                        </a>
                    </li>

                    <li>
                        <a href="./productos/duo-raizdeTejocote+MJYa.html">
                            <i class="fas fa-search"></i> Duo raiz de tejocote + MJ-Ya
                        </a>
                    </li>

                    <li>
                        <a href="./productos/duo-Raiz-de-Tejocote+DoreYa.html">
                            <i class="fas fa-search"></i> Duo raiz de tejocote + DoreYa
                    </li>

                    <li>
                        <a href="./productos/duo-Raiz-de-Tejocote+UPP-Ya.html">
                            <i class="fas fa-search"></i> Duo raiz de tejocote + UPP-YA
                        </a>
                    </li>

                    <li>
                        <a href="./productos/duo-MJ+Ya+UPP-Ya.html">
                            <i class="fas fa-search"></i> Duo MJ-YA + UPP-Ya
                        </a>
                    </li>

                    <li>
                        <a href="./productos/duo-DoreYa+UPP-Ya.html">
                            <i class="fas fa-search"></i> Duo DoreYa + UPP-Ya
                        </a>
                    </li>

                    <li>
                        <a href="./productos/duo-DoreYa-MJ-Ya.html">
                            <i class="fas fa-search"></i> Duo DoreYa + MJ+Ya
                        </a>
                    </li>

                    <li>
                        <a href="./productos/MimitoYa.html">
                            <i class="fas fa-search"></i> MimitoYa
                    </li>

                    <li>
                        <a href="./productos/MultiYa.html">
                            <i class="fas fa-search"></i> MultiYa
                        </a>
                    </li>

                    <li>
                        <a href="./productos/ProtecYa.html">
                            <i class="fas fa-search"></i> ProtecYa
                        </a>
                    </li>

                    <li>
                        <a href="./productos/Paquete-ActivaYa.html">
                            <i class="fas fa-search"></i> Paquete ActivaYa
                        </a>
                    </li>

                    <li>
                        <a href="./publicaciones/ya-estan-aqui-conoce-los-nuevos-productos-de-SiluetaYa.html">
                            <i class="fas fa-search"></i> Blog, ¡Ya están aquí! Conoce los nuevos productos de Silueta Ya
                        </a>
                    </li>

                    <li>
                        <a href="./publicaciones/este-es-el-secreto-mejor-guardado-para-perder-peso.html">
                            <i class="fas fa-search"></i> Blog, Este es el secreto mejor guardado para perder peso
                        </a>
                    </li>

                    <li>
                        <a href="./publicaciones/tips-para-conseguir-la-silueta-que-quieres.html">
                            <i class="fas fa-search"></i> Blog, Sigue estos tips para conseguir la silueta que quieres, ¡este verano!
                        </a>
                    </li>

                    <li>
                        <a href="./publicaciones/como-puedo-ser-distribuidora-de-SiluetaYa.html">
                            <i class="fas fa-search"></i> Blog, ¿Cómo puedo ser distribuidora de Silueta Ya?
                        </a>
                    </li>

                    <li>
                        <a href="./publicaciones/el-mejor-regalo-para-papa-es-su-salud.html">
                            <i class="fas fa-search"></i> Blog, El mejor regalo para papá es su salud
                        </a>
                    </li>

                    <li>
                        <a href="./publicaciones/compra-segura-con-SiluetaYa.html">
                            <i class="fas fa-search"></i> Blog, Compra segura con SiluetaYa!
                        </a>
                    </li>

                    <li>
                        <a href="./publicaciones/por-que-siempre-tengo-hambre.html">
                            <i class="fas fa-search"></i> Blog, ¿Por qué siempre tengo hambre? Cinco posibles causas y cómo remediarlo
                        </a>
                    </li>

                    <li>
                        <a href="./publicaciones/5-alimentos-que-que-no-te-dejan-bajar-de-peso.html">
                            <i class="fas fa-search"></i> Blog, 5 alimentos que que no te dejan bajar de peso
                        </a>
                    </li>

                    <li>
                        <a href="./publicaciones/5-alimentos-ricos-en-potasio-que-debes-incluir-en-tu-alimentacion.html">
                            <i class="fas fa-search"></i> Blog, 5 alimentos ricos en potasio que debes incluir en tu alimentación
                        </a>
                    </li>

                    <li>
                        <a href="./publicaciones/dia-de-la-madre.html">
                            <i class="fas fa-search"></i> Blog, Día de la madre
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>


    <!-- Seccion del titulo -->
    <section class="seccion-titulo">
        <div class="div-general">
            <h1>ContactaYa</h1>
        </div>
    </section>

    <!-- Seccion del formulario -->
    <section class="seccion-formulario">
        <div class="div-general">
            <div class="div-foto">
                <img src="../images/conocenosYa/Contactanos-min.png" alt="" srcset="">
            </div>

            <div class="div-formulario">
                <form method="post">
                    <div class="div-cabezera">
                        <h2>Contáctanos</h2>
                        <p>Usa el siguiente formulario y en breve nos pondremos en contacto contigo.</p>
                    </div>

                    <br>
                    <div class="div-campo">
                        <p>Nombre*</p>
                        <input type="text" name="nombre" required>
                    </div>

                    <br>
                    <div class="div-campo">
                        <p>Email*</p>
                        <input type="text" name="correo" required>
                    </div>

                    <br>
                    <div class="div-campo">
                        <p>Asunto</p>
                        <select name="asunto">
                            <option value="value1">Unirme a la Empresa</option>
                            <option value="value2">2</option>
                            <option value="value3">3</option>
                        </select>
                    </div>

                    <br>
                    <div class="div-campo">
                        <p>Mensaje</p>
                        <textarea name="mensaje" rows="10" cols="50" style="resize: none;" required></textarea>
                    </div>

                    <?php 
                        include('../php/correo.php')
                    ?>

                    <br>
                    <input type="submit" name="enviar" value="enviar" class="boton">
                </form>
            </div>
        </div>
    </section>

    <section class="seccion-redes">
        <div class="div-general">
            <h2>Redes</h2>
            <br>

            <div class="div-iconos">
                <a href="https://www.facebook.com/SiluetaYaMex" target="_blank" rel="noopener noreferrer">
                    <i class="fa fa-facebook-f"></i>
                </a>

                <a href="https://www.instagram.com/siluetaya/" target="_blank" rel="noopener noreferrer">
                    <i class="fa fa-instagram"></i>
                </a>

                <a href="https://twitter.com/siluetaya" target="_blank" rel="noopener noreferrer">
                    <i class="fa fa-twitter"></i>
                </a>

                <a href="https://www.youtube.com/channel/UCxrzAuoLEZHA_ZutpuXHnQw" class="logo-youtube" target="_blank" rel="noopener noreferrer">
                    <i class="fa fa-youtube"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="row g-0">
            <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 div-logo">
                <img src="../images/Logo-en-blanco---Silueta-min.png" alt="SiluetaYa" srcset="">
            </div>

            <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 div-leyenda">
                <p>©2021 SiluetaYa.Com | <a href="./politicasPrivacidad.html" target="_blank" rel="noopener noreferrer"><strong>Políticas de Privacidad</strong></a></p>
            </div>

            <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 div-redes-sociales">
                <div class="div-iconos">
                    <a href="https://www.facebook.com/SiluetaYaMex" target="_blank" rel="noopener noreferrer">
                        <i class="fa fa-facebook-f"></i>
                    </a>

                    <a href="https://www.instagram.com/siluetaya/" target="_blank" rel="noopener noreferrer">
                        <i class="fa fa-instagram"></i>
                    </a>

                    <a href="https://twitter.com/siluetaya" target="_blank" rel="noopener noreferrer">
                        <i class="fa fa-twitter"></i>
                    </a>

                    <a href="https://www.youtube.com/channel/UCxrzAuoLEZHA_ZutpuXHnQw" class="logo-youtube" target="_blank" rel="noopener noreferrer">
                        <i class="fa fa-youtube"></i>
                    </a>
                    <a>

                    </a>
                    <a></a>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js " integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p " crossorigin="anonymous "></script>
    <script src="../js/main.js"></script>
</body>

</html>