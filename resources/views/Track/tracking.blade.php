<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>SupraBox | Delivery Tracking </title>
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
          <img src="images/logo.png" alt="logo">
        </a>
      </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse justify-content-around" id="navbarNav">
        <ul class="navbar-nav menu-navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#top">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#tracker">Tracker</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#services">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#blog">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#reviews">Reviews</a>
          </li>
        </ul>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link learn-more-btn" href="#contact">Contact</a>
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
        <img src="https://via.placeholder.com/525x400/dddddd/068DB4" class="img-fluid" alt="banner">
      </div>
      <div class="col-lg-5 offset-lg-1 col-sm-12 header-title-section">
        <p class="header-subtitle">Order Delivery Tracker</p>
        <h1 class="header-title">Keep your online shopping organized</h1>
        <p class="header-title-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut quis vestibulum ante,
          id gravida sem. Nam dictum ornare dictum. Sed congue accumsan arcu quis consectetur.</p>
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
                <input type="text" class="form-control" id="order-id" name="TrackingCode" value="{{ $TrackingCode }}" placeholder="Order Id">
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
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
                  <div class="tracking-item">
                    <div class="tracking-icon status-complete">
                      <i class="fas fa-box"></i>
                    </div>
                    <div class="tracking-content">Infos Colis : {{ $CountCode }} <span style="color: rgb(40, 180, 241);font-weight:bold">Tracking Code :</span> {{ $TrackingCode }}<span style="color: rgb(40, 180, 241);font-weight:bold">Ville : </span> {{ $Ville }}<span style="color: rgb(40, 180, 241);font-weight:bold">Destination : </span>{{ $Destination }}</div>
                  </div>
                  <?php $i=0; ?>
                  @foreach ( $Tracking as $Tracking)
                 <?php $i++ ?>

