<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'RealEstate') }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'RealEstate') }}</title>


     <!-- CDN -->


    <!-- Scripts -->
    <script src="{{ asset('vendors/js/jquery.min.js') }}" defer></script>
    <script src="{{ asset('vendors/js/poper.js') }}" defer></script>
    <script src="{{ asset('vendors/js/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('vendors/js/swiper.min.js') }}" defer></script>
    <script src="{{ asset('js/script.js') }}" defer></script>
    <script src="https://kit.fontawesome.com/21508b4b05.js" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,500&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('vendors/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/css/swiper.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('vendors/fontawesome5/css/fontawesome-all.min.css')}}" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
</head>

<body>
   

  


    @yield('content')


<!-- Footer -->
<footer class="footer ">

  <div class="header-footer">
    <div class="container">

      <!-- Grid row-->
      <div class="row py-4 d-flex align-items-center">

        <!-- Grid column -->
        <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
          <h4 class="mb-0 wh">FOLLOW US ON SOCIAL MEDIA!</h6>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-6 col-lg-7 text-center text-md-right">

          <!-- Facebook -->
          <a class="fb-ic">
            <i class="fab fa-facebook-f white-text mr-4  fa-2x wh"> </i>
          </a>
          <!-- Twitter -->
          <a class="tw-ic">
            <i class="fab fa-twitter white-text mr-4 fa-2x wh"> </i>
          </a>
          <!-- Google +-->
          <a class="gplus-ic">
            <i class="fab fa-google-plus-g white-text fa-2x mr-4 wh"> </i>
          </a>
          <!--Linkedin -->
          <a class="li-ic">
            <i class="fab fa-linkedin-in white-text fa-2x mr-4 wh"> </i>
          </a>
          <!--Instagram-->
          <a class="ins-ic">
            <i class="fab fa-instagram white-text fa-2x wh"> </i>
          </a>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row-->

    </div>
  </div>

  <!-- Footer Links -->
  <div class="container text-center text-md-left mt-5">

    <!-- Grid row -->
    <div class="row mt-3">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

        <!-- Content -->
        <h6 class="text-uppercase font-weight-bold  wh">About Us</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto hr" style="width: 60px;">
        <p class="wh">Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet,
          consectetur
          adipisicing elit.</p>

      </div>
      <!-- Grid column -->


      <!-- Grid column -->
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold  wh">Useful Links</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto hr" style="width: 60px;">
        <p class="wh">
          <a class="a" href="{{ url('/homePage')}}">Home</a>
        </p>
        <p class="wh">
          <a class="a"  href="{{ url('/Properties')}}">Properties</a>
        </p>
        <p class=" wh">
          <a class="a" href="{{ route('login') }}">Login</a>
        </p>
        <p class="wh">
          <a  class="a"  href="{{ route('register')}}">Register</a>
        </p>
       

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold  wh">Contact</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto hr" style="width: 60px;">
        <p class="wh">
          <i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
        <p class="wh">
          <i class="fas fa-envelope mr-3"></i> info@example.com</p>
        <p class="wh">
          <i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
        <p class="wh">
          <i class="fas fa-print mr-3"></i> + 01 234 567 89</p>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3  wh">© 2020 Copyright
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
<a href="#" id="toTopBtn" class="cd-top text-replace js-cd-top cd-top--is-visible cd-top--fade-out" data-abc="true"></a>
</body>

</html>
