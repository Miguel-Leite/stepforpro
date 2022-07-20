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
    <header class="header">
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
                            <a class="nav-link" href="#">Home</a>
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
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-xl-7 col-md-12">
                    <h1 data-aos="fade-right">We Know how to keep your finances in check</h1>
                    <p data-aos="fade-right" data-aos-delay="1000">Facere delectus vero aliquid deserunt, obcaecati magnam architecto, 
                    sapiente provident neque repellendus molestiae ducimus adipisci 
                    expedita maxime quisquam eius consequatur! Quasi, magnam.</p>
                    <br />
                    <a href="#" data-aos="fade-up" data-aos-duration="1000" class="btn btn-primary-ws"><i class="fa fa-download" aria-hidden="true"></i> Download App</a>
                    <a href="#" data-aos="fade-up" data-aos-duration="1000"  class="btn btn-dark-ws">About App</a>
                </div>
                <div class="col-lg-5 col-xl-5 col-md-12">
                    <div class="image" data-aos="zoom-in-left" data-aos-duration="1000" data-aos-delay="1500">
                        <img src="<?=asset()?>img/phone.png" alt="Screen App">
                    </div>
                </div>
            </div>
        </div>
    </header>
        
    <div class="about-app">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <h1 data-aos="fade-up">Aplicação</h1>
                    <div class="divisor-to-black" data-aos="fade-up" data-aos-duration="1500"></div>
                    <p data-aos="fade-up" data-aos-duration="1500">Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                        Quae tempore laboriosam labore animi mollitia inventore.</p>
                    <div class="functions-app">
                        <div class="functions-app-item" data-aos="zoom-in-right" data-aos-duration="1000">
                            <div class="icon">
                                <i class="fa fa-globe" aria-hidden="true"></i>
                            </div>
                            <h5>Web</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>

                        <div class="functions-app-item" data-aos="zoom-in-up" data-aos-duration="1000">
                            <div class="icon">
                                <i class="fa fa-mobile" aria-hidden="true"></i>
                            </div>
                            <h5>Mobile</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>

                        <div class="functions-app-item" data-aos="zoom-in-left" data-aos-duration="1000">
                            <div class="icon">
                                <i class="fa fa-desktop" aria-hidden="true"></i>
                            </div>
                            <h5>Desktop</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="contact">
        <div class="container">
            <h1 data-aos="fade-up">Fale Conosco</h1>
            <div class="divisor-to-black" data-aos="fade-up"></div>
            <br><br>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-12" data-aos="zoom-in-right" data-aos-duration="1000">
                    <div class="information">
                        <div class="information-item">
                            <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                            <p>941-398-739 / 951-144-318</p>
                        </div>
                        <div class="information-item">
                            <div class="icon"> <i class="fa fa-envelope" aria-hidden="true"></i> </div>
                            <p>miguelleite200leite@gmail.com</p>
                        </div>
                        <div class="information-item">
                            <div class="icon"> <i class="fa fa-map-marker" aria-hidden="true"></i> </div>
                            <p>Luanda, Cacuaco, Nova-Urbanização</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12" data-aos="zoom-in-left" data-aos-duration="1-00">
                    <form method="post" id="form-contact">
                        <div class="form-group row">
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Nome completo">
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Seu E-mail">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <input type="tel" class="form-control" name="phone" id="phone" placeholder="Telefone">
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Assunto">
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea name="message" id="" cols="30" rows="5" class="form-control" placeholder="Escreve aqui a sua mensagem..."></textarea>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit"class="btn mt-4 col-lg-8 col-md-12">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
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