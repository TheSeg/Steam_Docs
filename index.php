<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="John 'Seg' Seggerson">
    <title>Steam WebAPI Proposals by Seg</title>
    <meta name="description" content="">

    <!-- Le styles -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 20px;
        padding-bottom: 40px;
      }

      /* Custom container */
      .container-narrow {
        margin: 0 auto;
        max-width: 700px;
      }
      .container-narrow > hr {
        margin: 30px 0;
      }

      /* Main marketing message and sign up button */
      .jumbotron {
        margin: 60px 0;
        text-align: center;
      }
      .jumbotron h1 {
        font-size: 72px;
        line-height: 1;
      }
      .jumbotron .btn {
        font-size: 21px;
        padding: 14px 24px;
      }

      /* Supporting marketing content */
      .marketing {
        margin: 60px 0;
      }
      .marketing p + h4 {
        margin-top: 28px;
      }
    </style>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="./js/html5shiv.js"></script>
    <![endif]-->

    <script src="./js/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
  </head>

  <body>

    <div class="container-narrow">

      <div class="masthead">
        <ul class="nav nav-pills pull-right">
          <li class="active"><a href="./">Home</a></li>
          <li><a href="./about.php">About</a></li>
          <li><a href="./contact.php">Contact</a></li>
        </ul>
        <h3 class="muted">Steam WebAPI Proposals</h3>
      </div>

      <hr>

      <div class="jumbotron">
        <h1>Steam WebAPI Proposals</h1>
        <p class="lead">A proposal from John "Seg" Seggerson for extending the <a href="https://developer.valvesoftware.com/wiki/Steam_Web_API" target="_blank">Steam WebAPI</a>.</p>
        <a class="btn btn-large btn-info " href="#">Community &amp; Game Groups</a>
        <a class="btn btn-large btn-info " href="#">Game &amp; App Information</a>
      </div>

      <hr>
      
      <div class="row-fluid marketing">
        
        <div class="span6">
          <h4>Community &amp; Game Groups</h4>
          <p>
            Groups are collections of users around a game, specific interest, or external community.
            Currently community API support is via deprecated XML support. This document puts forth
            a new interface and methods for Steam WebAPI access for groups.
          </p>
          <p><a href="#">Learn more...</a></p>

        </div>

        <div class="span6">
          <h4>Game &amp; App Information</h4>
          <p>Provides group metadata including name, URL, and other basic information about the group.</p>
          <p><a href="#">Learn more...</a></p>

        </div>
      </div>

      <hr>

      <div class="footer">
        <p>Proposals developed by <a href="http://segonmedia.com/">Seg</a>. The Steam, WebAPI, and all things related are owned by <a href="http://www.valvesoftware.com/" target="_blank">Valve Software</a>. Of which I (Seg) have no affliction with at all.</p>
      </div>

    </div> <!-- /container -->

  </body>
</html>
