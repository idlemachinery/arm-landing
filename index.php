<!DOCTYPE html>
<html lang="en">  
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Andrew Miller">
    <link rel="shortcut icon" type="image/png" href="assets/img/favicon.png">
    <link rel="icon" type="image/png" href="assets/img/favicon.png">

    <title>Andrew Richard Miller</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/soon.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->
    
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Mono:400,300,700" rel="stylesheet" type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Mina:400,300,700" rel="stylesheet" type='text/css'>
  </head>
  <!-- START BODY -->
  <body class="nomobile">
    <!-- START HEADER -->
    <section id="header">
        <div class="container">
            <header>
                <!-- HEADLINE -->
                <h1 data-animated="GoIn"><b>Andrew Richard Miller</b> site is coming soon...</h1>
            </header>
            <!-- START TIMER -->
            <div id="timer" data-animated="FadeIn">
                <p id="message"></p>
                <div id="days" class="timer_box"></div>
                <div id="hours" class="timer_box"></div>
                <div id="minutes" class="timer_box"></div>
                <div id="seconds" class="timer_box"></div>
            </div>
            <!-- END TIMER -->
            <div class="col-lg-4 col-lg-offset-4 mt centered">
              <h4>LET ME KNOW WHEN YOU LAUNCH</h4>
              <form class="form-inline" action="process.php" method="POST">
                <div class="form-group">
                  <label class="sr-only" for="email">Email address</label>
                  <input name="email" type="email" class="form-control" id="email" placeholder="Enter email" required>
                </div>
                <button type="submit" class="btn btn-info">Submit</button>
              </form>
              <div>
              <?php 
                session_start();
                if($_SESSION['message']){
                  echo $_SESSION['message'];
                  unset($_SESSION['message']);
                }
              ?>
              </div>
             
            </div>            
        </div>
        <!-- LAYER OVER THE SLIDER TO MAKE THE WHITE TEXTE READABLE -->
        <div id="layer"></div>
        <!-- END LAYER -->
        <!-- START SLIDER -->
        <div id="slider" class="rev_slider">
            <ul>
              <li data-transition="slideleft" data-slotamount="1" data-thumb="assets/img/slider/1.jpg">
                <img src="assets/img/slider/1.jpg" alt="Slider Image 1">
              </li>
              <li data-transition="slideleft" data-slotamount="1" data-thumb="assets/img/slider/2.jpg">
                <img src="assets/img/slider/2.jpg" alt="Slider Image 2">
              </li>
              <li data-transition="slideleft" data-slotamount="1" data-thumb="assets/img/slider/3.jpg">
                <img src="assets/img/slider/3.jpg" alt="Slider Image 3">
              </li>
              <li data-transition="slideleft" data-slotamount="1" data-thumb="assets/img/slider/4.jpg">
                <img src="assets/img/slider/4.jpg" alt="Slider Image 4">
              </li>
            </ul>
        </div>
        <!-- END SLIDER -->
    </section>
    <!-- END HEADER -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.min.js"></script>
	  <script src="assets/js/modernizr.custom.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/soon/plugins.js"></script>
    <script src="assets/js/soon/jquery.themepunch.revolution.min.js"></script>
    <script src="assets/js/soon/custom.js"></script>
  </body>
  <!-- END BODY -->
</html>