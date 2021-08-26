<!DOCTYPE html>
<html lang="en">
  <head>
    <title>CallCenter</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('/fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/owl.theme.default.min.css')}}">

    <link rel="stylesheet" href="{{asset('/css/jquery.fancybox.min.css')}}">



    <link rel="stylesheet" href="{{asset('/fonts/flaticon/font/flaticon.css')}}">

    <link rel="stylesheet" href="{{asset('/css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  
  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">
      
      <div class="container-fluid">
        <div class="d-flex align-items-center">
          <div class="site-logo mr-auto w-25"><a href="/">CallCenter</a></div>
          <div class="mx-auto text-center">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mx-auto d-none d-lg-block  m-0 p-0">
                <li><a href="/" class="nav-link">Домой</a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
      
    </header>

    <div class="intro-section" id="home-section">
      
      <div class="slide-1" style="background-image: url({{asset('/images/hero_1.jpg')}});" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-12">
              <div class="row align-items-center">
                <div class="col-lg-6 mb-4">
                  <h1  data-aos="fade-up" data-aos-delay="100">Вход</h1>
                  <p class="mb-4"  data-aos="fade-up" data-aos-delay="200"></p>
                  <p data-aos="fade-up" data-aos-delay="300"><a href="{{route('login')}}" class="btn btn-primary py-3 px-5 btn-pill">Вход</a></p>
                  <p data-aos="fade-up" data-aos-delay="300">
                    <a href="{{ route('logout') }}" class="btn btn-primary py-3 px-5 btn-pill"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" >
                      Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                    </form>
                </div>
                <div class="col-lg-6 mb-4">
                  <h1  data-aos="fade-up" data-aos-delay="100" style="color: #7971ea;">{{$session}}</h1>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

















    <footer class="footer-section bg-white">
      <div class="container">

      </div>
    </footer>



  </div> <!-- .site-wrap -->

  <script src="{{asset('/js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{asset('/js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{asset('/js/jquery-ui.js')}}"></script>
  <script src="{{asset('/js/popper.min.js')}}"></script>
  <script src="{{asset('/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('/js/jquery.stellar.min.js')}}"></script>
  <script src="{{asset('/js/jquery.countdown.min.js')}}"></script>
  <script src="{{asset('/js/bootstrap-datepicker.min.js')}}"></script>
  <script src="{{asset('/js/jquery.easing.1.3.js')}}"></script>
  <script src="{{asset('/js/aos.js')}}"></script>
  <script src="{{asset('/js/jquery.fancybox.min.js')}}"></script>
  <script src="{{asset('/js/jquery.sticky.js')}}"></script>

  <script src="{{asset('/js/main.js')}}"></script>
    
  </body>
</html>