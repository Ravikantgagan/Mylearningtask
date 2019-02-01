<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>@yield("title")</title>
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicons
    ================================================== -->
<link rel="shortcut icon" href="asset/img/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="asset/img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="asset/img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="asset/img/apple-touch-icon-114x114.png">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="asset/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css" href="asset/css/style.css">
<link rel="stylesheet" type="text/css" href="asset/css/nivo-lightbox/nivo-lightbox.css">
<link rel="stylesheet" type="text/css" href="asset/css/nivo-lightbox/default.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700,800,900" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<!-- Navigation
    ==========================================-->
<nav id="menu" class="navbar navbar-default navbar-fixed-top">
  <div class="container"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand page-scroll" href="#page-top">WEBCOIR INFOTECH </a> </div>
    
    <!-- navigation links one page to another page -->

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{url('/features')}}" class="page-scroll">Features</a></li>
        <li><a href="{{url('/about')}}" class="page-scroll">About</a></li>
        <li><a href="{{url('/services')}}" class="page-scroll">Services</a></li>
        <li><a href="{{url('/gallery')}}" class="page-scroll">Gallery</a></li>
        <li><a href="{{url('/testimonials')}}" class="page-scroll">Testimonials</a></li>
        <li><a href="{{url('/teams')}}" class="page-scroll">Team</a></li>
        <li><a href="{{url('/contact')}}" class="page-scroll">Contact</a></li>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
</nav>
@section("Features")
@show
@section("About")
@show
@section("Services")
@show
@section("Gallery")
@show
@section("Testimonials")
@show
@section("Team")
@show
@section("Contact")
@show


<!-- Header -->
<header id="header">
  <div class="intro">
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 intro-text">
            <h1>We Are Interact<span></span></h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sed commodo nibh ante facilisis bibendum.</p>
            <a href="#features" class="btn btn-custom btn-lg page-scroll">Learn More</a> </div>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- Features Section -->

<!-- About Section -->

<!-- Services Section -->

<!-- Gallery Section -->

<!-- Testimonials Section -->

<!-- Team Section -->

<!-- Contact Section -->

<!-- Footer Section -->
<div id="footer">
  <div class="container text-center">
    <p>&copy; 2017 Interact. Design by <a href="http://www.templatewire.com" rel="nofollow">TemplateWire</a></p>
  </div>
</div>
<script type="text/javascript" src="js/jquery.1.11.1.js"></script> 
<script type="text/javascript" src="js/bootstrap.js"></script> 
<script type="text/javascript" src="js/SmoothScroll.js"></script> 
<script type="text/javascript" src="js/nivo-lightbox.js"></script> 
<script type="text/javascript" src="js/jqBootstrapValidation.js"></script> 
<script type="text/javascript" src="js/contact_me.js"></script> 
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>