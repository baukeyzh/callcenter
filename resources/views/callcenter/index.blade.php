<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <title>Таможенное оформление • Asia Freight — Авиаперевозки по всему Казахстану</title>
  <script src="js/vendor/pace.min.js"></script>
  <link rel="stylesheet" href="css/main.css">
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/manifest.json">
  <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#0b264b">
  <meta name="theme-color" content="#ffffff">
  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
              new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-5T3K2HM');</script>
  <!-- End Google Tag Manager -->
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5T3K2HM"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div id="page" class="page__tracking">
  <div class="section__header">
    <div class="wrap">
      <div class="logo">
        <a href="/" title="На главную"><img src="images/logo-white.png" alt="Asia Freight"></a>
      </div>
      <div class="phones">
        <p><a href="tel:+7 7273 93 11 10">+7 7273 93 11 10</a></p>
        <p><a href="tel:+7 7273 93 28 88">+7 7273 93 28 88</a></p>
      </div>
    </div>
  </div>

  <main class="section__main">
    <div class="section__tracking">
      <div class="block__tracking-block">
        <div class="wrap">
          <form action="tracking.php" method="post">
            <h3><label for="track-number">Введите номер HAWB:</label></h3>
            <input id="track-number" name="track-number" class="track-number-input" type="text" required>
            <p style="color: red"></p>
            <div class="block__content">
              <p class="button">
                <button id="track-btn" type="submit" class="btn track-btn">Отследить</button>
              </p>
            </div>
            <div class="block__tracking-info-block">
              <div id="track-loader" class="loader"></div>
              <span id="tracking-info"></span>
            </div>
          </form>
          <div class="col-lg-6 mb-4">
            <p data-aos="fade-up" data-aos-delay="300"><a href="{{route('login')}}" class="btn btn-primary py-3 px-5 btn-pill">Вход</a></p>
              <a href="{{ route('logout') }}" class="btn btn-primary py-3 px-5 btn-pill"
                 onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" >
                Logout
              </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
            </form>
          </div>
        </div>
      </div>
    </div>
  </main>

  <footer class="section__footer">
    <div class="wrap">
      <div class="logo">
        <a href="/" title="На главную"><img src="images/logo-white.png" alt="Asia Freight"></a>
      </div>
    </div>
  </footer>
  <div class="overlay" id="overlay"></div>
  <div class="preloader">
    <div class="logo"></div>
  </div>
</div>
<script src="{{asset('/js/all.js')}}"></script>
</body>
