<main class="form-signin w-100 m-auto">
    <form method="post"> 
        <img class="mb-4" src="/assets/img/logo/logo.png" alt="" width="52" height="57">
        <h1 class="h3 mb-3 fw-normal">Entrar</h1>
        <?php 
        if(isset($uss) && $uss != null){
            require "lib/alerta_danger2.php";
        }
        ?>
        <div class="form-floating">
            <input type="text" class="form-control" name="cp1" placeholder="Nome">
            <label for="floatingInput">Nome do Usuário</label>
        </div>
        <?php 
        if(isset($nome) && $nome != null){
            foreach ($nome as $key => $value) {
               require "lib/alerta_danger.php";
            }
        }
        ?>
        <div class="form-floating">
            <input type="email" class="form-control" name="cp2" placeholder="name@example.com">
            <label for="floatingInput">Email</label>
        </div>
        <?php 
        if(isset($email) && $email != null){
            foreach ($email as $key => $value) {
               require "lib/alerta_danger.php";
            }
        }
        ?>
        <div class="form-floating">
            <input type="password" class="form-control" name="cp3" placeholder="Senha">
            <label for="floatingPassword">Senha</label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" name="btn_login"  type="submit">Entrar</button>
    </form>
</main>