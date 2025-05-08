<?php

use App\lib\View;

?>
<!DOCTYPE html>
<html lang="pt-PT" class="h-100">

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
  <link rel="stylesheet" href="<?php echo _Assets . "app.css" ?>">
  <style>
    /*
 * Globals
 */


    /* Custom default button */
    .btn-light,
    .btn-light:hover,
    .btn-light:focus {
      color: #333;
      text-shadow: none;
      /* Prevent inheritance from `body` */
    }


    /*
 * Base structure
 */

    body {
      text-shadow: 0 .05rem .1rem rgba(0, 0, 0, .5);
      box-shadow: inset 0 0 5rem rgba(0, 0, 0, .5);
    }

    .cover-container {
      max-width: 42em;
    }


    /*
 * Header
 */

    .nav-masthead .nav-link {
      color: rgba(255, 255, 255, .5);
      border-bottom: .25rem solid transparent;
    }

    .nav-masthead .nav-link:hover,
    .nav-masthead .nav-link:focus {
      border-bottom-color: rgba(255, 255, 255, .25);
    }

    .nav-masthead .nav-link+.nav-link {
      margin-left: 1rem;
    }

    .nav-masthead .active {
      color: #fff;
      border-bottom-color: #fff;
    }
  </style>
  <script src="/assets/plugins/jquery/jquery.min.js"></script>
</head>

<body class="d-flex h-100 text-center w3-text-white bg-dark">
  <?php View::render(self::$Page_header, self::$Page_conteudo, self::$Page_footer, $dados);  ?>
  <script src="/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/js/offcanvas.js"></script>
  <script src="/assets/js/fresco.min.js"></script>
</body>

</html>