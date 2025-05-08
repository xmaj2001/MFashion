<?php
use App\lib\session;
?>
<style>
  .btn-i:hover {
    background-color: chocolate;
    transition: all 200ms;
  }
</style>
<nav id="colorlib-main-nav" role="navigation" style="background-color: rgba(20,20,20,0.7)!important;">
  <a href="/" class="js-colorlib-nav-toggle colorlib-nav-toggle active"><i></i></a>
  <div class="js-fullheight colorlib-table">
    <div class="img" style="background-image: url(/assets/images/bg_1.jpg);"></div>
    <div class="colorlib-table-cell js-fullheight">
      <div class="row no-gutters">
        <div class="col-md-12 text-center">
          <h1 class="mb-4 "><a href="/" class="logo MFashion">MFashion<br><span>Management</span></a></h1>
          <ul>
            <li class="active"><a href="/"><span><small></small>Inicial</span></a></li>
            <li><a href="/sobre/agencia"><span><small></small>Sobre Agência</span></a></li>
            <li><a href="/modelos"><span><small></small>Modelos</span></a></li>
            <li><a href="/contactos"><span><small></small>Contactos</span></a></li>
            <?php
            if (session::existe("cxmaj")) {
              ?>
              <li><a href="/admin"><span><small><i class=" fa fa-sign-in"></i></small>Admin</span></a></li>
            <?php
            } else {
            ?>
              <li><a href="/login"><span><small><i class=" fa fa-sign-in"></i></small>Entrar</span></a></li>
            <?php
            }
            ?>

            <li><a href="/Inscrever-se"><span><span class="btn btn-outline-success btn-i" style="border-color: chocolate; font-size: 20px;">Inscrever-se</span></span></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</nav>