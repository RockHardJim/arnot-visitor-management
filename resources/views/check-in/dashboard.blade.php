<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description"
    content="Located in Rietkuil outside Middelburg in Mpumalanga, South Africa. The Arnot coal mine resumed operations in 2019 under the new ownership and management of the consortium Arnot OpCo. In an unprecedented show of workers’ empowerment, 1 200 retrenched employees now hold their own stake in the Arnot colliery, and are able to steer the mine toward the future in a novel way, following its closure in 2015 after a coal supply agreement with Eskom expired." />
  <meta name="keywords"
    content="ArnotOpco" />
  <meta name="author" content="cybersec-clinique.co.za" />

  <title>Arnot Opco Visitor Management</title>
  <!-- Bootstrap 4.5 -->
  <link rel="stylesheet" href="{{ asset('landing/css/bootstrap.min.css')}}" type="text/css" />
  <!-- animate -->
  <link rel="stylesheet" href="{{ asset('landing/css/animate.css')}}" type="text/css" />
  <!-- Swiper -->
  <link rel="stylesheet" href="{{ asset('landing/css/swiper.min.css')}}" />
  <!-- icons -->
  <link rel="stylesheet" href="{{ asset('landing/css/icons.css')}}" type="text/css" />
  <!-- aos -->
  <link rel="stylesheet" href="{{ asset('landing/css/aos.css')}}" type="text/css" />
  <!-- main css -->
  <link rel="stylesheet" href="{{ asset('landing/css/main.css')}}" type="text/css" />
  <!-- normalize -->
  <link rel="stylesheet" href="{{ asset('landing/css/normalize.css')}}" type="text/css" />


</head>

<body>
  <div id="wrapper">
    <div id="content">
      <!-- Start header -->
      <header class="header-nav-center active-blue" id="myNavbar">
        <div class="container">
          <!-- navbar -->
          <nav class="navbar navbar-expand-lg navbar-light px-sm-0">
            <a class="navbar-brand" href="{{ route('/') }}">
              <img class="logo" src="{{ asset('images/'.setting('site_logo')) }}" alt="logo" />
            </a>
          </nav>
          <!-- End Navbar -->
        </div>
        <!-- end container -->
      </header>
      <!-- End header -->

      <!-- Stat main -->
      <main data-spy="scroll" data-target="#navbar-example2" data-offset="0">
        <!-- Start Banner Section -->
        <section class="demo_1 banner_section banner_demo7">
          <div class="container">
