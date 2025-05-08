<small class="d-block text-end mt-3">
    <div class=" text-center">
        <div class="block-27">
            <?php
            if ($pagina != 1) {
            ?>
                <button class="btn btn-outline-dark" onclick="ant()" id="ant">
                    &lt; <span class="w3-hide"><?php echo $ant ?></span>
                </button>
            <?php
            }
            ?>
            <?php
            if ($pagina < $paginas) {
            ?>
                <button class="btn btn-outline-dark" onclick="prox()" id="prox">
                    &gt; <span class="w3-hide"><?php echo $prox ?></span>
                </button>
            <?php
            }
            ?>
        </div>
    </div>
</small>