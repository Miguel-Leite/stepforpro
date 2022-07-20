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
    <?php
        if (isset($page) && $page!=='index') {
            require_once 'navbar.php';
        }
        require_once dirname(__FILE__,2). '/'. $page.'.php';
    ?>
    
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
    <!-- jquery -> jquery.min.js -->
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