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
                    <h1 class="mb-5 bread MFashion">Inscrever-se</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section contact-section">
        <div class="container mt-5">
            <div class="row">
                <div class="text col-md-6 order-first contact-info ftco-animate" id="resultado">
                    <?php
                    if (isset($ms)) {
                       ?>
                       <div class="<?php echo $ms["tipo"] ?>">
                       <h3 class=''><?php echo $ms["titulo"] ?></h3>
                        <?php
                        foreach ($ms["mens"] as $key => $value) {
                          echo $value;
                        } 
                        ?>
                       </div>
                       <?php
                    }
                    ?>
                    <div class="text-inner align-self-start" id="inscrever">
                        <p>
                            Para se Inscrever na
                            <a class="MFashion" href="/">
                                MFashion <span>Management</span>
                            </a>
                            você precisa corresponder a estes requisitos
                        </p>
                        <ul class="my-4">
                            <li><span class="ion-ios-checkmark-circle mr-2"></span> NÃO te inscrevas se não tiveres
                                entre os 15 e os 19 anos.</li>
                            <li><span class="ion-ios-checkmark-circle mr-2"></span> NÃO te inscrevas se fores rapariga e
                                medires menos de 1,75m</li>
                            <li><span class="ion-ios-checkmark-circle mr-2"></span> NÃO te inscrevas se fores rapaz e
                                medires menos de 1,84m.</li>
                        </ul>

                    </div>
                </div>
                <div class="col-md-6 order-last ftco-animate">
                    <form action="#resultado" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="">Foto do Rosto</label>
                            <img id="foto_rosto_view" src="" class="img-thumbnail" alt="">
                            <input id="foto_rosto" onchange="loadimgr()" type="file" class="form-control" name="rosto" required>
                        </div>
                        <div class="form-group">
                            <label for="">Foto do Corpo</label>
                            <img id="foto_corpo_view" src="" class="img-thumbnail" alt="">
                            <input id="foto_corpo" onchange="loadimgc()" type="file" class="form-control" name="corpo" required>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <input type="text" name="nome" class="form-control" value="" placeholder="Nome" required>
                            </div>
                            <div class="col-sm-12 my-3">
                                <select class="form-control" name="genero" required>
                                    <option value="masculino">Masculino</option>
                                    <option value="feminino">Feminino</option>
                                </select>
                            </div>
                            <div class="col-sm-12 my-3">
                                <input type="date" name="datan" class="form-control" value="" placeholder="Cabelo" required>
                            </div>
                            <div class="col-sm-12">
                                <input type="text" name="altura" class="form-control" value="" placeholder="Altura" required>
                            </div>
                            <div class="col-sm-12 my-3">
                                <input type="text" name="calcado" class="form-control" value="" placeholder="Calçado" required>
                            </div>
                        </div>
                        <div class="form-group my-3">
                            <input type="text" name="nacionalidade" class="form-control" placeholder="Nacionalidade" require>
                        </div>
                        <div class="form-group">
                            <input type="text" name="rede" class="form-control" placeholder="Link do Facebook/Instagram" require>
                        </div>
                        <div class="form-group my-3">
                            <input type="text" class="form-control" name="email" placeholder="Email" require>
                        </div>
                        <div class="form-group">
                            <textarea name="ms" id="" cols="30" rows="7" class="form-control" placeholder="Mensagem"></textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-view my-5 w3-transparent" name="btn_xadd"><a class="btn-view px-5 py-4 w3-transparent">Inscrever-se</a></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script>
        $(".btn-suss").click(function() {
            $("#suss").hide(100);
        });

        function loadimgc() {
            var img = document.querySelector("#foto_corpo").files[0];
            var render = new FileReader();
            render.onloadend = function() {
                $("#foto_corpo_view").attr("src", render.result);
            }
            if (img) {
                render.readAsDataURL(img);
                $("#foto_corpo_view").show(100);
            } else {
                $("#foto_corpo_view").attr("src", "");
                $("#foto_corpo_view").hide();
            }
        }

        function loadimgr() {
            var img = document.querySelector("#foto_rosto").files[0];
            var render = new FileReader();
            render.onloadend = function() {
                $("#foto_rosto_view").attr("src", render.result);
            }
            if (img) {
                render.readAsDataURL(img);
                $("#foto_rosto_view").show(100);
            } else {
                $("#foto_corpo_view").attr("src", "");
                $("#foto_rosto_view").hide();
            }
        }
    </script>