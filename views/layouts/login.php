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
  <link rel="stylesheet" href="<?php echo _Assets . "app.css" ?>">
  <style>
    html,
    body {
      height: 100%;
    }

    body {
      display: flex;
      align-items: center;
      padding-top: 40px;
      padding-bottom: 40px;
      background-color: #f5f5f5;
    }

    .form-signin {
      max-width: 330px;
      padding: 15px;
    }

    .form-signin .form-floating:focus-within {
      z-index: 2;
    }

    .form-signin input[type="email"] {
      margin-bottom: -1px;
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
    }

    .form-signin input[type="password"] {
      margin-bottom: 10px;
      border-top-left-radius: 0;
      border-top-right-radius: 0;
    }
  </style>
  <script src="/assets/plugins/jquery/jquery.min.js"></script>
</head>

<body class="text-center">
  <?php View::render(self::$Page_header, self::$Page_conteudo, self::$Page_footer, $dados);  ?>
  <script src="/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/js/offcanvas.js"></script>
  <script src="/assets/js/fresco.min.js"></script>
</body>

</html>