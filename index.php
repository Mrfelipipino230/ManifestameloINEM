<?php
session_start();
include_once "php/config.php";
include_once "datousuarioindex.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>ManifestameloInem</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">


    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/styleIndex.css" rel="stylesheet">

    <!-- =======================================================
    * Template Name: Rapid hola zoz zoorra
    * Updated: Sep 18 2023 with Bootstrap v5.3.2
    * Template URL: https://bootstrapmade.com/rapid-multipurpose-bootstrap-business-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center header-scrolled">
    <div class="container d-flex align-items-center">

        <a href="index.html" class="logo me-auto"><img src="assets/img/LOGO.png" width="200px" height="100px" ></a>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a class="nav-link scrollto active" href="index.php">Inicio</a></li>
                <li><a class="nav-link scrollto" href="comunidad.php">Comunidad</a></li>
                <li><a class="nav-link scrollto" href="userss.php">Chat</a></li>
                <li><a class="nav-link scrollto" href="incognito.php">Incognito</a></li>
                <li><a class="nav-link scrollto" href="foro.php">Foro</a></li>
                <li><a class="nav-link scrollto" href="perfil.php"</a></li>
                <li> <img src="php/images/<?php echo $row['img']; ?>" alt="" width="60" height="60" class="rounded-circle"></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

        <div class="social-links">
            <a href="#" class="twitter"><i class=""></i></a>
            <a href="#" class="facebook"><i class=""></i></a>
            <a href="#" class="linkedin"><i class=""></i></a>
            <a href="#" class="instagram"><i class=""></i></a>
        </div>

    </div>
</header><!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="hero" class="clearfix">
    <div class="container d-flex h-100">
        <div class="row justify-content-center align-self-center" data-aos="fade-up">
            <div class="col-lg-6 intro-info order-lg-first order-last" data-aos="zoom-in" data-aos-delay="100">
                <h2>¡Registrate <br>y habla <span>lo que piensas!</span></h2>
                <div>
                    <a href="registro.php" class="btn-get-started scrollto">Regístrarse</a>
                </div>
            </div>

            <div class="col-lg-6 intro-img order-lg-last order-first" data-aos="zoom-out" data-aos-delay="200">
                <img src="assets/img/tl.png" alt="" class="img-fluid">
            </div>
        </div>

    </div>
</section><!-- End Hero -->

