<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from finestdevs.com/demos/shade-preview/index-14.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 25 Mar 2022 14:12:07 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
      <meta charset="UTF-8">
      
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Gaurab Halder</title>
  <link rel="shortcut icon" href="{{ asset('public/image/favicon.png')}}" type="image/x-icon">
  <!-- Bootstrap , fonts & icons  -->
  <link rel="stylesheet" href="{{ asset('public/css/bootstrap.css')}}">
  <link rel="stylesheet" href="{{asset('public/fonts/icon-font/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('public/fonts/typography-font/typo.css')}}">
  <link rel="stylesheet" href="{{asset('public/fonts/fontawesome-5/css/all.css')}}">
  <link href="https://fonts.googleapis.com/css2?family=Karla:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Gothic+A1:wght@400;500;700;900&amp;display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800;900&amp;display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800;900&amp;display=swap" rel="stylesheet">
  <!-- Plugin'stylesheets  -->
  <link rel="stylesheet" href="{{ asset('public/plugins/aos/aos.min.css')}}">
  <link rel="stylesheet" href="{{ asset('public/plugins/fancybox/jquery.fancybox.min.css')}}">
  <link rel="stylesheet" href="{{ asset('public/plugins/nice-select/nice-select.min.css')}}">
  <link rel="stylesheet" href="{{ asset('public/plugins/slick/slick.min.css')}}">
  <!-- Vendor stylesheets  -->
  <link rel="stylesheet" href="{{ asset('public/css/main.css')}}">
  <!-- Custom stylesheet -->
  <link rel="stylesheet" href="{{ asset('public/css/fontawesome.min.css')}}">
  <?php 
                use App\Models\Info;
                use App\Models\Blog;
                use App\Models\Logo;
                use App\Models\Mail;
                use App\Models\Pixel;
                use App\Models\Portfolio;
                use App\Models\Testimonial;
                use App\Models\Website;
                
               $infos=info::get();
               $pixels=pixel::get();
               $blogs=blog::get();
              ?> 
</head>

<body data-theme-mode-panel-active data-theme="light" style="font-family: 'Mazzard H';">
  
  <div class="site-wrapper overflow-hidden position-relative">
    <!-- Site Header -->
    <!-- Preloader -->
    <!-- <div id="loading">
    <div class="preloader">
     <img src="./image/preloader.gif" alt="preloader">
   </div>
   </div>    -->
    <!--Site Header Area -->
    <header class="site-header site-header--menu-right landing-14-menu site-header--absolute site-header--sticky">
      <div class="container">
        <nav class="navbar site-navbar">
          <!-- Brand Logo-->
          <div class="brand-logo">
            <a href="{{url('/')}}">
              <!-- light version logo (logo must be black)-->
              <img src="{{ asset('public/image/logo/logo-black.png')}}" alt="Gaurab Halder" class="light-version-logo">
              <!-- Dark version logo (logo must be White)-->
              <img src="{{ asset('public/image/logo/logo-white.png')}}" alt="Gaurab Halder" class="dark-version-logo">
            </a>
          </div>
          <div class="menu-block-wrapper">
            <div class="menu-overlay"></div>
            <nav class="menu-block" id="append-menu-header">
              <div class="mobile-menu-head">
                <div class="go-back">
                  <i class="fa fa-angle-left"></i>
                </div>
                <div class="current-menu-title"></div>
                <div class="mobile-menu-close">&times;</div>
              </div>
              <ul class="site-menu-main">
              <li class="nav-item">
                  <a href="{{ url('/')}}"class="nav-link-item">Home</a>
                </li><li class="nav-item">
                  <a href="#"class="nav-link-item">Support</a>
                </li><li class="nav-item">
                  <a href="{{ url('/service')}}"class="nav-link-item">Service</a>
                </li>
                <li class="nav-item">
                  <a href="{{ url('/about')}}" class="nav-link-item">About</a>
                </li>
              </ul>
            </nav>
          </div>
          <div class="header-btn header-btn-l-14 ms-auto d-none d-xs-inline-flex">
            <a target="" class="btn btn trail-btn focus-reset" href="tel:{{ $infos[0]['phone'] }}">
              Call Now!
            </a>
          </div>
          <!-- mobile menu trigger -->
          <div class="mobile-menu-trigger">
            <span></span>
          </div>
          <!--/.Mobile Menu Hamburger Ends-->
        </nav>
      </div>
    {!!$pixels[0]['pixel_tag']!!}
   
    {!!$pixels[0]['google_analytic']!!}
  
    {!!$pixels[0]['script']!!}
    
    </header>







    <!-- Messenger Chat Plugin Code -->
    <div id="fb-root"></div>

    <!-- Your Chat Plugin code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>
