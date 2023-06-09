<?php
session_start();
if (!isset($_SESSION['id_Cliente'])) {
    header("Location: ../index.html");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Modelo/principal.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,300&family=Sigmar&display=swap"
        rel="stylesheet">
    <script src="https://kit.fontawesome.com/eb8f9c6f22.js" crossorigin="anonymous"></script>
    <title>Cafeteria</title>
</head>

<body>
    <header>
        <div id="logo">
            <img src="../Imagenes/logo.png" alt="">
        </div>

        <h1>Los Amigos</h1>

        <nav>
            <ul>
                <li><a href="#nosotros">Nosotros</a></li>
                <li><a href="#comida">Menu</a></li>
                <li><a href="#reservacion">Reservacion</a></li>
            </ul>
            <ul>
                <li><a href="#mejores">Mejores Productos</a></li>
                <li><a href="../Vista/cerrar.php">Cerrar Sesion</a></li>
            </ul>
        </nav>

    </header>

    <!-- Carrusel -->

    <section class="inicio">

        <div id="apartado">
            <section id="anuncio">
                <H2>Invita a tus amigos y familiares a vivir la experiencia</H2>
                <img src="../Imagenes/logo.png" alt="">
            </section>
        </div>

        <div class="carrusel">
            <ul>
                <li><img src="../Imagenes/c1.jpg" alt=""></li>
                <li><img src="../Imagenes/c2.jpg" alt=""></li>
                <li><img src="../Imagenes/c3.jpg" alt=""></li>
                <li><img src="../Imagenes/c4.jpg" alt=""></li>
            </ul>

        </div>

    </section>

    <!-- Nosotros -->

    <section id="nosotros">
        <div class="nosotrosIn" id="infoNosotros">
            <p>
                Nuestra cafeteria tiene los mejores platillos de la ciudad, podra hacer sus reservaciones de
                todo tipo y de diferente costo en nuetra pagina, tambien queremos que nuestros clientes tengan la mejor
                experiencia del mundo.
            </p>
        </div>
        <div class="nosotrosIn" id="carrusel2">
            <ul>
                <li><img src="../Imagenes/c5.jpg" alt=""></li>
                <li><img src="../Imagenes/c6.jpg" alt=""></li>
            </ul>
        </div>
    </section>

    <!-- Diseñarodes -->

    <section id="diseño">
        <!-- Titolo diseño -->
        <div id="tituloDiseño">
            <h2>
                Diseñadores
            </h2>
        </div>

        <div id="diseñadores">
            <div class="parrafoD">
                <h3>Sebastian Galindo</h3>
                <ul>
                    <li><a href="https://www.facebook.com/"><i class="fa-brands fa-facebook"
                                style="color: #005eff;"></i></a></li>
                    <li><a href="https://www.instagram.com/"><i class="fa-brands fa-instagram"
                                style="color: #ff00ea;"></i></a></li>
                    <li><a href="https://www.google.com/intl/es-419/gmail/about/"><i
                                class="fa-solid fa-envelope"></i></a></li>
                </ul>
            </div>
            <div class="parrafoD">
                <h3>Luiz Angel</h3>
                <ul>
                    <li><a href="https://www.facebook.com/"><i class="fa-brands fa-facebook"
                                style="color: #005eff;"></i></a></li>
                    <li><a href="https://www.instagram.com/"><i class="fa-brands fa-instagram"
                                style="color: #ff00ea;"></i></a></li>
                    <li><a href="https://www.google.com/intl/es-419/gmail/about/"><i
                                class="fa-solid fa-envelope"></i></a></li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Menu -->
    <section id="comida">
        <!-- titulo comida -->
        <div id="tituloComida">
            <h2>Tipo de alimentos que se ofrecen</h2>
        </div>
        <!-- carrucel -->
        <section id="comidaCarrusel">
            <ul>
                <li>
                    <img src="../Imagenes/cafe.jpg " alt="">
                    <div class="capa">
                        <h3>Cafe</h3>
                        <p>
                            Cafe de diferentes sacores y preparado por
                            expertos
                        </p>
                    </div>
                </li>
                <li>
                    <img src="../Imagenes/comida.jpg" alt="">
                    <div class="capa">
                        <h3>Comida</h3>
                        <p>
                            Platillos suculentos y muy deliciosos.
                        </p>
                    </div>
                </li>
            </ul>
            <ul>
                <li>
                    <img src="../Imagenes/almuerzo.jpg" alt="">
                    <div class="capa">
                        <h3>Almuerzo</h3>
                        <p>
                            Almuerzos muy nutritivos y completos al gusto
                            del cliente.
                        </p>
                    </div>
                </li>
                <li>
                    <img src="../Imagenes/postre.jpg" alt="">
                    <div class="capa">
                        <h3>Postres</h3>
                        <p>
                            Una variedad de postres para cualquier tipo de
                            ocasion
                        </p>
                    </div>
                </li>
            </ul>
            <ul>
                <li>
                    <img src="../Imagenes/bebida.jpg" alt="">
                    <div class="capa">
                        <h3>Bebidas</h3>
                        <p>
                            Bebidas de diferentes sabores y tamaños
                            a si como vinos y sodas.
                        </p>
                    </div>
                </li>
                <li>
                    <img src="../Imagenes/fiesta.jpg" alt="">
                    <div class="capa">
                        <h3>Fiesta</h3>
                        <p>
                            Ofrecemos diferentes tipos de alimentos para fiestas
                            como refrescos, botana y pasteles.
                        </p>
                    </div>
                </li>
            </ul>
        </section>
    </section>

    <!-- Reservacion/Informacion -->

    <section id="reservacion">
        <div class="reservacionN" id="informs">

            <div class="info">
                <h3>Contacto</h3>
                <p>
                    Puedes hacer reservaciones desde nuestro sitio web
                    ,redes sociales y numero telefonico. <br>

                    <b>Importante:</b> Se tienen que hacer 3 horas antes de anticipacion y como maximo 3 dias
                </p>
            </div>
            <div class="info" id="cont">
                <div class="subcontactosRes">
                    <img src="../Imagenes/telefono.png" alt="">
                    <p>2221453265</p>
                </div>
                <div class="subcontactosRes">
                    <img src="../Imagenes/correo.png" alt="">
                    <p><a href="">CafeAmigos@gmail.com</a></p>
                </div>
            </div>

        </div>

        <div class="reservacionN" id="formas">
            <form class="formReserva" action="../Controlador/registroReservado.php" method="post">
                <h3>
                    Haga su reservacion
                </h3>
                <p>
                    <select name="tipoReservacion" class="s" required>
                        <option value="" selected>Tipo de reservacion</option>
                        <option value="Cafe">Sala de Cafe</option>
                        <option value="Sala comedor">Sala Para Comer</option>
                        <option value="Sala estudio">Sala de Estudio</option>
                        <option value="Cumpleaños">Cumpleaños</option>
                        <option value="Dia especial">Dia especial</option>
                    </select>
                </p>
                <p>
                    <?php
                    include("../Controlador/hora.php");
                    ?>

                    <input class="s" type="date" min="<?= $fechaActual; ?>" name="fecha" id="d" required>
                    <input class="s" type="time" name="hora" required>
                </p>
                <p>
                    <select id="n" name="personas" class="s" required>
                        <option value="" selected>Numero de personas</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                    </select>
                    <select name="habitacion" class="s" required>
                        <option value="" selected>Tipo de habitacion</option>
                        <option value="Grande">Grande</option>
                        <option value="Mediana">Mediana</option>
                        <option value="Chica">Chica</option>
                        <option value="Premium">Premium</option>
                    </select>
                </p>
                <p>
                    <input class="s" id="comentario" type="text" name="comentario" id="" placeholder="Comentario">
                </p>

                <p>
                    <input class="s" type="submit" value="Hacer pedido">
                </p>
            </form>
        </div>
    </section>

    <!-- Comidas mejores -->

    <section id="mejores">
        <div id="menuMejores">
            <ul id="menuUl">
                <li class="minimenu" id="comidas">
                    <div class="descrip">
                        <figure>
                            <img src="../Imagenes/p1.jpg" alt="">
                        </figure>
                        <div class="infomejores">
                            <h3>Arroz De pollo</h3>
                            <p>
                                "Platillo de arroz casero con pollo
                                bañado en mole de guajolote"
                            </p>
                        </div>
                    </div>
                </li>
                <li class="minimenu" id="desayuno">
                    <div class="descrip">
                        <figure>
                            <img src="../Imagenes/p2.jpg" alt="">
                        </figure>
                        <div class="infomejores">
                            <h3>Almuerzo completo</h3>
                            <p>
                                "Contiene un cafe capuchino y un platillo 
                                al gusto del cliente y con pan ilimitado"
                            </p>
                        </div>
                    </div>
                </li>
                <li class="minimenu" id="cena">
                    <div class="descrip">
                        <figure>
                            <img src="../Imagenes/p3.jpg" alt="">
                        </figure>
                        <div class="infomejores">
                            <h3>Sopa Fria</h3>
                            <p>"Sopa traida desde Italia acompañada con un vino al gusto"</p>
                        </div>
                    </div>
                </li>
                <li class="minimenu" id="diaEspecial">
                    <div class="descrip">
                        <figure>
                            <img src="../Imagenes/p4.jpg" alt="">
                        </figure>
                        <div class="infomejores">
                            <h3>Pastel de almendras</h3>
                            <p>"Suculento pastel de almendras sabor chocolate"</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>

        <div id="tituloMejores">
            <h3>Mejor Producto De La Semana</h3>
            <ul>
                <li><a href="#comidas">Comida</a></li>
                <li><a href="#desayuno">Cafe</a></li>
                <li><a href="#cena">Dia Especial</a></li>
                <li><a href="#diaEspecial">Cumpleaños</a></li>
            </ul>
        </div>

    </section>

    <!-- Footer -->

    <section id="referencias">
        <div class="pie" id="footerCon">
            <ul>
                <li>
                    <a href="https://www.facebook.com/">
                        <i class="fa-brands fa-facebook" style="color: #00FFCA;"></i>
                    </a>
                </li>
                <li>
                    <a href="https://www.instagram.com/">
                        <i class="fa-brands fa-instagram" style="color: #00FFCA;"></i>
                    </a>
                </li>
                <li>
                    <a href="https://www.google.com/intl/es-419/gmail/about/">
                        <i class="fa-solid fa-envelope" style="color: #00FFCA;"></i>
                    </a>
                </li>
            </ul>
        </div>
        <div class="pie" id="footerLog"><img src="../Imagenes/logo.png" alt=""></div>
        <div class="pie">
            <h2>Los Amigos</h2>
        </div>
    </section>
</body>

</html>