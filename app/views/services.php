
<section class="services">
    <section class="hero">
        <div class="col-mdd-6">
            <h1 data-aos="fade-up">Serviços</h1>
            <p data-aos="fade-right" data-aos-duration="2000" data-aos-delay="1000">Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, iusto?</p>
        </div>
    </section>
    <div class="content">
        <div class="container mb-5">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <h1 data-aos="fade-up">Nossos serviços</h1>
                    <div class="divisor-to-black" data-aos="fade-up" data-aos-duration="1500"></div>
                    <p class="text-center" data-aos="fade-up">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                        Perspiciatis amet vel esse sit ullam magnam voluptates, 
                        tempore illo, quibusdam, blanditiis odio adipisci expedita 
                        odit illum aperiam ut quas laboriosam aspernatur.
                    </p>
                    <div class="services">
                        <?php foreach ($services as $service) :?>
                        <div class="services-item" data-aos="zoom-in-up" data-aos-duration="1200">
                            <div class="icon icon-<?=$service['color']?>-ws">
                                <i class="<?=$service['icon']?>" aria-hidden="true"></i>
                            </div>
                            <h5><?=$service['service']?></h5>
                            <p><?=$service['description']?>.</p>
                        </div>
                        <?php endforeach;?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
