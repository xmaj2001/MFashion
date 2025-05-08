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
                <div class="col-md-4 order-last contact-info ftco-animate">
                    <div class="row">
                        <div class="col-md-12 mb-4">
                            <h2 class="h4">Informações de contactos</h2>
                        </div>
                        <div class="col-md-12 mb-3">
                            <p><span>Telefone:</span> <a href="tel://<?php echo $telefone ?>"><?php echo $telefone ?></a></p>
                        </div>
                        <div class="col-md-12 mb-3">
                            <p><span>Email:</span> <a href="mailto:<?php echo $email ?>"><?php echo $email ?></a></p>
                        </div>
                        <div class="col-md-12 mb-3">
                            <p><span>Facebook:</span> <a href="<?php echo $rede1 ?>"><?php echo $rede1 ?></a></p>
                        </div>
                        <div class="col-md-12 mb-3">
                            <p><span>INSTAGRAM:</span> <a href="<?php echo $rede3 ?>"><?php echo $rede3 ?></a></p>
                        </div>
                        <div class="col-md-12 mb-3">
                            <p><span>TWITTER:</span> <a href="<?php echo $rede2 ?>"><?php echo $rede2 ?></a></p>
                        </div>

                    </div>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-6 order-first ftco-animate">
                    <form action="#" method="post">
                        <div class="form-group">
                            <label for="floatingInput">Telefone</label>
                            <input type="tel" class="form-control" name="telefone" value="<?php echo $telefone ?>" placeholder="Telefone">
                        </div>
                        <div class="form-group">
                            <label for="floatingInput">Email</label>
                            <input type="email" class="form-control" name="email" value="<?php echo $email ?>" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="floatingInput">Facebook</label>
                            <input type="text" class="form-control" name="rede1" value="<?php echo $rede1 ?>" placeholder="Link Facebook">
                        </div>
                        <div class="form-group">
                            <label for="floatingInput">Twitter</label>
                            <input type="text" class="form-control" name="rede2" value="<?php echo $rede2 ?>" placeholder="Link Twitter">
                        </div>
                        <div class="form-group">
                            <label for="floatingInput">Instagram</label>
                            <input type="text" class="form-control" name="rede3" value="<?php echo $rede3 ?>" placeholder="Link Instagram">
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Salvar" name="btn_sv" class="btn btn-primary py-3 px-5">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>