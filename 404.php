<!DOCTYPE html>
<html lang="es">
<!-- php -->

<head>
    <?php include("includes/config/head.php"); ?>
    <title>Taurus | 404</title>
</head>

<body>

    <!-- Preloader-->
    <div class="page-loader">
        <div class="page-loader-inner">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
    </div>
    <!-- Preloader end-->

    <!-- Header-->
    <header class="header header-transparent">
        <?php include("includes/config/topbar.php"); ?>
    </header>
    <!-- Header end-->

    <!-- Wrapper-->
    <div class="wrapper">
        <!-- Hero-->
        <section class="module-cover parallax text-center" data-background="/Taurus/assets/images/module-9.jpg"
            data-overlay="0.5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>404</h1>
                        <h2>Pagina no encontrada</h2>
                        <p>La página que está buscando no está aquí. Se ha movido o nunca existido. Por favor vete. a la
                            página de inicio y empezar a partir de ahí en su lugar.</p>
                        <a href="/Taurus/" class="btn btn-primary">Volver al inicio</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Hero end-->

        <!-- Footer-->
        <footer class="footer">
            <?php include("includes/config/footer.php"); ?>
        </footer>
        <!-- Footer end-->


        <!-- whatsapp-->
        <div>
            <?php include("includes/config/whatsappButton.php"); ?>
        </div>
        <!-- whatsapp end-->
    </div>
    <!-- Wrapper end-->
    <!-- Off canvas-->
    <div class="off-canvas-sidebar">
        <div class="off-canvas-sidebar-wrapper">
            <div class="off-canvas-header"><a class="off-canvas-close" href="#"><span class="ti-close"></span></a></div>
            <div class="off-canvas-content">
                <!-- Text widget-->
                <aside class="widget widget-text">
                    <div class="textwidget">
                        <p class="text-center"><img src="assets/images/logo-light-2.png" alt="" width="80px"></p>
                        <p class="text-center">See how users experience your website in realtime to see changes.</p>
                    </div>
                </aside>
                <!-- Recent portfolio widget-->
                <aside class="widget widget-recent-works">
                    <ul>
                        <li><a href=""><img src="/Taurus/assets/img/widgets/1.jpg" alt=""></a></li>
                        <li><a href="#"><img src="/Taurus/assets/img/widgets/2.jpg" alt=""></a></li>
                        <li><a href="#"><img src="/Taurus/assets/img/widgets/3.jpg" alt=""></a></li>
                        <li><a href="#"><img src="/Taurus/assets/img/widgets/4.jpg" alt=""></a></li>
                        <li><a href="#"><img src="/Taurus/assets/img/widgets/5.jpg" alt=""></a></li>
                        <li><a href="#"><img src="/Taurus/assets/img/widgets/6.jpg" alt=""></a></li>
                        <li><a href="#"><img src="/Taurus/assets/img/widgets/7.jpg" alt=""></a></li>
                        <li><a href="#"><img src="/Taurus/assets/img/widgets/8.jpg" alt=""></a></li>
                        <li><a href="#"><img src="/Taurus/assets/img/widgets/9.jpg" alt=""></a></li>
                    </ul>
                </aside>
                <!-- Social Icons-->
                <ul class="social-icons text-center">
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Off canvas end-->

    <!-- To top button--><a class="scroll-top" href="#top"><i class="fas fa-angle-up"></i></a>

    <!-- Scripts-->
    <script src="/Taurus/assets/js/custom/jquery.min.js"></script>
    <script src="/Taurus/assets/js/custom/popper.min.js"></script>
    <script src="/Taurus/assets/js/bootstrap/bootstrap.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA0rANX07hh6ASNKdBr4mZH0KZSqbHYc3Q"></script>
    <script src="/Taurus/assets/js/custom/plugins.min.js"></script>
    <script src="/Taurus/assets/js/custom/custom.min.js"></script>
</body>

</html>