<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">

        <div class="container" data-aos="fade-up">
            <div class="row">

                <div class="col-lg-5 col-md-6">
                    <div class="about-img" data-aos="fade-right" data-aos-delay="100">
                        <img src="assets/img/comprobado.png" alt="">
                    </div>
                </div>

                <div class="col-lg-7 col-md-6">
                    <div class="about-content" data-aos="fade-left" data-aos-delay="100">
                        <h2>Razones para manifestar lo que piensas en esta página: </h2>
                        <p> En el inem José Félix de Restrepo existen personas de todo tipo: homosexuales, furros, neas, astetics, npcs, gordos, flacos, judíos, antisemitas, racistas, comunistas, etc.</p>
                        <p>En el colegio muchas veces no se puede expresar lo que uno siente, ya que lo pueden voltear o doxear, y por eso existe esta página, donde todas las personas pertenecientes al dicho colegio pueden expresar absolutamente todo lo que piensen.

                        </p>
                        <ul>
                            <li><i class="bi bi-check-circle"></i> Total seguridad con los datos de las personas.</li>
                            <li><i class="bi bi-check-circle"></i> grupos preferenciales.</li>
                            <li><i class="bi bi-check-circle"></i> Sección donde se hable anónimamente. </li>
                        </ul>
                        <p>Se tendrá en cuenta los términos y condiciones para poder mantener la seguridad y la legalidad de la página.</p>
                    </div>
                </div>
            </div>
        </div>

    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h3>Servicios</h3>
                <p>Todo lo que puedes hacer en esta riña de página.</p>
            </header>

            <div class="row g-5">

                <div class="col-md-6 col-lg-4 wow bounceInUp" data-aos="zoom-in" data-aos-delay="100">
                    <div class="box">
                        <div class="icon" style="background: #fceef3;"><i class="bi bi-briefcase" style="color: #ff689b;"></i></div>
                        <h4 class="title"><a href="../foro.php">Entrar a grupos</a></h4>
                        <p class="description">Puedes entrar a cualquier grupo que exista en la página para poder hablar con quien esté conectado.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="200">
                    <div class="box">
                        <div class="icon" style="background: #fff0da;"><i class="bi bi-card-checklist" style="color: #e98e06;"></i></div>
                        <h4 class="title"><a href="amigos.html">Buscar amigos</a></h4>
                        <p class="description">CComo esta página es una red social, se podrán agregar y buscar compañeros para crear grupos para poder hablar de cualquier cosa que quieran.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="300">
                    <div class="box">
                        <div class="icon" style="background: #e6fdfc;"><i class="bi bi-bar-chart" style="color: #3fcdc7;"></i></div>
                        <h4 class="title"><a href="../incognito.php">Zona de anonimato</a></h4>
                        <p class="description">En la zona de anonimato, cualquier persona que esté registrada y acepte los términos y condiciones va a poder hablar de cualquier cosa que piense sin mostrarse su nombre de usuario.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow" data-aos="zoom-in" data-aos-delay="100">
                    <div class="box">
                        <div class="icon" style="background: #eafde7;"><i class="bi bi-binoculars" style="color:#41cf2e;"></i></div>
                        <h4 class="title"><a href="">Totalmenente gratis</a></h4>
                        <p class="description">Esta página es totalmete gratis y libre de anuncios.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="200"">
                <div class=" box">
                    <div class="icon" style="background: #e1eeff;"><i class="bi bi-brightness-high" style="color: #2282ff;"></i></div>
                    <h4 class="title"><a href="">Seguridad </a></h4>
                    <p class="description">Mantendremos en estabilidad la posible toxicidad y doxeada de las personas más vulnerables y las conversaciones se mantendrán en total anonimato.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="300">
                <div class="box">
                    <div class="icon" style="background: #ecebff;"><i class="bi bi-calendar4-week" style="color: #8660fe;"></i></div>
                    <h4 class="title"><a href="">Compartir en sociedad</a></h4>
                    <p class="description">Esta página está orientada a la charla de parte de comunidades del inem con un pequeño toque de libre expresión, teniendo en cuenta el respeto por parte de las mayorías con las minorías.</p>
                </div>
            </div>

        </div>

        </div>
    </section><!-- End Services Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
        <div class="container-fluid" data-aos="fade-up">

            <header class="section-header">
                <h3>¿Quienes somos?</h3>
                <p>Somos estudiantes del inem jose felix del restrepo crusando el grado X.</p>
            </header>

            <div class="row">

                <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="100">
                    <div class="why-us-img">
                        <img src="assets/img/why-us.png" alt="" class="img-fluid">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="why-us-content">
                        <p>Estamos en un proyecto del sena dedicado a hacer una página web en la cual tenemos como objetivo y finalidad construir un foro para la integración y comunicación entre estudiantes de la institución educativa.</p>
                        <p>
                            La función de la página es invitar a los estudiantes a expresarse e integrarse con libertad y respeto, teniendo en cuenta la libertad de expresión que otorga el inem José Félix de Restrepo.
                        </p>

                        <div class="features clearfix" data-aos="fade-up" data-aos-delay="100">
                            <i class="bi bi-bookmarks" style="color: #f058dc;"></i>
                            <h4>Libertad</h4>

                        </div>

                        <div class="features clearfix" data-aos="fade-up" data-aos-delay="200">
                            <i class="bi bi-box-seam" style="color: #ffb774;"></i>
                            <h4>Comunicacion </h4>

                        </div>

                        <div class="features clearfix" data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-card-checklist" style="color: #589af1;"></i>
                            <h4>Expresion</h4>
                        </div>

                    </div>

                </div>

            </div>

        </div>

        </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Call To Action Section ======= -->
    <section id="call-to-action" class="call-to-action">
        <div class="container" data-aos="zoom-out">
            <div class="row">
                <div class="col-lg-9 text-center text-lg-start">
                    <h3 class="cta-title">¡Registrate ahora!</h3>
                    <p class="cta-text"> Registrandote puedes charlar de coasas bizarras con tus amigos y poder hablar en el modo incognito.</p>
                </div>
                <div class="col-lg-3 cta-btn-container text-center">
                    <a class="cta-btn align-middle" href="#">Registrar</a>
                </div>
            </div>

        </div>
    </section><!--  End Call To Action Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
        <div class="container" data-aos="fade-up">

            <div class="row feature-item">
                <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                    <img src="assets/img/features-1.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0" data-aos="fade-left" data-aos-delay="150">
                    <h4>Vision.</h4>
                    <p>
                        Ser el punto de encuentro virtual de referencia para los estudiantes de grado 8 a 11 del INEM, donde puedan conocer distintos anuncios importantes, compartir sus experiencias, intereses y visiones, promoviendo un ambiente inclusivo y enriquecedor que fortalezca la identidad y comunidad educativa del instituto.
                    </p>
                </div>
            </div>

            <div class="row feature-item mt-5 pt-5">
                <div class="col-lg-6 wow fadeInUp order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                    <img src="assets/img/features-2.png" class="img-fluid" alt="">
                </div>

                <div class="col-lg-6 wow fadeInUp pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-right" data-aos-delay="150">
                    <h4>Mision</h4>
                    <p>
                        Nuestra misión es crear y mantener un foro digital innovador y seguro, diseñado específicamente para los estudiantes del INEM, que fomente la comunicación, aprendizaje interacción, el entendimiento y la colaboración entre las diversas comunidades escolares. A través de este espacio, aspiramos a:

                        Conectar a la Comunidad: Facilitar la interacción y el diálogo entre los estudiantes de grado 8 a 11 del INEM, independientemente de sus intereses, identidades o áreas de estudio, promoviendo un sentido de pertenencia y comunidad.

                        Explorar la Diversidad: Fomentar la exploración y comprensión de las distintas comunidades, gustos e identidades presentes en el INEM, celebrando la riqueza de la diversidad y promoviendo la tolerancia y el respeto mutuo.

                        Facilitar el Aprendizaje: Ofrecer un espacio donde los estudiantes puedan aprender de sus pares, compartiendo conocimientos, ideas y experiencias, enriqueciendo así su desarrollo personal y académico.

                        Promover la Inclusión: Garantizar que el foro sea accesible y seguro para todos los estudiantes, sin importar su origen étnico, género, orientación sexual o discapacidad, promoviendo un ambiente de respeto y apoyo mutuo.

                        Fomentar la Colaboración: Estimular la colaboración entre estudiantes, profesores y personal administrativo del INEM para mejorar la calidad de la educación y el ambiente escolar en beneficio de toda la comunidad educativa.
                    </p>
                </div>

            </div>

        </div>
    </section><!-- End Features Section -->




