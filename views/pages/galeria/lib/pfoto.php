<small class="d-block text-end mt-3">
    <div class="text-center">
        <div class="block-27">
            <?php
            if ($pagina != 1) {
            ?>
                <form action="#fotos" method="post" class="d-inline">
                    <input type="text" name="page" value="<?php echo $ant ?>" class="w3-hide">
                    <button class="btn btn-outline-dark">
                        &lt;
                    </button>
                </form>
            <?php
            }
            ?>
            <?php
            if ($pagina < $paginas) {
            ?>
                <form action="#fotos" method="post" class="d-inline">
                    <input type="text" name="page" value="<?php echo $prox ?>" class="w3-hide">
                    <button class="btn btn-outline-dark">
                        &gt;
                    </button>
                </form>
            <?php
            }
            ?>
        </div>
    </div>
</small>