@if($CountCode <= 1 )

                  @if($Tracking->IsTranseted == "TRUE")

                   @if($Tracking->DestinationFinal == $Tracking->Destination )
                   <div class="tracking-item">
                    <div class="tracking-icon status-complete">
                      <i class="fas fa-thumbs-up"></i>
                    </div>
                    <div class="tracking-date">{{ mb_substr($Tracking->DateDepart, 0, -5, 'UTF-8') }}<span>{{ substr($Tracking->DateDepart , +10) }} AM</span></div>
                    <div class="tracking-content">{{ $Tracking->Depart }}<span>Seller Confirmed your order</span></div>
                  </div>
                  <div class="tracking-item tracking-active">
                    <div class="tracking-icon status-active">
                      <i class="fas fa-street-view"></i>
                    </div>
                    <div class="tracking-date">{{  mb_substr($Tracking->DateRecption, 0, -5, 'UTF-8') }}<span>{{ substr($Tracking->DateRecption , +10) }} AM</span></div>
                    <div class="tracking-content">Arrived : {{ $Tracking->Destination }}<span>Shipped to Nearest Hub Sydney</span></div>
                  </div>
                  @else
                      <div class="tracking-item">
                        <div class="tracking-icon status-complete">
                          <i class="fas fa-thumbs-up"></i>
                        </div>
                        <div class="tracking-date">{{ mb_substr($Tracking->DateDepart, 0, -5, 'UTF-8') }}<span>{{ substr($Tracking->DateDepart , +10) }} AM</span></div>
                        <div class="tracking-content">{{ $Tracking->Depart }}<span>Seller Confirmed your order</span></div>
                      </div>
                      <div class="tracking-item">
                        <div class="tracking-icon status-complete">
                          <i class="fas fa-truck"></i>
                        </div>
                        <div class="tracking-date">{{  mb_substr($Tracking->DateRecption, 0, -5, 'UTF-8') }}<span>{{ substr($Tracking->DateRecption , +10) }} AM</span></div>
                        <div class="tracking-content">{{ $Tracking->Destination }}<span>Shipped to Melborne Hub</span></div>
                      </div>
                  @endif
                  @endif

                  @if($Tracking->IsTranseted == "FALSE")
                      <div class="tracking-item">
                        <div class="tracking-icon status-complete">
                          <i class="fas fa-thumbs-up"></i>
                        </div>
                        <div class="tracking-date">{{ mb_substr($Tracking->DateDepart, 0, -5, 'UTF-8') }}<span>{{ substr($Tracking->DateRecption , +10) }}  AM</span></div>
                        <div class="tracking-content">{{ $Tracking->Depart }}<span>Seller Confirmed your order</span></div>
                      </div>
                      <div class="tracking-item tracking-active">
                        <div class="tracking-icon status-active">
                          <i class="fas fa-street-view"></i>
                        </div>
                        <div class="tracking-date">{{ mb_substr($Tracking->DateRecption, 0, -5, 'UTF-8') }}<span>{{ substr($Tracking->DateRecption , +10) }} AM</span></div>
                        <div class="tracking-content">Arrived : {{ $Tracking->Destination }}<span>Shipped to Nearest Hub Sydney</span></div>
                      </div>
                  @endif  

  @else

                  @if($Tracking->IsTranseted == "TRUE")
                    @if($i <= 1)
                      <div class="tracking-item">
                        <div class="tracking-icon status-complete">
                          <i class="fas fa-thumbs-up"></i>
                        </div>
                        <div class="tracking-date">{{ mb_substr($Tracking->DateDepart, 0, -5, 'UTF-8') }}<span>{{ substr($Tracking->DateDepart , +10) }} AM</span></div>
                        <div class="tracking-content">{{ $Tracking->Depart }}<span>Seller Confirmed your order</span></div>
                      </div>    
                      <div class="tracking-item">
                        <div class="tracking-icon status-complete">
                          <i class="fas fa-truck"></i>
                        </div>
                        <div class="tracking-date">{{ mb_substr($Tracking->DateRecption, 0, -5, 'UTF-8') }}<span>{{ substr($Tracking->DateRecption , +10) }} AM</span></div>
                        <div class="tracking-content">In Transit <span>{{ $Tracking->Destination }}</span></div>
                      </div>                      
                      @else
                          @if($Tracking->DestinationFinal == $Tracking->Destination )
                            <div class="tracking-item">
                              <div class="tracking-icon status-complete">
                                <i class="fas fa-thumbs-up"></i>
                              </div>
                              <div class="tracking-date">{{ mb_substr($Tracking->DateDepart, 0, -5, 'UTF-8') }}<span>{{ substr($Tracking->DateDepart , +10) }} AM</span></div>
                              <div class="tracking-content">{{ $Tracking->Depart }}<span>Seller Confirmed your order</span></div>
                            </div>   
                            <div class="tracking-item tracking-active">
                              <div class="tracking-icon status-active">
                                <i class="fas fa-street-view"></i>
                              </div>
                              <div class="tracking-date">{{ mb_substr($Tracking->DateRecption, 0, -5, 'UTF-8') }}<span>{{ mb_substr($Tracking->DateRecption, +10) }} AM</span></div>
                              <div class="tracking-content">Arrived : {{ $Tracking->Destination }}<span>Shipped to Nearest Hub Sydney</span></div>
                            </div>
                            @else
                            <div class="tracking-item">
                              <div class="tracking-icon status-complete">
                                <i class="fas fa-thumbs-up"></i>
                              </div>
                              <div class="tracking-date">{{ mb_substr($Tracking->DateDepart, 0, -5, 'UTF-8') }}<span>{{ substr($Tracking->DateDepart , +10) }} AM</span></div>
                              <div class="tracking-content">{{ $Tracking->Depart }}<span>Seller Confirmed your order</span></div>
                            </div>  
                            <div class="tracking-item">
                              <div class="tracking-icon status-complete">
                                <i class="fas fa-truck"></i>
                              </div>
                              <div class="tracking-date">{{ mb_substr($Tracking->DateRecption, 0, -5, 'UTF-8') }}<span>{{ substr($Tracking->DateRecption , +10) }} AM</span></div>
                              <div class="tracking-content">In Transit <span>{{ $Tracking->Destination }}</span></div>
                            </div>
                        @endif
                     
                    @endif
                  @endif  
                    @if($Tracking->IsTranseted == "FALSE")
                      <div class="tracking-item">
                        <div class="tracking-icon status-complete">
                          <i class="fas fa-thumbs-up"></i>
                        </div>
                        <div class="tracking-date">{{ mb_substr($Tracking->DateDepart, 0, -5, 'UTF-8') }}<span>{{ substr($Tracking->DateDepart , +10) }} AM</span></div>
                        <div class="tracking-content">{{ $Tracking->Depart }}<span>Seller Confirmed your order</span></div>
                      </div>
                      <div class="tracking-item tracking-active">
                        <div class="tracking-icon status-active">
                          <i class="fas fa-street-view"></i>
                        </div>
                        <div class="tracking-date">{{ mb_substr($Tracking->DateRecption, 0, -5, 'UTF-8') }}<span>{{ mb_substr($Tracking->DateRecption, +10) }} AM</span></div>
                        <div class="tracking-content">Arrived : {{ $Tracking->Destination }}<span>Shipped to Nearest Hub Sydney</span></div>
                      </div>
                    @endif                          
@endif

                  @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Tracker End -->


  <!-- footer Start -->
  <section class="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <div class="footer-widget">
            <img src="images/logo-white.png" alt="logo" />
            <p class="mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. libero at, fermentum posuere quam.
            </p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="footer-widget">
            <h5>Quick Links</h5>
            <ul>
              <li><a href="#"><i class="fas fa-angle-right"></i> Services</a></li>
              <li><a href="#"><i class="fas fa-angle-right"></i> Tracker</a></li>
              <li><a href="#"><i class="fas fa-angle-right"></i> Contact Us</a></li>
              <li><a href="#"><i class="fas fa-angle-right"></i> Reviews</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="footer-widget">
            <h5>Address</h5>
            <p class="mt-3"><i class="fas fa-map-marker-alt"></i> Street 10, 3rd cross<br>
              Koramagala<br>
              0123456789<br>
              yourmail@yourdomain.com</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="footer-widget">
            <h5>Social Connect</h5>
            <div class="social-icons">
              <a href="#"><i class="fab fa-facebook"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-linkedin"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="footer-copyright">
            © 2020 KonnectCode All Rights Reserved.
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- footer End -->

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