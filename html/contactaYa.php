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

<body>
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
                        <a class="nav-link active" href="./contactaYa.html" onclick="cerrarNavbar()">ContactaYa!</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="./KidzYa.html" onclick="cerrarNavbar()">KidzYa!</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="./andyya.html" onclick="cerrarNavbar()">Andyya!</a>
                    </li>

                    <li class="nav-item" style="margin-right: 2%; margin-top: 5px;">
                        <a class="nav-link" href="#" style="padding: 0;" onclick="cerrarNavbar()">
                            <img src="../images/Icono-Carrito.png" style="width: 25px; " alt="" srcset="">
                        </a>
                    </li>

                    <li class="nav-item" style="margin-top: 5px;">
                        <a class="nav-link" href="#" style="padding: 0;" onclick="cerrarNavbar()">
                            <img src="../images/Icono-Lupa.png" style="width: 25px;" alt="" srcset="">
                        </a>
                    </li>

                    <li class="nav-item" style="margin-left: 2%;">
                        <button style="margin-top: 2%; border: none; width: 150px; height: 38px; background-color: rgb(255, 106, 0); color: #fff; font-weight: bold;" onclick="cerrarNavbar()">Comprar
                                Ahora
                            </button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

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
                        <input type="text" name="nombre" required >
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

                    <br>
                    <input type="submit" name="enviar" value="enviar" class="boton">
                </form>

                <?php 
                    include('../php/correo.php')
                ?>
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