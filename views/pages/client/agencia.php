<?php

use App\Model\db;
use Michelf\Markdown;

$sobre = db::Slinha("SELECT * FROM sobre limit 1");
$info1 = Markdown::defaultTransform($sobre["info1"]);
?>
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
                    <h2 class=" text-white">Sobre</h2>
                    <h1 class="mb-5 bread MFashion">MFashion<br><span style="font-size: 14px; color: white;">Management</span></h1>
                </div>
            </div>
        </div>
    </section>
    <!-- END slider -->

    <section class="ftco-section-2">
        <div class="container-fluid">
            <div class="section-2-blocks-wrapper d-flex row no-gutters">

                <div class="text col-md-6 ftco-animate">
                    <div class="text-inner align-self-start">
                        <h3 class="heading MFashion">MFashion<br><span style="font-size: 16px; color: black;">Management</span></h3>
                        <?php echo $info1 ?>
                        <ul class="my-4">
                            <li class="ftco-animate"><a href="<?php echo $rede2 ?>"><span class="icon-twitter"></span> Twitter</a></li>
                            <li class="ftco-animate"><a href="<?php echo $rede1 ?>"><span class="icon-facebook"></span> Facebook</a></li>
                            <li class="ftco-animate"><a href="<?php echo $rede3 ?>"><span class="icon-instagram"></span> Instagram</a></li>
                        </ul>
                    </div>
                </div>

                <div class="img col-md-6 ftco-animate" style="background-image: url('/assets/images/bg_1.jpg');">
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section-2">
        <div class="container-fluid">
            <div class="section-2-blocks-wrapper d-flex row no-gutters">
                <div class="img col-md-6 ftco-animate w3-hide-small" style="background-image: url('/assets/images/bg_2.jpg');">
                </div>
                <div class="text col-md-6 ftco-animate">
                    <div class="text-inner align-self-start">
                        <?php echo Markdown::defaultTransform($sobre["info2"]) ?>
                    </div>
                </div>
            </div>
        </div>
    </section>