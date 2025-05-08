<?php

use App\lib\View;

?>
<!DOCTYPE html>
<html lang="pt-PT">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="<?php echo self::$Page_author ?>" />
	<meta name="keywords" content="<?php echo self::$Page_keywords ?>" />
	<meta name="description" content="<?php echo self::$Page_description ?>" />
	<title>
		<?php echo self::$Page_titulo ?>
	</title>
	<meta property="og:title" content="<?php echo self::$Page_titulo ?>" />
	<meta property="og:image" content="<?php echo self::$Page_image ?>" />
	<meta property="og:url" content="<?php echo self::$Page_url ?>" />
	<meta property="og:site_name" content="<?php echo self::$Page_titulo ?>" />
	<meta property="og:description" content="<?php echo self::$Page_description ?>" />
	<meta name="twitter:title" content="<?php echo self::$Page_titulo ?>" />
	<meta name="twitter:image" content="<?php echo self::$Page_image ?>" />
	<meta name="twitter:url" content="<?php echo self::$Page_url ?>" />
	<meta name="twitter:card" content="<?php echo self::$Page_card ?>" />
	<link rel="shortcut icon" href="<?php echo self::$Page_logo ?>" type="image/x-icon">

	<link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">

	<link rel="stylesheet" href="/assets/md.css">
	<link rel="stylesheet" href="/assets/css/open-iconic-bootstrap.min.css">
	<link rel="stylesheet" href="/assets/css/animate.css">

	<link rel="stylesheet" href="/assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="/assets/css/owl.theme.default.min.css">
	<link rel="stylesheet" href="/assets/css/magnific-popup.css">

	<link rel="stylesheet" href="/assets/css/aos.css">

	<link rel="stylesheet" href="/assets/css/ionicons.min.css">

	<link rel="stylesheet" href="/assets/css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="/assets/css/jquery.timepicker.css">

	<link rel="stylesheet" href="/assets/css/flaticon.css">
	<link rel="stylesheet" href="/assets/css/icomoon.css">
	<link rel="stylesheet" href="/assets/css/stylemf.css">
	<!--===============================================================================================-->
	<script src="/assets/js/jquery.min.js"></script>
</head>

<body>
	<div class="page">
		<?php View::render(self::$Page_header, self::$Page_conteudo, self::$Page_footer, $dados);  ?>
	</div>
	<script src="/assets/js/jquery-migrate-3.0.1.min.js"></script>
	<script src="/assets/js/popper.min.js"></script>
	<script src="/assets/js/bootstrap.min.js"></script>
	<script src="/assets/js/jquery.easing.1.3.js"></script>
	<script src="/assets/js/jquery.waypoints.min.js"></script>
	<script src="/assets/js/jquery.stellar.min.js"></script>
	<script src="/assets/js/owl.carousel.min.js"></script>
	<script src="/assets/js/jquery.magnific-popup.min.js"></script>
	<script src="/assets/js/aos.js"></script>
	<script src="/assets/js/jquery.animateNumber.min.js"></script>
	<script src="/assets/js/scrollax.min.js"></script>
	<script src="/assets/js/bootstrap-datepicker.js"></script>
	<script src="/assets/js/jquery.timepicker.min.js"></script>
	<script src="/assets/js/fresco.min.js"></script>
	<script src="/assets/js/main.js"></script>
</body>

</html>