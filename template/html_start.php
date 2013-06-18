<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="John 'Seg' Seggerson">
<?php echo SteamDocs::GetHeadData($page); ?>

    <link href="./css/bootstrap.css" rel="stylesheet">
    <link href="./css/responsive.css" rel="stylesheet">
    <link href="./css/font-awesome.css" rel="stylesheet">
    <link href="./js/prettify/prettify.css" rel="stylesheet">
    <link href="./css/steamdocs.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="./js/html5shiv.js"></script>
    <![endif]-->

    <script src="./js/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/bootswatch.min.js"></script>
    <script src="./js/prettify/run_prettify.js"></script>
    <script src="./js/steamdocs.min.js"></script>
    <?php if ( strtolower($_SERVER["HTTP_HOST"]) == "steam.segonmedia.com" || strtolower($_SERVER["HTTP_HOST"]) == "steam.segonmedia.org" || strtolower($_SERVER["HTTP_HOST"]) == "steam.segonmedia.net" ) { ?>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-6339343-3', 'segonmedia.com');
      ga('send', 'pageview');
    </script>
    <?php } else { ?>
    <!-- Google Analytics Disabled -->
    <?php } ?>
</head>

<body id="top" data-spy="scroll" data-target=".subnav" data-offset="80">
<div id='fb-root'></div>
<?php include("masthead.php"); ?>