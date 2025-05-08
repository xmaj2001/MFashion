<div class="bg-dark text-secondary px-4 py-5 text-center">
    <div class="py-5">
        <h1 class="display-5 fw-bold text-white"><?php echo $nome ?></h1>
        <div class="col-lg-6 mx-auto">
            <p class="fs-5 mb-4">Modelo</p>
            <small class="card-text">Gênero: <?php echo ucwords($genero) ?></small>
            <br>
            <small class="card-text">Altura: <?php echo $altura ?></small>
            <br>
            <small class="card-text">Busto: <?php echo $busto ?></small>
            <br>
            <small class="card-text">Cintura: <?php echo $cintura ?></small>
            <br>
            <small class="card-text">Ancas: <?php echo $ancas ?></small>
            <br>
            <small class="card-text">Calçado: <?php echo $calcado ?></small>
            <br>
            <small class="card-text">Cabelo: <?php echo $cabelo ?></small>
            <br>
            <small class="card-text">Cor do olhos: <?php echo ucwords($olho) ?></small>
            <br>
            <small class="d-block"><?php echo  date("d/m/Y", strtotime($emite)) ?></small>
            <!-- <small class="card-text"><?php echo ucwords($nacionalidade) ?></small> -->
            <br>
            <div class="modal-dialog" role="document" id="modal">
                <div class="modal-content rounded-3 shadow">
                    <div class="modal-body p-4 text-center">
                        <h5 class="mb-0 text-danger">Pretendes eliminar este modelo?</h5>
                        <p class="mb-0">
                            Saiba que não a como voltar atrás se eliminares este modelo.
                            <br>
                            Todos os dados do modelo e a galeria de fotos serão apagados.
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
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center container">
                <a href="/admin/editar/galeria/modelo/<?php echo $id ?>" class="btn btn-outline-info me-sm-2 fw-bold">Galeria</a>
                <button type="button" class="btn btn-outline-danger " id="btn_del">Apagar</button>
            </div>
        </div>
    </div>
</div>

<main class="container">
    <div class="my-3 p-5 bg-body rounded shadow-sm">
        <form class="needs-validation" method="POST">
            <div class="row g-2">
                <div class="col-sm-12">
                    <input type="text" name="nome" class="form-control" value="<?php echo $nome ?>" placeholder="Nome" required>
                </div>
                <div class="col-sm-12">
                    <select class="form-select" name="genero" required>
                        <?php
                        if ($genero != "masculino") {
                        ?>
                            <option value="feminino">Feminino</option>
                            <option value="masculino">Masculino</option>
                        <?php
                        } else {
                        ?>
                            <option value="masculino">Masculino</option>
                            <option value="feminino">Feminino</option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="col-sm-4">
                    <input type="text" name="altura" class="form-control" value="<?php echo $altura ?>" placeholder="Altura" required>
                </div>
                <div class="col-sm-4">
                    <input type="text" name="busto" class="form-control" value="<?php echo $busto ?>" placeholder="Busto" required>
                </div>
                <div class="col-sm-4">
                    <input type="text" name="cintura" class="form-control" value="<?php echo $cintura ?>" placeholder="Cintura" required>
                </div>
                <div class="col-sm-4">
                    <input type="text" name="ancas" class="form-control" value="<?php echo $ancas ?>" placeholder="Ancas" required>
                </div>
                <div class="col-sm-4">
                    <input type="text" name="calcado" class="form-control" value="<?php echo $calcado ?>" placeholder="Calçado" required>
                </div>
                <div class="col-sm-4">
                    <input type="text" name="cabelo" class="form-control" value="<?php echo $cabelo ?>" placeholder="Cabelo" required>
                </div>
                <div class="col-sm-4">
                    <input type="text" name="olho" class="form-control" value="<?php echo $olho ?>" placeholder="Olho" required>
                </div>
                <div class="col-sm-4">
                    <input type="text" name="rede1" class="form-control" value="<?php echo $rede1 ?>" placeholder="Link Twitter" maxlength="250">
                </div>
                <div class="col-sm-4">
                    <input type="text" name="rede2" class="form-control" value="<?php echo $rede2 ?>" placeholder="Link Facebook" maxlength="250">
                </div>
                <div class="col-sm-4">
                    <input type="text" name="rede3" class="form-control" value="<?php echo $rede3 ?>" placeholder="Link Instagram" maxlength="250">
                </div>
                <button class="btn btn-outline-dark mt-3" type="submit" name="btn_sv">Salvar</button>
            </div>
        </form>
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