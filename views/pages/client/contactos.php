<style>
    .MFashion {
        color: chocolate !important;
        text-shadow: 0 0 15px rgba(210, 105, 30, 0.5), 0 0 25px rgba(210, 105, 30, 0.5), 0 0 50px rgba(210, 105, 30, 0.5), 0 0 100px chocolate;
    }
</style>
<div id="colorlib-page">
    <header>
        <div class="colorlib-navbar-brand">
            <a class="colorlib-logo MFashion" href="/">MFashion<br><span>Management</span></a>
        </div>
        <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
    </header>

    <section class="hero-wrap" style="background-image: url(/assets/images/bg_1.jpg);" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters text align-items-end justify-content-center" data-scrollax-parent="true">
                <div class="col-md-8 ftco-animate text-center">
                    <h1 class="mb-5 bread MFashion">Contactos</h1>
                    <ul class="ftco-footer-social list-unstyled  mt-5">
                        <li class="ftco-animate"><a href="<?php echo $rede2 ?>"><span class="icon-twitter"></span></a></li>
                        <li class="ftco-animate"><a href="<?php echo $rede1 ?>"><span class="icon-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="<?php echo $rede3 ?>"><span class="icon-instagram"></span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section contact-section">
        <div class="container mt-5">
            <div class="row block-9">
                <div class="col-md-6  contact-info ftco-animate">
                    <h2 class="h4">Contactos</h2>
                    <div class="mb-3">
                        <p><span>Telefone: <small><a href="tel://<?php echo $telefone ?>"><?php echo $telefone ?></a></small></span></p>
                    </div>
                    <div class="mb-3">
                        <p><span>Email: <small><a href="mailto:<?php echo $email ?>"><?php echo $email ?></a></small></span></p>
                    </div>
                    <div class="mb-3">
                        <p><span>Facebook: <small><a href="<?php echo $rede1 ?>"><?php echo $rede1 ?></a></small></span> </p>
                    </div>
                    <div class="mb-3">
                        <p><span>INSTAGRAM: <small><a href="<?php echo $rede2 ?>"><?php echo $rede3 ?></a></small></span> </p>
                    </div>
                    <div class="mb-3">
                        <p><span>TWITTER: <small><a href="<?php echo $rede3 ?>"><?php echo $rede2 ?></a></small></span> </p>
                    </div>
                </div>
            </div>
        </div>
</div>
</section>