<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/favicon.ico" />
    <link rel="apple-touch-icon" href="/img/proposal_steam_webapi_logo.png" />
    <meta name="author" content="John 'Seg' Seggerson">
<?php echo SteamDocs::GetHeadData($page); ?>

    <link href="./css/bootstrap.css" rel="stylesheet">
    <link href="./css/responsive.css" rel="stylesheet">
    <link href="./css/font-awesome.css" rel="stylesheet">
    <link href="./js/prettify/prettify.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="./js/html5shiv.js"></script>
    <![endif]-->

    <script src="./js/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/jquery.smooth-scroll.min.js"></script>
    <script src="./js/bootswatch.min.js"></script>
    <script src="./js/prettify/run_prettify.js"></script>
    <script src="./js/holder.min.js"></script>
    <script src="./js/steamdocs.min.js"></script>
    <?php if ( strtolower($_SERVER["HTTP_HOST"]) == "steam.segonmedia.com" || strtolower($_SERVER["HTTP_HOST"]) == "steam.segonmedia.org" || strtolower($_SERVER["HTTP_HOST"]) == "steam.segonmedia.net" ) { ?>
      <!-- Google tag (gtag.js) -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=G-7B9FWKJLFN"></script>
      <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-7B9FWKJLFN');
      </script>
    <?php } else { ?>
      <!-- Google Analytics Disabled -->
    <?php } ?>
</head>

<body class="preview" id="top" data-spy="scroll" data-target=".subnav" data-offset="100">
<div id='fb-root'></div>
<?php include("masthead.php"); ?>