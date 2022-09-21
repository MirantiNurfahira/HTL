<!--
=========================================================
* Material Kit 2 - v3.0.1
=========================================================

* Product Page:  https://www.creative-tim.com/product/material-kit 
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Coded by www.creative-tim.com

 =========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Hotel
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css"
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="{{ asset('landing/assets/css/nucleo-icons.css') }}" rel="stylesheet" />
  <link href="{{ asset('landing//assets/css/nucleo-svg.css') }}" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="{{ asset('landing/assets/css/material-kit.css?v=3.0.1') }}" rel="stylesheet" />
</head>

<body class="about-us bg-gray-200">
  <!-- Navbar Transparent -->
  <nav class="navbar navbar-expand-lg position-absolute top-0 z-index-3 w-100 shadow-none my-3  navbar-transparent ">
    <div class="container">
      <a class="navbar-brand  text-white " href="{{ url('/home') }}" rel="tooltip"
        title="Designed and Coded by Creative Tim" data-placement="bottom">
        Hotel Hebat
      </a>
      <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse"
        data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon mt-2">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </span>
      </button>
      <div class="collapse navbar-collapse w-100 pt-3 pb-2 py-lg-0 ms-lg-12 ps-lg-5" id="navigation">
        <ul class="navbar-nav navbar-nav-hover ms-auto">
          {{-- <li class="nav-item dropdown dropdown-hover mx-2 ms-lg-6">
            <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center"
              id="dropdownMenuPages8" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="material-icons opacity-6 me-2 text-md">dashboard</i>
              Pages
            </a>
            <div class="dropdown-menu dropdown-menu-animation ms-n3 dropdown-md p-3 border-radius-lg mt-0 mt-lg-3"
              aria-labelledby="dropdownMenuPages8">
              <div class="d-none d-lg-block">
                <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1">
                  Landing Pages
                </h6>
                <a href="../pages/about-us.html" class="dropdown-item border-radius-md">
                  <span>About Us</span>
                </a>
                <a href="../pages/contact-us.html" class="dropdown-item border-radius-md">
                  <span>Contact Us</span>
                </a>
                <a href="../pages/author.html" class="dropdown-item border-radius-md">
                  <span>Author</span>
                </a>
                <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1 mt-3">
                  Account
                </h6>
                <a href="../pages/sign-in.html" class="dropdown-item border-radius-md">
                  <span>Sign In</span>
                </a>
              </div>
              <div class="d-lg-none">
                <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1">
                  Landing Pages
                </h6>
                <a href="../pages/about-us.html" class="dropdown-item border-radius-md">
                  <span>About Us</span>
                </a>
                <a href="../pages/contact-us.html" class="dropdown-item border-radius-md">
                  <span>Contact Us</span>
                </a>
                <a href="../pages/author.html" class="dropdown-item border-radius-md">
                  <span>Author</span>
                </a>
                <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1 mt-3">
                  Account
                </h6>
                <a href="../pages/sign-in.html" class="dropdown-item border-radius-md">
                  <span>Sign In</span>
                </a>
              </div>
            </div>
          </li> --}}
          <li class="nav-item ms-lg-auto">
            <a class="nav-link nav-link-icon me-2" href="{{ route('reservasi.index') }}">
              {{-- <i class="material-icons opacity-6 me-2 text-md">dashboard</i> --}}
              <p class="d-inline text-sm z-index-1 font-weight-bold" data-bs-toggle="tooltip" data-bs-placement="bottom"
                title="Reservasi">Reservasi</p>
            </a>
          </li>
          <li class="nav-item ms-lg-auto">
            <a class="nav-link nav-link-icon me-2" href="{{ route('booking.index') }}">
              {{-- <i class="material-icons opacity-6 me-2 text-md">dashboard</i> --}}
              <p class="d-inline text-sm z-index-1 font-weight-bold" data-bs-toggle="tooltip" data-bs-placement="bottom"
                title="Booking">Booking</p>
            </a>
          </li>
          <li class="nav-item ms-lg-auto">
            <a class="nav-link nav-link-icon me-2" href="{{ route('fasilitas.index') }}">
              {{-- <i class="material-icons opacity-6 me-2 text-md">dashboard</i> --}}
              <p class="d-inline text-sm z-index-1 font-weight-bold" data-bs-toggle="tooltip" data-bs-placement="bottom"
                title="Booking">Fasilitas</p>
            </a>
          </li>
          <li class="nav-item my-auto ms-3 ms-lg-0">
            @if (auth()->check())
            @if (in_array(auth()->user()->role, ['admin','resepsionis'], true ))
            <a href="{{ route('dashboard') }}" class="btn btn-sm  bg-white  mb-0 me-1 mt-2 mt-md-0">Dashboard</a>
            @endif
            <a class="btn btn-sm  bg-white  mb-0 me-1 mt-2 mt-md-0" style="cursor: pointer"
              onclick="document.getElementById('form_logout').submit();"><i class="fa fa-arrow-right"
                aria-hidden="true"></i></a>


            <form action="{{route('logout')}}" method="POST"  id="form_logout">
              @csrf
            </form>
            @endif
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <!-- -------- START HEADER 7 w/ text and video ------- -->
  <header class="bg-gradient-dark">
    <div class="page-header min-vh-75" style="background-image: url({{ asset('landing/assets/img/bg9.jpg') }});">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8 text-center mx-auto my-auto">
            <h1 class="text-white"> Tentang Kami</h1>
            <p class="lead mb-4 text-white opacity-8">Hotel Hebat tempat yang sempurna untuk masa inap yang nyaman serta pertemuan bisnis, konferensi, dan pelatihan. Segera pesan secara online dan temui tempat impian anda.</p>
            @if (!auth()->check())
            <a href="{{ route('login') }}" class="btn bg-white text-dark">login</a>
            @endif
            
          </div>
        </div>
      </div>
    </div>
  </header>
  @yield('content')
  <!-- -------- END HEADER 7 w/ text and video ------- -->
  <!--   Core JS Files   -->
  <script src="{{ asset('landing/assets/js/core/popper.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('landing/assets/js/core/bootstrap.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('landing/assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
  <!--  Plugin for TypedJS, full documentation here: https://github.com/inorganik/CountUp.js -->
  <script src="{{ asset('landing/assets/js/plugins/countup.min.js') }}"></script>
  <!--  Plugin for Parallax, full documentation here: https://github.com/wagerfield/parallax  -->
  <script src="{{ asset('landing/assets/js/plugins/parallax.min.js') }}"></script>
  <!-- Control Center for Material UI Kit: parallax effects, scripts for the example pages etc -->
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
  <script src="../assets/js/material-kit.min.js?v=3.0.1" type="text/javascript"></script>
  <script>
    // get the element to animate
    var element = document.getElementById('count-stats');
    var elementHeight = element.clientHeight;

    // listen for scroll event and call animate function

    document.addEventListener('scroll', animate);

    // check if element is in view
    function inView() {
      // get window height
      var windowHeight = window.innerHeight;
      // get number of pixels that the document is scrolled
      var scrollY = window.scrollY || window.pageYOffset;
      // get current scroll position (distance from the top of the page to the bottom of the current viewport)
      var scrollPosition = scrollY + windowHeight;
      // get element position (distance from the top of the page to the bottom of the element)
      var elementPosition = element.getBoundingClientRect().top + scrollY + elementHeight;

      // is scroll position greater than element position? (is element in view?)
      if (scrollPosition > elementPosition) {
        return true;
      }

      return false;
    }

    var animateComplete = true;
    // animate element when it is in view
    function animate() {

      // is element in view?
      if (inView()) {
        if (animateComplete) {
          if (document.getElementById('state1')) {
            const countUp = new CountUp('state1', document.getElementById("state1").getAttribute("countTo"));
            if (!countUp.error) {
              countUp.start();
            } else {
              console.error(countUp.error);
            }
          }
          if (document.getElementById('state2')) {
            const countUp1 = new CountUp('state2', document.getElementById("state2").getAttribute("countTo"));
            if (!countUp1.error) {
              countUp1.start();
            } else {
              console.error(countUp1.error);
            }
          }
          if (document.getElementById('state3')) {
            const countUp2 = new CountUp('state3', document.getElementById("state3").getAttribute("countTo"));
            if (!countUp2.error) {
              countUp2.start();
            } else {
              console.error(countUp2.error);
            };
          }
          animateComplete = false;
        }
      }
    }

    if (document.getElementById('typed')) {
      var typed = new Typed("#typed", {
        stringsElement: '#typed-strings',
        typeSpeed: 90,
        backSpeed: 90,
        backDelay: 200,
        startDelay: 500,
        loop: true
      });
    }
  </script>
  <script>
    if (document.getElementsByClassName('page-header')) {
      window.onscroll = debounce(function() {
        var scrollPosition = window.pageYOffset;
        var bgParallax = document.querySelector('.page-header');
        var oVal = (window.scrollY / 3);
        bgParallax.style.transform = 'translate3d(0,' + oVal + 'px,0)';
      }, 6);
    }
  </script>
</body>

</html>