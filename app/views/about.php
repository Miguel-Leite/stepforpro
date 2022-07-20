<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Step For PRO</title>

    <!-- main style -> main.css -->
    <link rel="stylesheet" href="<?=asset('css/main.css')?>">
    <!-- font awesome -> all.css -->
    <link rel="stylesheet" href="<?=asset()?>vendor/fontawesome-free/css/all.css">
    <!-- aos -> aos.css -->
    <link rel="stylesheet" href="<?=asset()?>vendor/aos/aos.css">
    <!-- bootstrap -> bootstrap.min.css -->
    <link rel="stylesheet" href="<?=asset()?>vendor/bootstrap/css/bootstrap.min.css">
    <!-- owl -> owl.carousel.min.css -->
    <link rel="stylesheet" href="<?=asset()?>vendor/owl/css/owl.carousel.min.css">
    <!-- toast -> iziToast.min.css -->
    <link rel="stylesheet" href="<?=asset()?>vendor/izitoast/css/iziToast.min.css">

</head>
<body>
    <a href="#" class="btn-scroll"> <i class="fa fa-arrow-up" aria-hidden="true"></i> </a>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">StepFor<span>PRO</span></a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                    <li class="nav-item active nav-item-ws">
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <li class="nav-item nav-item-ws">
                        <a class="nav-link" href="about.html">Sobre</a>
                    </li>
                    <li class="nav-item nav-item-ws">
                        <a class="nav-link" href="services.html">Serviços</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn" href="login.html">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="about">
        <section class="hero">
            <div class="col-mdd-6">
                <h1 data-aos="fade-up">Sobre nós</h1>
                <p data-aos="fade-right" data-aos-duration="2000" data-aos-delay="1000">Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, iusto?</p>
            </div>
        </section>
        <div class="content">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="image" data-aos="fade-right">
                            <img src="assets/img/contact.jpg" class="w-100">
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6">
                        <h1 class="text-center" data-aos="fade-up">StepFor<span>PRO</span> </h1>
                        <div class="divisor-to-black" data-aos="fade-up"></div>

                        <p class="mt-5" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1000">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Fugiat minus ex est dignissimos corporis quaerat atque ipsum dolor 
                            qui magnam voluptate aliquid facilis veniam debitis nam dicta aut excepturi 
                            quisquam reiciendis, vitae dolore. Labore sed repudiandae nemo mollitia corporis 
                            laudantium ipsa laboriosam eum commodi asperiores.
                        </p>

                        <p class="mt-5" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="2000">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Fugiat minus ex est dignissimos corporis quaerat atque ipsum dolor 
                            qui magnam voluptate aliquid facilis veniam debitis nam dicta aut excepturi 
                            quisquam reiciendis, vitae dolore. Labore sed repudiandae nemo mollitia corporis 
                            laudantium ipsa laboriosam eum commodi asperiores.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="footer-top">
            <div class="container" data-aos="fade-up">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-4 col-xs-12">
                        <div class="container">
                            <a href="#" class="footer-brand">StepFor<span>Pro</span></a>
                            <p>
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptates, 
                                perspiciatis voluptas architecto debitis enim aperiam corrupti harum cumque 
                                placeat maxime itaque nostrum corporis quis voluptatibus sunt deserunt officia 
                                accusantium eius!
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-xs-12">
                        <h4>Menu</h4>
                        <ul>
                            <li><a href="#"> Home </a></li>
                            <li><a href="#"> Sobre </a></li>
                            <li><a href="#"> Serviços</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-12">
                        <h4>Nossos Cursos</h4>
                        <ul>
                            <li>Ciências Economica & Jurídica</li>
                            <li>Ciências Física & Bíologica</li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-12">
                        <h4>Receba Alerta</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, nisi!</p>
                        <form method="post">
                            <div class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                            <input type="email" name="email" placeholder="Seu e-mail" />
                            <button type="submit" title="Enviar"> <i class="fa fa-location-arrow" aria-hidden="true"></i> </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom text-center">
            <p>Copyright &copy; Todos os direitos reservados - Desenvolvido por: <a href="#">Miguel Leite</a> </p>
        </div>
    </footer>
    <script src="<?=asset()?>vendor/jquery/jquery.min.js"></script>
    <!-- bootstrap -> bootstrap.min.js -->
    <script src="<?=asset()?>vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- owl -> owl.carousel.min.js -->
    <script src="<?=asset()?>vendor/owl/js/owl.carousel.min.js"></script>
    <!-- aos -> aos.js -->
    <script src="<?=asset()?>vendor/aos/aos.js"></script>
    <!-- toast - iziToast.min.js -->
    <script src="<?=asset()?>vendor/izitoast/js/iziToast.min.js"></script>
    <!-- main script -> main.js -->
    <script src="<?=asset()?>js/main.js"></script>
</body>
</html>