</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer" class="section-bg">
    <div class="footer-top">
        <div class="container">

            <div class="row">

                <div class="col-lg-6">

                    <div class="row">

                        <div class="col-sm-6">

                            <div class="footer-info">
                                <img src="assets/img/INEM.png" width="300px" height="300px" >

                                <p>Este proyecto se tratará de la comunidad del Inem, para que se puedan expresar libremente, teniendo en cuenta las políticas de privacidad y seguridad establecidas.</p>
                            </div>

                            <div class="footer-newsletter">
                                <h4>¿Donde nos puedes ubicar?</h4>
                                <p>Tenemos nuestra sede en el colegio Inem José Félix de Restrepo, el cual es el mejor colegio del área metropolitana. <b>Si quieres hacer parte de las actualizaciones constantes de esta página, pon tu correo aquí:</b></p>
                                <form action="" method="post">
                                    <input type="email" name="email"><input type="submit" value="Enviar">
                                </form>
                            </div>

                        </div>

                        <div class="col-sm-6">
                            <div class="footer-links">
                                <h4>Nuestros links</h4>
                                <ul>
                                    <li><a href="index.html">Inicio</a></li>
                                    <li><a href="comunidad.php">Comunidad</a></li>
                                    <li><a href="amigos.html">Amigos</a></li>
                                    <li><a href="incognito.php">Incognito</a></li>
                                    <li><a href="#">Politicas de privacidad</a></li>
                                    <li><a href="nosotros.html">Nosotros</a></li>
                                </ul>
                            </div>

                            <div class="footer-links">
                                <h4>¡Contactanos!</h4>
                                <p>
                                    Calle Calle 38C Sur en Kennedy<br>
                                    Medellin antioquia<br>
                                    <strong>Telefono:</strong> +57 3052555266<br>
                                    <strong>Correo:</strong> infoManif@inemjose.edu.co<br>
                                </p>
                            </div>

                            <div class="social-links">
                                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                                <a href="https://web.facebook.com/profile.php?id=61553320431823" class="facebook"><i class="bi bi-facebook"></i></a>
                                <a href="https://www.instagram.com/manifestameloinem2/" class="instagram"><i class="bi bi-instagram"></i></a>
                                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-lg-6">

                    <div class="form">

                        <h4>Mandanos un mensaje</h4>

                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Tu Nombre" required>
                            </div>
                            <div class="form-group mt-3">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Tu Correo" required>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto" required>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="5" placeholder="Manifestame tus sugerencias sog" required></textarea>
                            </div>

                            <div class="my-3">
                                <div class="loading">¡Cargando!</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Tu mensaje esta enviado. Thank you!</div>
                            </div>

                            <div class="text-center"><button type="submit" title="Send Message">Enviar mensaje</button></div>
                        </form>

                    </div>

                </div>

            </div>

        </div>
    </div>

    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong>ManifestameloInem</strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Rapid
          -->
            Designed by <a href="nosotros.html">Grupo 2</a>
        </div>
    </div>
</footer><!-- End  Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>