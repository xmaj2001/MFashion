<div class="bg-dark text-secondary px-4 py-5 text-center w3-display-container">
    <div class="py-5">
        <h1 class="display-5 fw-bold text-white"><?php echo $nome ?></h1>
        <div class="col-lg-6 mx-auto">
            <small class="card-text">Altura: <?php echo $altura ?></small>
            <br>
            <small class="card-text">Calçado: <?php echo $calcado ?></small>
            <br>
            <small class="card-text">Gênero: <?php echo ucwords($genero) ?></small>
            <br>
            <small class="card-text">Nasceu: <?php echo  date("d/m/Y", strtotime($datan)) ?></small>
            <br>
            <small class="card-text">Email: <?php echo ucwords($email) ?></small>
            <br>
            <small class="card-text">Rede Social: <?php echo ucwords($rede) ?></small>
            <br>
            <small class="card-text"><?php echo ucwords($nacionalidade) ?></small>
            <br>
            <h3>Mensagem</h3>
            <p><?php echo nl2br($ms) ?></p>
            <small class="d-block"><?php echo  date("d/m/Y", strtotime($emite)) ?></small>
            <div class="modal-dialog" role="document" id="modal">
                <div class="modal-content rounded-3 shadow">
                    <div class="modal-body p-4 text-center">
                        <h5 class="mb-0 text-danger">Pretendes eliminar este Inscrito?</h5>
                        <p class="mb-0">
                            Saiba que não a como voltar atrás se eliminares este Inscrito.
                        </p>
                    </div>
                    <div class="modal-footer flex-nowrap p-0">
                        <form action="" method="post" class="fs-6 text-decoration-none col-6 m-0 rounded-0">
                            <button name="btn_del" class="btn btn-lg btn-link border-end text-danger text-decoration-none"><strong>Eliminar <i class="fa fa-trash"></i></strong></button>
                        </form>
                        <button type="button" class="btn btn-lg btn-link fs-6 text-decoration-none col-6 m-0 rounded-0" id="btn_not" data-bs-dismiss="modal">Não</button>
                    </div>
                </div>
            </div>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center container my-3">
            <button type="button" class="btn btn-outline-danger " id="btn_del">Apagar</button>
            </div>
        </div>
    </div>
</div>
<main class="container">
    <div class="my-3 p-5 bg-body rounded shadow-sm row g-4">
        <a class="card col-md-6 col-lg-3 fresco bg-dark" style="text-decoration: none;" href="/assets/uploads/<?php echo $rosto ?>" data-fresco-group="gallery">
            <img src="/assets/uploads/<?php echo $rosto ?>" class="rounded img mt-2" style="object-fit: cover;" width="100%" height="100%" />
            <div class="card-body p-2">
                <p class="MFashion">Rosto</p>
            </div>
        </a>
        <a class="card col-md-6 col-lg-3 fresco bg-dark w3-hide-large w3-hide-medium" style="text-decoration: none;" href="/assets/uploads/<?php echo $corpo ?>" data-fresco-group="gallery">
            <img src="/assets/uploads/<?php echo $corpo ?>" class="rounded img mt-2" style="object-fit: cover;" width="100%" height="100%" />
            <div class="card-body p-2">
                <p class="MFashion">Corpo</p>
            </div>
        </a>

        <a class="card col-md-6 col-lg-3 fresco bg-dark mx-2 w3-hide-small" style="text-decoration: none;" href="/assets/uploads/<?php echo $corpo ?>" data-fresco-group="gallery">
            <img src="/assets/uploads/<?php echo $corpo ?>" class="rounded img mt-2" style="object-fit: cover;" width="100%" height="100%" />
            <div class="card-body p-2">
                <p class="MFashion">Corpo</p>
            </div>
        </a>

    </div>
</main>

<script>
    $("#modal").hide();
    $("#btn_del").click(function() {
        $(this).hide();
        $("#modal").show(150);
    });

    $("#btn_not").click(function() {
        $("#btn_del").show(100);
        $("#modal").hide(100);
    });
</script>