<h1 class="c-white">Welcome To Arnot Opco Coal Mine</h1>
            <h4 class="c-white">Simplify your gate-access request by using our brand new self-checkin tool</h4>
          </div>
        </section>
        <!-- End Banner -->

        <!-- Start About -->
        <section class="abo_company">
          <div class="container">
            <div class="row">
              <div class="col-lg-4 emo mb-4 mb-lg-0">
                <div class="gq_item bg-blue">
                  <h2 class="d-block c-white ">New</h2>
                  <div class="title_sections">
                    <img class="mb-3" src="{{ asset('landing/img/gif/waving_hand.gif')}}"  width="100" height="100"/>
                    <p class="c-white">
                      Hi as a new user please click the button below to proceed
                    </p>
                    <br/>
                <a href="{{ route('check-in.step-one') }}" class="btn btn_sm_primary p bg-green">
                  <span class="c-white">Register</span>
                </a>
                  </div>
                </div>
              </div>
              
                            <div class="col-lg-4 emo mb-4 mb-lg-0">
                <div class="gq_item bg-blue">
                  <h2 class="d-block c-white">Returning</h2>
                  <div class="title_sections">
                    <img class="mb-3" src="{{ asset('landing/coal.svg')}}" width="100" height="100"/>
                    <p class="c-white">
                      Hi as a returning visitor please click the button below to proceed
                    </p>
                    <br/>
                <a href="{{ route('check-in.pre.registered') }}" class="btn btn_sm_primary p bg-green">
                  <span class="c-white">Register</span>
                </a>
                  </div>
                </div>
              </div>
              
              
                                          <div class="col-lg-4 emo mb-4 mb-lg-0">
                <div class="gq_item bg-blue">
                  <h2 class="d-block c-white ">Pre-registered</h2>
                  <div class="title_sections">
                    <img class="mb-3" src="{{ asset('landing/Engineer_Cartoon_Plans_Site_clip_art.svg')}}" width="100" height="100"/>
                    <p class="c-white">
                      Hi if you have received a pre-registered notification please click the button below to proceed
                    </p>
                    <br/>
                <a href="{{ route('check-in.pre.registered') }}" class="btn btn_sm_primary p bg-green">
                  <span class="c-white">Register</span>
                </a>
                  </div>
                </div>
              </div>
              


            </div>
          </div>
        </section>
        <!-- End. About -->












      </main>
      <!-- end main -->
    </div>
    <!-- [id] content -->

    <!-- footr -->
    <footer class="defalut-footer foot_demo3 light margin-t-12 padding-py-8">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
            <div class="item_about">
           <nav class="navbar navbar-expand-lg navbar-light px-sm-0">
            <a class="navbar-brand" href="{{ route('/') }}">
              <img class="logo" src="{{ asset('images/log.png') }}" alt="logo" height="70px" width="100px"/>
            </a>
          </nav>
              <h3>
               Located in Rietkuil outside Middelburg in Mpumalanga, South Africa.
              </h3>
              <div class="address">
                <span>For support email: <a href="mailto:support@cybersec-clinique.co.za">support@cybersec-clinique.co.za</a></span>
              </div>
            </div>
          </div>

        </div>

        <div class="col-12 text-center padding-t-4">
          <div class="copyright">
            <span>© 2020
              Powered by <a href="http://www.cybersec-clinique.co.za/" target="_blank">CyberSecClinique.</a>
              All Right Reseved</span>
          </div>
        </div>
      </div>
    </footer>
    <!-- End. -->

    <!-- Back to top with progress indicator-->
    <div class="prgoress_indicator">
      <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
      </svg>
    </div>

    <!-- Tosts -->
    <div aria-live="polite" aria-atomic="true" class="d-flex justify-content-center align-items-center">
      <div class="toast toast_demo" id="myTost" role="alert" aria-live="assertive" aria-atomic="true"
        data-animation="true" data-autohide="false">
        <div class="toast-body">
          <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
            <i class="tio clear"></i>
          </button>
          <h5>Hey there!!</h5>
          <p>Ensure you abide by the rules as stipulated in the Arnot Facilities Rulebook whenever you are inside Arnot Opco's Premises</p>
        </div>
      </div>
    </div>
    <!-- End. Toasts -->

    <!-- Video Modal -->
    <div class="modal mdll_video fade" id="mdllVideo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <!-- Close -->
      <button type="button" class="close bbt_close ripple_circle" data-dismiss="modal" aria-label="Close">
        <i class="tio clear"></i>
      </button>
      <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
          <div class="modal-body">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" src="" id="video" allowscriptaccess="always"
                allow="autoplay"></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Start Section Loader -->
    <section class="loading_overlay">
      <div class="loader_logo">
        <img class="logo" src="{{ asset('images/'.setting('site_logo')) }}" />
      </div>
    </section>
    <!-- End. Loader -->
  </div>
  <!-- End. wrapper -->

  <!-- jquery -->
  <script src="{{ asset('landing/js/jquery-3.5.0.js')}}" type="text/javascript"></script>
  <!-- jquery-migrate -->
  <script src="{{ asset('landing/js/jquery-migrate.min.js')}}" type="text/javascript"></script>
  <!-- popper -->
  <script src="{{ asset('landing/js/popper.min.js')}}" type="text/javascript"></script>
  <!-- bootstrap -->
  <script src="{{ asset('landing/js/bootstrap.min.js')}}" type="text/javascript"></script>
  <!--
  ============
  vendor file
  ============
   -->
  <!-- particles -->
  <script src="{{ asset('landing/js/vendor/particles.min.js')}}" type="text/javascript"></script>
  <!-- TweenMax -->
  <script src="{{ asset('landing/js/vendor/TweenMax.min.js')}}" type="text/javascript"></script>
  <!-- ScrollMagic -->
  <script src="{{ asset('landing/js/vendor/ScrollMagic.js')}}" type="text/javascript"></script>
  <!-- animation.gsap -->
  <script src="{{ asset('landing/js/vendor/animation.gsap.js')}}" type="text/javascript"></script>
  <!-- addIndicators -->
  <script src="{{ asset('landing/js/vendor/debug.addIndicators.min.js')}}" type="text/javascript"></script>
  <!-- Swiper js -->
  <script src="{{ asset('landing/js/vendor/swiper.min.js')}}" type="text/javascript"></script>
  <!-- countdown -->
  <script src="{{ asset('landing/js/vendor/countdown.js')}}" type="text/javascript"></script>
  <!-- simpleParallax -->
  <script src="{{ asset('landing/js/vendor/simpleParallax.min.js')}}" type="text/javascript"></script>
  <!-- waypoints -->
  <script src="{{ asset('landing/js/vendor/waypoints.min.js')}}" type="text/javascript"></script>
  <!-- counterup -->
  <script src="{{ asset('landing/js/vendor/jquery.counterup.min.js')}}" type="text/javascript"></script>
  <!-- charming -->
  <script src="{{ asset('landing/js/vendor/charming.min.js')}}" type="text/javascript"></script>
  <!-- imagesloaded -->
  <script src="{{ asset('landing/js/vendor/imagesloaded.pkgd.min.js')}}" type="text/javascript"></script>
  <!-- BX-Slider -->
  <script src="{{ asset('landing/js/vendor/jquery.bxslider.min.js')}}" type="text/javascript"></script>
  <!-- Sharer -->
  <script src="{{ asset('landing/js/vendor/sharer.js')}}" type="text/javascript"></script>
  <!-- sticky -->
  <script src="{{ asset('landing/js/vendor/sticky.min.js')}}" type="text/javascript"></script>
  <!-- Aos -->
  <script src="{{ asset('landing/js/vendor/aos.js')}}" type="text/javascript"></script>
  <!-- main file -->
  <script src="{{ asset('landing/js/main.js')}}" type="text/javascript"></script>
  <!-- agency -->
  <script src="{{ asset('landing/js/pages/agency.js')}}" type="text/javascript"></script>

</body>

</html>