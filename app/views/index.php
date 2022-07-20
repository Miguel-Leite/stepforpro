<header class="header">
    <?php require_once 'layout/navbar.php'; ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-xl-7 col-sm-12 col-md-6">
                <h1 data-aos="fade-right">Fale conosco apartir do nosso app para clientes</h1>
                <p data-aos="fade-right" data-aos-delay="1000">Facere delectus vero aliquid deserunt, obcaecati magnam architecto, 
                sapiente provident neque repellendus molestiae ducimus adipisci 
                expedita maxime quisquam eius consequatur! Quasi, magnam.</p>
                <br />
                <a href="#" data-aos="fade-up" data-aos-duration="1000" class="btn btn-primary-ws"><i class="fa fa-download" aria-hidden="true"></i> Download app</a>
                <a href="<?=BASE_URL?>sobre" data-aos="fade-up" data-aos-duration="1000"  class="btn btn-dark-ws">Sobre nós</a>
            </div>
            <div class="col-lg-5 col-xl-5 col-sm-6 d-none d-md-block">
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
            <div class="col-lg-4 col-md-12 my-2 mb-lg-0" data-aos="zoom-in-right" data-aos-duration="1000">
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
            <div class="col-lg-8 col-md-12 my-2 mb-lg-0" data-aos="zoom-in-left" data-aos-duration="1-00">
                <form action="<?=BASE_URL?>contacto" method="post" id="form-contact">
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
