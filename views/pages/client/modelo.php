<?php
if ($capa == null && count($mdview) > 0) {
	$fundo = $mdview[0]["foto"];
} else {
	$fundo = $capa;
}
array_shift($mdview);
?>
<div id="colorlib-page">

	<header>
		<div class="colorlib-navbar-brand">
			<a class="colorlib-logo MFashion" href="/">MFashion<br><span>Management</span></a>
		</div>
		<a href="/" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
	</header>
	<section class="hero-wrap w3-display-container" style="background-image: url(<?php echo $fundo ?>);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="w3-display-middle bg-dark" style="width: 100%;height: 100%;opacity: 0.2;">
		</div>
		<div class="container">
			<div class="row no-gutters text align-items-end justify-content-center" data-scrollax-parent="true">
				<div class="col-md-8 ftco-animate text-center">
					<p class="breadcrumbs"><span class="mr-2"><a href="/modelos">Modelos</a></span> <span class="mr-2"><a href="/modelos/<?php echo $modelo["genero"] ?>"><?php echo $modelo["genero"] ?></a></span> <span></span></p>
					<h5 class="mb-5 bread text-white"><?php echo $modelo["nome"] ?></hs1>
						<ul class="ftco-footer-social list-unstyled  mt-5">
							<?php
							if ($modelo["rede1"] != "") {
							?>
								<li class="ftco-animate"><a href="<?php echo $modelo["rede2"] ?>"><span class="icon-twitter"></span></a></li>
							<?php
							}
							?>
							<?php
							if ($modelo["rede2"] != "") {
							?>
								<li class="ftco-animate"><a href="<?php echo $modelo["rede1"] ?>"><span class="icon-facebook"></span></a></li>
							<?php
							}
							?>
							<?php
							if ($modelo["rede3"] != "") {
							?>
								<li class="ftco-animate"><a href="<?php echo $modelo["rede3"] ?>"><span class="icon-instagram"></span></a></li>
							<?php
							}
							?>
						</ul>
				</div>
			</div>
		</div>
	</section>
	<!-- END slider -->

	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-10">
					<div class="row model-detail d-mf-flex align-items-center">
						<div class="col-md-6 ftco-animate">
							<div class="carousel-model owl-carousel">
								<?php
								if ($capa != null) {
								?>
									<div class="items">
										<img src="<?php echo $capa ?>" class="img-fluid" alt="Colorlib Template">
									</div>
									<?php
								}
								if (count($mdview) > 0) {
									foreach ($mdview as $key => $value) {
									?>
										<div class="items">
											<img src="<?php echo $value["foto"] ?>" class="img-fluid" alt="Colorlib Template">
										</div>
								<?php
									}
								}
								?>
							</div>
						</div>
						<div class="col-md-1"></div>
						<div class="col-md-5 model-info ftco-animate">
							<h3 class="mb-4"><?php echo $modelo["nome"] ?></h3>
							<p><span>Altura</span> <span><?php echo $modelo["altura"] ?></span></p>
							<p><span>Busto</span> <span><?php echo $modelo["busto"] ?></span></p>
							<p><span>Cintura</span> <span><?php echo $modelo["cintura"] ?></span></p>
							<p><span>Ancas</span> <span><?php echo $modelo["ancas"] ?></span></p>
							<p><span>Dress</span> <span><?php echo $modelo["olho"] ?></span></p>
							<p><span>Calçado</span> <span><?php echo $modelo["cabelo"] ?></span></p>
							<p><span>Olhos</span> <span><?php echo $modelo["olho"] ?></span></p>
							<ul class="ftco-footer-social list-unstyled  mt-5">
								<?php
								if ($modelo["rede1"] != "") {
								?>
									<li class="ftco-animate"><a href="<?php echo $modelo["rede2"] ?>"><span class="icon-twitter"></span></a></li>
								<?php
								}
								?>
								<?php
								if ($modelo["rede2"] != "") {
								?>
									<li class="ftco-animate"><a href="<?php echo $modelo["rede1"] ?>"><span class="icon-facebook"></span></a></li>
								<?php
								}
								?>
								<?php
								if ($modelo["rede3"] != "") {
								?>
									<li class="ftco-animate"><a href="<?php echo $modelo["rede3"] ?>"><span class="icon-instagram"></span></a></li>
								<?php
								}
								?>
							</ul>
							<!-- <p class="mt-4"><a href="/" class="btn btn-primary py-3 px-4">Caderno do Modelo</a></p> -->
						</div>
					</div>
					<div class="row no-gutters my-5" id="galeria">

					</div>

				</div>
			</div>
		</div>
	</section>
</div>


<script>
	$.ajax({
		method: "POST",
		url: "/ajaxgaleria",
		data: {
			modelo: "<?php echo $modelo["id"]; ?>"
		},
		success: function(result) {
			$("#galeria").html(result);
		}
	});

	function ant() {
		$.ajax({
			method: "POST",
			url: "/ajaxgaleria",
			data: {
				modelo: "<?php echo $modelo["id"]; ?>",
				page: $("#ant span").html()
			},
			success: function(result) {
				$("#galeria").html(result);
			}
		});
	}

	function prox() {
		$.ajax({
			method: "POST",
			url: "/ajaxgaleria",
			data: {
				modelo: "<?php echo $modelo["id"]; ?>",
				page: $("#prox span").html()
			},
			success: function(result) {
				$("#galeria").html(result);
			}
		});
	}
</script>