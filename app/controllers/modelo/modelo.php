<div class="col-6 col-md-4 mb-4">
    <div class="card">
        <div class="row g-2">
            <div class="col-md-12">
                <img src="<?php echo $capa ?>" class="img rounded" style="object-fit: cover;" width="100%" height="100%" />
            </div>
            <div class="col-md-10">
                <div class="card-body">
                    <h6 class="card-title"><?php echo $nome ?></h6>
                    <span>
                        <a href="/modelo/<?php echo $value["id"] ?>" class="btn p-0">Ver</a>
                        <a href="/admin/editar/modelo/<?php echo $value["id"] ?>" class="btn">Editar</a>
                        <a href="/admin/editar/galeria/modelo/<?php echo $value["id"] ?>" class="btn p-0">Galeria</a>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>