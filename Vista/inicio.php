<?php
session_start();
if(!isset($_SESSION['id_Cliente'])){
    header("Location: ../Vista/index.html");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Modelo/principal.css">
    <script src="https://kit.fontawesome.com/eb8f9c6f22.js" crossorigin="anonymous"></script>
    <title>Cafeteria</title>
</head>

<body>
    <header>
        <div id="logo">
            <img src="../Imagenes/logo.jpg" alt="">
        </div>

        <h1>Los Amigos</h1>

        <nav>
            <ul>
                <li><a href="#nosotros">Nosotros</a></li>
                <li><a href="#comida">Menu</a></li>
            </ul>
            <ul>
                <li><a href="#reservacion">Reservacion</a></li>
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
                <img src="../Imagenes/logo.jpg" alt="">
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

    <!-- Menu -->
    <section id="comida">
        <!-- titulo comida -->
        <div id="tituloComida">
            <h2>Tipo de alimentos</h2>
        </div>
        <!-- carrucel -->
        <section id="comidaCarrusel">
            <ul>
                <li>
                    <img src="../Imagenes/cafe.jpg " alt="">
                    <div class="capa">
                        <h3>Cafe</h3>
                        <p>
                            Lorem ipsum dolor sit amet,
                            consectetur adipisicing elit. Minima, illum.
                        </p>
                    </div>
                </li>
                <li>
                    <img src="../Imagenes/comida.jpg" alt="">
                    <div class="capa">
                        <h3>Comida</h3>
                        <p>
                            Lorem ipsum dolor sit amet,
                            consectetur adipisicing elit. Minima, illum.
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
                            Lorem ipsum dolor sit amet,
                            consectetur adipisicing elit. Minima, illum.
                        </p>
                    </div>
                </li>
                <li>
                    <img src="../Imagenes/postre.jpg" alt="">
                    <div class="capa">
                        <h3>Postres</h3>
                        <p>
                            Lorem ipsum dolor sit amet,
                            consectetur adipisicing elit. Minima, illum.
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
                            Lorem ipsum dolor sit amet,
                            consectetur adipisicing elit. Minima, illum.
                        </p>
                    </div>
                </li>
                <li>
                    <img src="../Imagenes/fiesta.jpg" alt="">
                    <div class="capa">
                        <h3>Fiesta</h3>
                        <p>
                            Lorem ipsum dolor sit amet,
                            consectetur adipisicing elit. Minima, illum.
                        </p>
                    </div>
                </li>
            </ul>
        </section>
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
                    <select name="tipoReservacion" class="s" >
                        <option value="" selected>Tipo de reservacion</option>
                        <option value="Desayuno">Desayuno</option>
                        <option value="Comida">Comida</option>
                        <option value="Cena">Cena</option>
                        <option value="Cumpleaños">Cumpleaños</option>
                        <option value="Dia especial">Dia especial</option>

                    </select>
                </p>
                <p>
                    <input class="s" type="date" name="fecha" id="" >
                    <input class="s" type="time" name="hora" id="" > 
                </p>
                <p>
                    <select name="personas" class="s" >
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
                </p>
                <p>
                    <select name="habitacion" class="s" >
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
                        <p></p>
                    </div>
                </li>
                <li class="minimenu" id="desayuno">
                    <div class="descrip">
                        <figure>
                            <img src="../Imagenes/p2.jpg" alt="">
                        </figure>
                        <p></p>
                    </div>
                </li>
                <li class="minimenu" id="cena">
                    <div class="descrip">
                        <figure>
                            <img src="../Imagenes/p3.jpg" alt="">
                        </figure>
                        <p></p>
                    </div>
                </li>
                <li class="minimenu" id="diaEspecial">
                    <div class="descrip">
                        <figure>
                            <img src="../Imagenes/p4.jpg" alt="">
                        </figure>
                        <p></p>
                    </div>
                </li>
            </ul>
        </div>

        <div id="tituloMejores">
            <h3>Mejor Producto De La Semana</h3>
            <ul>
                <li><a href="#comidas">Comida</a></li>
                <li><a href="#desayuno">Desayuno</a></li>
                <li><a href="#cena">Cena</a></li>
                <li><a href="#diaEspecial">Dia Especial</a></li>
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
        <div class="pie" id="footerLog"><img src="../Imagenes/logo.jpg" alt=""></div>
        <div class="pie">
            <h2>Los Amigos</h2>
        </div>
    </section>
</body>

</html>