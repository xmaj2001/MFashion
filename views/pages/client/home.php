<?php
use App\Model\db;

$fundo = "";
$Titulo = "Modelos";
extract($rede);
if (isset($tipo_page) && $tipo_page != null) {
	$fundo = $tipo_page;
	$Titulo = $tipo_page;
}
?>
<!-- Modelos -->
<div id="colorlib-page">
	<header>
		<div class="colorlib-navbar-brand">
			<a class="colorlib-logo MFashion" href="/">MFashion<br><span>Management</span></a>
		</div>
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
	</header>

	<section class="hero-wrap" style="background-image: url(/assets/img/modelo/bg_<?php echo $fundo ?>.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters text align-items-end justify-content-center" data-scrollax-parent="true">
				<div class="col-md-8 ftco-animate text-center">
					<h1 class="mb-5 bread MFashion"><?php echo $Titulo ?></h1>
					<p class="breadcrumbs"><span class="mr-2">

							<a href="/modelos/masculino"> <i class="icon-male MFashion"></i> Maculino</a> |
							<a href="/modelos/feminino" class="text-white"><i class="icon-female MFashion"></i> Feminino</a></span>
						<br>
						<br>
						<a href="/modelos" style="color: chocolate;">
							<h4>Todos</h4>
						</a>
					</p>
					<ul class="ftco-footer-social list-unstyled  mt-5">
						<li class="ftco-animate"><a href="<?php echo $rede2 ?>"><span class="icon-twitter"></span></a></li>
						<li class="ftco-animate"><a href="<?php echo $rede1 ?>"><span class="icon-facebook"></span></a></li>
						<li class="ftco-animate"><a href="<?php echo $rede3 ?>"><span class="icon-instagram"></span></a></li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<!-- END slider -->

	<section class="ftco-section-2 mb-5 pb-5">
		<div class="container-fluid">
			<div class="row d-flex no-gutters">
				<?php
				if (isset($modelos)) {
					foreach ($modelos["itens"] as $key => $value) {
						$capa = null;
						$id = $value["id"];
						$viewcapa = db::SELECIONA("SELECT foto from galeria where idmodelo ='$id' and capa = 1 limit 2");
						if (count($viewcapa) > 0) {
							$capa = db::Scoluna("SELECT foto from galeria where idmodelo ='$id' and capa = 1", "foto");
						} else {
							$view = db::SELECIONA("SELECT foto from galeria where idmodelo ='$id' order by emite desc limit 1");
							if (count($view) > 0) {
								$capa = $view[0]["foto"];
							}
						}

				?>
						<div class="col-md-3 model-entry ftco-animate">
							<div class="model-img" style="background-image: url(<?php echo $capa ?>);">
								<div class="name">
									<h3><a href="/modelo/<?php echo $value["id"] ?>"><?php echo $value["nome"] ?></a></h3>
								</div>
								<div class="text">
									<h3><a href="/modelo/<?php echo $value["id"] ?>"><?php echo $value["nome"] ?></a></h3>
									<div class="d-flex models-info">
										<div class="pr-md-3 mx-2">
											<p>Altura</p>
											<span><?php echo $value["altura"] ?></span>
										</div>
										<div class="pr-md-3 mx-2">
											<p>Busto</p>
											<span><?php echo $value["busto"] ?></span>
										</div>
										<div class="pr-md-3 mx-2">
											<p>Cintura</p>
											<span><?php echo $value["cintura"] ?></span>
										</div>
										<div class="pr-md-3 mx-2">
											<p>Ancas</p>
											<span><?php echo $value["ancas"] ?></span>
										</div>
										<div class="pr-md-3 mx-2">
											<p>Calçados</p>
											<span><?php echo $value["calcado"] ?></span>
										</div>
									</div>
								</div>
							</div>
						</div>
				<?php
					}
				}
				?>
			</div>
			<div class="row no-gutters mt-5">
				<div class="col text-center">
					<div class="block-27">
						<ul>
							<li>
								<a href="">
									<form method="post">
										<input type="text" class="w3-hide" name="page" value="<?php echo $ant ?>">
										<button class="btn">&lt;</button>
									</form>
								</a>
							</li>
							<?php
							for ($i = 1; $i <= $paginas; $i++) {
								$active = "";
								if ($page == $i) {
									$active = "active";
								}
							?>
								<li class="<?php echo $active ?>">
									<a href="">
										<form method="post">
											<input type="text" name="page" class="w3-hide" value="<?php echo $i ?>">
											<button class="btn w3-transparent w3-border-0 w3-text-lime"><?php echo $i ?></button>
										</form>
									</a>

								</li>
							<?php
							}
							?>
							<li>
								<a href="">
									<form method="post">
										<input type="text" class="w3-hide" name="page" value="<?php echo $prox ?>">
										<button class="btn">&gt;</button>
									</form>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>