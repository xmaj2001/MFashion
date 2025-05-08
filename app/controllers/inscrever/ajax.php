<div class="col-6 col-md-4 mb-4">
    <div class="card">
        <div class="row g-3">
            <div class="col-md-12">
                <img src="/assets/uploads/<?php echo $rosto ?>" class="rounded img" style="object-fit: cover;" width="100%" height="100%" />
            </div>
            <div class="col-md-10">
                <div class="card-body">
                    <p><b class="card-title"><?php echo $nome ?></b></p>
                    <small class="card-text">Altura: <?php echo $altura ?></small>
                    <br>
                    <small class="card-text">Calçado: <?php echo $calcado ?></small>
                    <br>
                    <small class="card-text">Gênero: <?php echo ucwords($genero) ?></small>
                    <br>
                    <small class="card-text"><?php echo ucwords($nacionalidade) ?></small>
                    <br>
                    <span>
                        <a href="/admin/inscrito/<?php echo $value["id"] ?>" class="btn">Detalhes</a>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>