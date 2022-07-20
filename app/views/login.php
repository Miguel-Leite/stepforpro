<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Step For PRO - Login</title>

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
    <a href="<?=BASE_URL?>" data-aos="fade-right" data-aos-duration="1200" class="back" title="Voltar"> <i class="fa fa-arrow-left" aria-hidden="true"></i> </a>
    <main class="login col-md-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1000">
        <form actionToredirect="<?=BASE_URL?>" action="<?=BASE_URL?>auth" class="form-login">
            <input type="text" name="email" placeholder="Endereço e-mail...">
            <input type="password" name="password" placeholder="Palavra-passe">
            <button type="submit"> Entrar <i class="fa fa-arrow-right" aria-hidden="true"></i> </button>
        </form>
    </main>
    <script src="<?=asset()?>vendor/jquery/jquery.min.js"></script>
    <!-- bootstrap -> bootstrap.min.js -->
    <script src="<?=asset()?>vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- aos -> aos.js -->
    <script src="<?=asset()?>vendor/aos/aos.js"></script>
    <!-- axios -> axios.min.js -->
    <script src="<?=asset()?>vendor/axios/axios.min.js"></script>
    <!-- toast - iziToast.min.js -->
    <script src="<?=asset()?>vendor/izitoast/js/iziToast.min.js"></script>
    <!-- main script -> main.js -->
    <script src="<?=asset()?>js/main.js"></script>
</body>
</html>