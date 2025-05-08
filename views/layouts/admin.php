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
  <link rel="stylesheet" href="<?php echo _Assets . "app.css" ?>">
  <style>
    html,
    body {
      overflow-x: hidden;
      /* Prevent scroll on narrow devices */
    }

    body {
      padding-top: 56px;
    }

    @media (max-width: 991.98px) {
      .offcanvas-collapse {
        position: fixed;
        top: 56px;
        /* Height of navbar */
        bottom: 0;
        left: 100%;
        width: 100%;
        padding-right: 1rem;
        padding-left: 1rem;
        overflow-y: auto;
        visibility: hidden;
        background-color: #343a40;
        transition: transform .3s ease-in-out, visibility .3s ease-in-out;
      }

      .offcanvas-collapse.open {
        visibility: visible;
        transform: translateX(-100%);
      }
    }

    .nav-scroller .nav {
      color: rgba(255, 255, 255, .75);
    }

    .nav-scroller .nav-link {
      padding-top: .75rem;
      padding-bottom: .75rem;
      font-size: .875rem;
      color: #6c757d;
    }

    .nav-scroller .nav-link:hover {
      color: #007bff;
    }

    .nav-scroller .active {
      font-weight: 500;
      color: #343a40;
    }

    .bg-purple {
      background-color: #6f42c1;
    }
  </style>
  <script src="/assets/plugins/jquery/jquery.min.js"></script>
</head>

<body class="bg-light">
  <?php View::render(self::$Page_header, self::$Page_conteudo, self::$Page_footer, $dados);  ?>
  <script src="/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/js/offcanvas.js"></script>
  <script src="/assets/js/fresco.min.js"></script>
</body>

</html>