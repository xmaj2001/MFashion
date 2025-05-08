<?php
extract($conta);
?>

<div class="bg-dark text-secondary px-4 py-5 text-center">
    <div class="py-5">
        <h1 class="display-5 fw-bold text-white"><?php echo ucwords($nome) ?></h1>
        <div class="col-lg-6 mx-auto">
            <p class="fs-5 mb-4">Conta Admin</p>
            <small class="card-text">Email: <?php echo $email ?></small>
            <br>
        </div>
    </div>
</div>

<main class="container">
    <div class="my-3 p-5 bg-body rounded shadow-sm">
        <form class="needs-validation" method="POST">
            <div class="row g-2">
                <div class="col-sm-12">
                    <?php
                    if ($enome != null) {
                        foreach ($enome as $key => $value) {
                    ?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <?php echo $value ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                    <?php
                        }
                    }

                    ?>
                    <div class="form-floating">
                        <input type="text" name="cp1" class="form-control" value="<?php echo $nome ?>" placeholder="Nome" required>
                        <label for="floatingInput">Nome</label>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-floating">
                        <input type="email" name="cp2" class="form-control" value="<?php echo $email ?>" placeholder="Email" required>
                        <label for="floatingInput">Email</label>
                    </div>
                </div>
                <div class="col-sm-4">
                    <?php
                    if ($erro != null) {
                    ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <?php echo $erro ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php
                    }

                    ?>
                    <div class="form-floating">
                        <input type="password" name="cp3" class="form-control" placeholder="Senha Atual" maxlength="50">
                        <label for="floatingInput">Senha Atual</label>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-floating">
                        <input type="password" name="cp4" class="form-control" placeholder="Nova senha" maxlength="50">
                        <label for="floatingInput">Nova Senha</label>
                    </div>
                </div>

                <button class="btn btn-outline-dark mt-3" type="submit" name="btn_sv">Salvar</button>
            </div>
        </form>
    </div>
</main>