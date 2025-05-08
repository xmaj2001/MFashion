<div class="col-6 col-sm-4 col-md-3  w3-display-container">
    <div class="w3-display-topleft mx-4 mt-3">
        <span>
            <?php
            if ($value["capa"] == 1) {
            ?>
                <i class="btn btn-sm fa fa-star w3-text-lime w3-left" style="padding: 4px;"></i>
            <?php
            } else {
            ?>
                <form method="post">
                    <input type="text" name="capa" class="w3-hide" value="<?php echo $value["id"] ?>">
                    <button class="btn btn-link w3-left btn-sm" style="padding: 1px;"><i class="fa fa-star"></i></button>
                </form>
            <?php
            }
            ?>
        </span>
    </div>
    <div class="w3-display-topright mx-4 mt-3">
        <form method="post">
            <input type="text" name="capae" class="w3-hide" value="<?php echo $value["id"] ?>">
            <button class="btn btn-link text-danger w3-right btn-sm" style="padding: 1px;"><i class="fa fa-trash-o"></i></button>
        </form>
    </div>
    <a href="<?php echo $value["foto"] ?>" class="fresco" data-fresco-group="gallery">
        <img class="img-thumbnail" src="<?php echo $value["foto"] ?>" style="object-fit: cover;" width="100%" height="200" />
    </a>
</div>