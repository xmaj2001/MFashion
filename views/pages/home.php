<?php
use App\Model\db;
?>
<div id="colorlib-page">
	<header>
		<div class="colorlib-navbar-brand">
			<a class="colorlib-logo MFashion" href="/">MFashion<br><span>Management</span></a>
		</div>
		<a href="/" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
	</header>

	<section class="home-slider owl-carousel">

		<?php
		$modelos = db::SELECIONA("SELECT * from modelo order by emite desc limit 12");
		if (count($modelos) > 0) {
			foreach ($modelos as $key => $value) {
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
				<div class="slider-item" style="background-image: url('<?php echo $capa ?>');background-position: top;">
					<div class="overlay"></div>
					<div class="container">
						<div class="row slider-text justify-content-start align-items-center" data-scrollax-parent="true">
							<div class="col-md-8 col-lg-7 col-sm-12 ftco-animate text mb-4" data-scrollax=" properties: { translateY: '70%' }">
								<span class="position">Top Model's</span>
								<h1 class="mb-3" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><?php echo $value["nome"] ?></h1>
								<div class="d-md-flex models-info mt-5 mb-5">
									<div>
										<p>Altura</p>
										<span><?php echo $value["altura"] ?></span>
									</div>
									<div>
										<p>Busto</p>
										<span><?php echo $value["busto"] ?></span>
									</div>
									<div>
										<p>Cintura</p>
										<span><?php echo $value["cintura"] ?></span>
									</div>
									<div>
										<p>Ancas</p>
										<span><?php echo $value["ancas"] ?></span>
									</div>
									<div>
										<p>Calçados</p>
										<span><?php echo $value["calcado"] ?></span>
									</div>
									<div>
										<p>Olhos</p>
										<span><?php echo $value["olho"] ?></span>
									</div>
									<div>
										<p>Cabelo</p>
										<span><?php echo $value["cabelo"] ?></span>
									</div>
								</div>
								<p><a href="/modelo/<?php echo $value["id"] ?>" class="btn btn-primary px-4 py-3">Ler mais</a> <a href="/modelo/<?php echo $value["id"] ?>#galeria" class="btn btn-primary btn-outline-primary px-4 py-3">Ver Gallery</a></p>
							</div>
						</div>
					</div>
				</div>
		<?php
			}
		}
		?>
	</section>
	<!-- FIM slider -->



	<section class="ftco-section-2 mb-5">
		<div class="container-fluid">
			<div class="row d-flex no-gutters">
				<div class="col-md-6 d-flex align-items-center heading-section ftco-animate bg-light">
					<div class="col-md-12">
						<div class="p-5">
							<h2 class="">Modelos</h2>
							<p>Desejas se inscrever?</p>
							<p class="btn-view my-5"><a href="#inscrever">Inscrever-se</a></p>
						</div>
					</div>
				</div>
				
				<?php
				$modelos = db::SELECIONA("SELECT * from modelo order by emite desc");
				if (count($modelos) > 0) {
					foreach ($modelos as $key => $value) {
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
						if($capa == null){
							continue;
						}

				?>
						<div class="col-md-3 model-entry ftco-animate">
							<div class="model-img" style="background-image: url(<?php echo $capa ?>);">
								<div class="name">
									<h3 class="MFashion"><a href="/modelo/<?php echo $value["id"] ?>"><?php echo $value["nome"] ?></a></h3>
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

				<div class="col-md-3 d-flex my-5 justify-content-center align-items-center bg-light ftco-animate">
					<div class="btn-view">
						<p><a href="/modelos">Ver mais</a></p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- FIM MODELOS -->

	<section class="ftco-section-2">
		<div class="container-fluid">
			<div class="section-2-blocks-wrapper d-flex row no-gutters">
				<div class="text col-md-6 ftco-animate heading-section ftco-animate img" style="background-image: url(/assets/images/bg_1.jpg);">
					<h1 class="text-center center" style="margin-top: 50%;">
						<div class="colorlib-navbar-brand text-white">
							<a class="colorlib-logo text-white MFashion" href="/">MFashion<br><span>Management</span></a>
						</div>
					</h1>
				</div>
				<div class="text col-md-6 ftco-animate">
					<div class="text-inner align-self-start" id="inscrever">
						<h3 class="heading mt-2">Inscreve-se</h3>
						<p>Para se Inscrever na <strong>MFashion</strong> você precisa corresponder a estes requisitos</p>
						<ul class="my-4">
							<li><span class="ion-ios-checkmark-circle mr-2"></span> NÃO te inscrevas se não tiveres entre os 15 e os 19 anos.</li>
							<li><span class="ion-ios-checkmark-circle mr-2"></span> NÃO te inscrevas se fores rapariga e medires menos de 1,75m</li>
							<li><span class="ion-ios-checkmark-circle mr-2"></span> NÃO te inscrevas se fores rapaz e medires menos de 1,84m.</li>
						</ul>
						<p class="btn-view my-5"><a href="/inscrever-se">Inscrever-se</a></p>
					</div>
				</div>
			</div>
		</div>
	</section>

	
</div>