<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <title>My Diary</title>
      <!-- Css -->
      <link href="{{ asset('front/css/bootstrap.css') }}" rel="stylesheet">
      <link href="{{ asset('front/css/style.css') }}" rel="stylesheet">
   </head>
   <body>
      <nav class="navbar navbar-default navbar-fixed-top">
         <div class="col-md-12">
            <div class="nav">
               <button class="btn-nav">
               <span class="icon-bar inverted top"></span>
               <span class="icon-bar inverted middle"></span>
               <span class="icon-bar inverted bottom"></span>
               </button>
            </div>
            <a class="navbar-brand" href="index.html">
            <img class="logo" src="img/logo.png" alt="My Diary">
            </a>
            <div class="nav-content hideNav hidden">
               <ul class="nav-list vcenter">
                  @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <li class="nav-item"><a class="item-anchor" href="{{ url('/home') }}">Home</a></li>
                    @else
                        <li class="nav-item"><a class="item-anchor" href="{{ route('login') }}">Login</a></li>
                        <li class="nav-item"><a class="item-anchor" href="{{ route('register') }}">Register</a></li>
                    @endauth
                </div>
            @endif
               </ul>
            </div>
         </div>
      </nav>
      <!-- Header -->
      <div class="span12">
         <div class="col-md-6 no-gutter text-center fill">
            <h2 class="vcenter">Keep Your Notes and Numbers Here</h2>
         </div>
         <div class="col-md-6 no-gutter text-center">
            <div id="header" data-speed="2" data-type="background">
               <div id="headslide" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner" role="listbox">
                     <div class="item active">
                        <img src="{{ asset('front/img/5.jpg') }}" alt="Slide">
                     </div>
                     <div class="item">
                        <img src="{{ asset('front.img/3.jpg') }}" alt="Slide">
                     </div>
                     <div class="item">
                        <img src="{{ asset('front/img/1.jpg') }}" alt="Slide">
                     </div>
                     <div class="item">
                        <img src="{{ asset('front/img/7.jpg') }}" alt="Slide">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div style="clear:both;"></div>
      <!-- script -->
      <script src="{{ asset('front/js/jquery.js') }}"></script>
      <script src="{{ asset('front/js/bootstrap.min.js') }}"></script>
      <script src="{{ asset('front/js/menu-color.js') }}"></script>
      <script src="{{ asset('front/js/modernizr.js') }}"></script>
      <script src="{{ asset('front/js/script.js') }}"></script>
   </body>
</html>