<!--Facebook Chat-->
    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "2125309967486182");
      chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v13.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>
    <!-- navbar- -->
    <!-- Hero Area -->
    @yield('content')
    <!-- Footer Area -->
    <footer class="footer-area-l-12 position-relative">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-7 col-md-11 pl-lg-6" data-aos="fade-right" data-aos-duration="800" data-aos-once="true">
            <div class="row">
              <div class="col-sm-3 col-xs-6">
                <div class="footer-widget widget2">
                  <p>Help menu</p>
                  <ul class="widget-links pl-0 list-unstyled">
                    <li><a href="#">About</a></li>
                    <li><a href="#">Features</a></li>
                    <li><a href="#">Works</a></li>
                    <li><a href="#">Career</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-sm-4 col-xs-6">
                <div class="footer-widget widget3">
                  <ul class="widget-links pl-0 list-unstyled">
                    <li><a href="#">Contact </a></li>
                    <li><a href="#">Help & Support</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms & Conditions</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-sm-5 col-xs-6 pl-lg-0">
                <div class="footer-widget widget4">
                  <p class="widget-title">Products</p>
                  <ul class="widget-links pl-0 list-unstyled ">
                    <li><a href="#">Essential Landing Page</a></li>
                    <li><a href="#">Alpha Dashboard Pro</a></li>
                    <li><a href="#">Karnel Admin Dashboard</a></li>
                    <li><a href="#">Gray UI Kit</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-5 col-md-8 col-sm-11" data-aos="fade-left" data-aos-duration="800" data-aos-once="true">
            <div class="footer-subs-form-l-12">
              <p>Subscribe to our newsletter</p>
              <h6>Subscribe to get lastest offers, news and events announcements. No spam in your inbox.</h6>
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Enter your email address" aria-label="">
                <div class="input-group-append">
                  <button class="btn border-0 focus-reset" type="button">
                    <i class="icon icon-tail-right text-white"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>
         
        </div>
         
      </div>
      {!! $blogs[0]['footer'] !!}
    </footer>
  </div>
  <!-- Vendor Scripts -->
  <script src="{{ asset('public/js/vendor.min.js')}}"></script>
  <!-- Plugin's Scripts -->
  <script src="{{ asset('public/plugins/fancybox/jquery.fancybox.min.js')}}"></script>
  <script src="{{ asset('public/plugins/nice-select/jquery.nice-select.min.js')}}"></script>
  <script src="{{ asset('public/plugins/aos/aos.min.js')}}"></script>
  <script src="{{ asset('public/plugins/slick/slick.min.js')}}"></script>
  <script src="{{ asset('public/plugins/counter-up/jquery.counterup.min.js')}}"></script>
  <script src="{{ asset('public/plugins/isotope/isotope.pkgd.min.js')}}"></script>
  <script src="{{ asset('public/plugins/isotope/packery.pkgd.min.js')}}"></script>
  <script src="{{ asset('public/plugins/isotope/image.loaded.js')}}"></script>
  <script src="{{ asset('public/plugins/menu/menu.js')}}"></script>
  <!-- Activation Script -->
  <script src="{{ asset('public/js/custom.js')}}"></script>
</body>


<!-- Mirrored from finestdevs.com/demos/shade-preview/index-14.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 25 Mar 2022 14:12:42 GMT -->
</html>