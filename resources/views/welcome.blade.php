<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>SupraTours | Delivery Tracking</title>
  <!-- Plugins CSS -->
  <link href="css/plugins.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="css/style.css" rel="stylesheet">
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
  <!-- Pre Loader -->
  <div id="dvLoading"></div>
  <!-- Navigation Start -->
  <nav id="navbar" class="navbar fixed-top navbar-expand-lg navbar-header navbar-mobile">
    <div class="navbar-container container">

      <div class="navbar-brand">
        <a class="navbar-brand-logo" href="#top">
          <img style="width: 50%;" src="images/logo.png" alt="logo">
        </a>
      </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse justify-content-around" id="navbarNav">
        <ul class="navbar-nav menu-navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/') }}">Home</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Navigation End -->

  <!-- Banner Start -->
  <div id="top" class="header">
    <div class="container header-container">
      <div class="d-none d-lg-block col-lg-6  header-img-section">
        <img style="width: 100%" src="images/SUPRATOURS.jpg" class="img-fluid" alt="banner">
      </div>
      <div class="col-lg-5 offset-lg-1 col-sm-12 header-title-section">
        <p class="header-subtitle">Order Delivery Tracker</p>
        <h1 class="header-title">SUPRATOURS</h1>
        <p class="header-title-text">SupraTours est une société de transport basée au Maroc qui fournit des services de bus interurbains à diverses destinations dans le pays.</p>
        <div class="learn-more-btn-section">
          <a class="nav-link learn-more-btn btn-invert" href="#tracker">Track Your Order</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Banner End -->

  <!-- Tracker Start -->
  <div id="tracker"></div>
  <section class="tracker-section">
    <div class="container tracker-container">
      <div class="row">
        <div class="col-lg-12">
          <div class="tracker-form">
            <h3 class="tracker-heading">Track Your Order</h3>
            <form action="{{ route('Track.store') }}" method="POST" class="form-inline">
              @csrf
              <div class="form-group">
                <input type="text" class="form-control" id="order-id" name="TrackingCode"  placeholder="Order Id">
              </div>
              <button type="submit" class="btn btn-primary">Suiver</button>
            </form>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div id="tracking">
            <div class="tracking-list">
              <div class="row">
                <div class="col-lg-6">                

                  <!-- Start Map-->
                  <!-- End Map-->

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Tracker End -->




  <!-- jQuery Min JS -->
  <script src="js/jquery-min.js"></script>

  <!-- Popper Min JS -->
  <script src="js/popper.min.js"></script>
  <!-- Bootstrap Min JS -->
  <script src="js/bootstrap.min.js"></script>
  <!-- Owl Carousel Min JS -->
  <script src="js/owl.carousel.min.js"></script>
  <!-- Owl Plugins JS -->
  <script src="js/plugins.js"></script>
  <!-- Smooth scroll JS -->
  <script src="js/smoothscroll.js"></script>


  <!-- Custom JS -->
  <script src="js/custom.js"></script>

  <!-- Custom Google Map -->  
  <script src="js/custom-map.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD5u8QmAP6DxLCQrbI5QnH9Y4n6xLBV2V0&callback=initMap" async defer></script>
</body>

</html>