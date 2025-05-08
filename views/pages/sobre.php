<div class="bg-dark text-secondary px-4 py-5 text-center">
    <div class="py-5">
        <h1 class="display-5 fw-bold text-white">Sobre Agência</h1>
    </div>
</div>
<main class="container">
    <nav>
        <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
            <button class="nav-link active" id="sobre1" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Sobre 1</button>
            <button class="nav-link" id="sobre2" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Sobre 2</button>
        </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
        <form class="needs-validation" method="POST">
            <div class="tab-pane fade active show" id="nav-home" role="tabpanel" aria-labelledby="sobre1">
                <textarea name="info1" class="form-control" id="" cols="30" rows="10"><?php echo $info1 ?></textarea>
                <button class="btn btn-outline-dark mt-3" type="submit" name="btn_sv">Salvar</button>
            </div>
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="sobre2">
                <textarea name="info2" class="form-control" id="" cols="30" rows="27"><?php echo $info2 ?></textarea>
                <button class="btn btn-outline-dark mt-3" type="submit" name="btn_sv">Salvar</button>
            </div>
        </form>
    </div>
</main>

<script>
    $("#sobre1").click(function() {
        $("#nav-home").removeClass("w3-hide");
    });
    $("#sobre2").click(function() {
        $("#nav-home").addClass("w3-hide");
    });
</script>