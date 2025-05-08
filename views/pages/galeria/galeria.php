<?php

?>
<div class="bg-dark text-secondary px-4 py-5 text-center">
    <div class="py-5">
        <h1 class="display-5 fw-bold text-white lead"><?php echo $nome ?></h1>
        <div class="col-lg-6 mx-auto">
            <p class="fs-5 mb-4 lead">Galeria </p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center container">
                <a href="/admin/editar/modelo/<?php echo $idmodelo ?>" type="button" class="btn btn-outline-success me-sm-2 fw-bold">Editar Modelo</a>
            </div>
        </div>
    </div>
    <form method="post" class="">
        <button class="btn btn-sm text-white">Atualizar <i class="fa fa-star"></i></button>
        <button name="capam" class="btn btn-sm w3-text-lime">Capa <i class="fa fa-star"></i></button>
        <button name="capan" class="btn btn-sm w3-text-red">Remover capa <i class="fa fa-star"></i></button>
    </form>
</div>
<div class="bg-body shadow-sm">
    <div class="row">

    </div>
</div>
<div class="bg-dark rounded shadow-sm">
    <div class="container" id="adddg">
        <form method="post" class="w3-center w3-centered">
            <input type="url" class="form-control-sm bg-dark w3-border-0 w3-text-white" name="foto" placeholder="Link da foto a ser adicionada" require minlength="5">
            <br>
            <button name="btn_add" class="btn btn-outline-secondary btn-sm mb-3 mt-5">
                Adicionar
            </button>
            <input type="text" name="idmodelo" class="w3-hide" value="<?php echo $idmodelo ?>">
        </form>
    </div>
</div>

<main class="containez">
    <div class="my-3 p-2 rounded">
        <div class="row g-2" id="fotos">
            <?php
            if($sq != null){
                extract($sq);
                foreach ($itens as $key => $value) {
                    require "lib/foto.php";
                }
                require "lib/pfoto.php";
            }
            ?>
        </div>

    </div>
</main>