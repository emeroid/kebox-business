<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Title -->
    <title>Beezsmart | Products </title>

    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Favicon -->
    <link rel="shortcut icon" href="../favicon.ico">

    <!-- Google Fonts -->
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700,900">

    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/bootstrap.min.css">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="../assets/vendor/icon-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/vendor/icon-line-pro/style.css">
    <link rel="stylesheet" href="../assets/vendor/icon-hs/style.css">
    <link rel="stylesheet" href="../assets/vendor/animate.css">
    <link rel="stylesheet" href="../assets/vendor/hamburgers/hamburgers.min.css">
    <link rel="stylesheet" href="../assets/vendor/hs-megamenu/src/hs.megamenu.css">
    <link rel="stylesheet" href="../assets/vendor/slick-carousel/slick/slick.css">
    <link rel="stylesheet" href="../assets/vendor/malihu-scrollbar/jquery.mCustomScrollbar.min.css">

    <!-- CSS Unify Theme -->
    <link rel="stylesheet" href="beezsmart/assets/css/styles.e-commerce.css">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="../assets/css/custom.css">
  </head>

  <body>
    <main>
      <!-- Header -->
      <header id="js-header" class="u-header u-header--static u-shadow-v15">


              <!-- Top Bar -->
      <div class="u-header__section u-header__section--hidden u-header__section--dark g-bg-black g-transition-0_3 g-py-7">
        <div class="container">
          <div class="row flex-column flex-md-row align-items-center justify-content-md-end text-uppercase g-font-weight-600 g-color-white g-font-size-13 g-mt-minus-10">

            <div class="col-auto mr-md-auto g-px-15 g-mt-10">
              <i class="fa fa-phone g-valign-middle g-mt-minus-1 g-mr-5"></i>
              07036 773 868
            </div>

            <div class="col-auto g-px-15 g-mt-10">
              <ul class="list-inline mb-0 g-mx-minus-3">
                <li class="list-inline-item g-valign-middle g-mx-3">
                  <a class="d-block u-icon-v3 u-icon-size--xs g-rounded-50x g-bg-white g-color-gray-dark-v1 g-color-gray-dark-v1--hover g-text-underline--none--hover" href="#">
                    <i class="fa fa-facebook"></i>
                  </a>
                </li>
                <li class="list-inline-item g-valign-middle g-mx-3">
                  <a class="d-block u-icon-v3 u-icon-size--xs g-rounded-50x g-bg-white g-color-gray-dark-v1 g-color-gray-dark-v1--hover g-text-underline--none--hover" href="#">
                    <i class="fa fa-whatsapp"></i>
                  </a>
                </li>
                <li class="list-inline-item g-valign-middle g-mx-3 g-mr-minus-2--lg">
                  <a class="d-block u-icon-v3 u-icon-size--xs g-rounded-50x g-bg-white g-color-gray-dark-v1 g-color-gray-dark-v1--hover g-text-underline--none--hover" href="#">
                    <i class="fa fa-instagram"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- End Top Bar -->

        <div class="u-header__section u-header__section--light g-bg-white g-transition-0_3 g-py-10">
          <nav class="js-mega-menu navbar navbar-expand-lg">
            <div class="container">
              <!-- Responsive Toggle Button -->
              <button class="navbar-toggler navbar-toggler-right btn g-line-height-1 g-brd-none g-pa-0 g-pos-abs g-top-3 g-right-0" type="button"
                      aria-label="Toggle navigation"
                      aria-expanded="false"
                      aria-controls="navBar"
                      data-toggle="collapse"
                      data-target="#navBar">
                <span class="hamburger hamburger--slider g-pr-0">
                  <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                  </span>
                </span>
              </button>
              <!-- End Responsive Toggle Button -->

              <!-- Logo -->
              <a class="navbar-brand" href="{{route('home')}}">
                <img src="assets/img/logo/logo2.png" alt="Beez Smart">
              </a>
              <!-- End Logo -->
              
            </div>
          </nav>
        </div>
      </header>
      <!-- End Header -->
  
<!-- Products Block -->
<div class="container g-pt-50 g-pb-100">
 <div class="row">
  
  @foreach($product as $item)
  <div class="col-md-6 col-lg-4 g-mb-30">
    <!-- Article -->
    <article>
      <!-- Article Image -->
      
      <img class="w-100" src="../../assets/img/product/{{$item->home_image->src}}" alt="Image Description">
      
      <!-- End Article Image -->

      <!-- Article Content -->
      <div class="u-shadow-v24 g-pa-30">
        <div class="g-mb-30">
          <h3 class="h4 g-color-black g-font-weight-600 mb-3">
            <a class="g-color-main g-color-primary--hover g-text-underline--none--hover" href="{{route('product',$item->id)}}">{{$item->name}}</a>
          </h3>
          <p>{!!$item->excerpt!!}</p>
        </div>

        <div class="d-flex justify-content-start">
          <div class="align-self-center g-width-70 g-mr-15">
            <!-- Chart Pie -->
            <div class="js-pie g-color-black" data-circles-value="8" data-circles-max-value="100" data-circles-bg-color="#dedede" data-circles-fg-color="#72c02c" data-circles-radius="35" data-circles-stroke-width="4" data-circles-font-size="14" data-circles-font-weight="700" data-circles-additional-text="% off" data-circles-duration="2000" data-circles-scroll-animate="true"></div>
            <!-- End Chart Pie -->
          </div>
          <div class="align-self-center g-font-size-13">
            <span class="g-color-black g-font-weight-700">&#8358; {{$item->price}}</span>
            <em class="d-block g-font-style-normal">25 days left</em>
          </div>
          <div class="d-block align-self-center ml-auto">
            <a class="btn btn-md u-btn-primary g-font-weight-600 g-font-size-11 text-uppercase" href="{{route('product',$item->slug)}}">Learn More</a>
          </div>
        </div>
      </div>
      <!-- End Article Content -->
    </article>
    <!-- End Article -->
  </div>
  @endforeach
 </div>
</div>
<!-- End Products Block -->

      <!-- Call to Action -->
      <div class="g-bg-primary">
        <div class="container g-py-20">
          <div class="row justify-content-center">
            <div class="col-md-4 mx-auto g-py-20">
              <!-- Media -->
              <div class="media g-px-50--lg">
                <i class="d-flex g-color-white g-font-size-40 g-pos-rel g-top-3 mr-4 icon-real-estate-048 u-line-icon-pro"></i>
                <div class="media-body">
                  <span class="d-block g-color-white g-font-weight-500 g-font-size-17 text-uppercase">Free Shipping</span>
                  <span class="d-block g-color-white-opacity-0_8">In 2-3 Days</span>
                </div>
              </div>
              <!-- End Media -->
            </div>

            <div class="col-md-4 mx-auto g-brd-x--md g-brd-white-opacity-0_3 g-py-20">
              <!-- Media -->
              <div class="media g-px-50--lg">
                <i class="d-flex g-color-white g-font-size-40 g-pos-rel g-top-3 mr-4 fa fa-whatsapp u-line-icon-pro"></i>
                <div class="media-body">
                  <span class="d-block g-color-white g-font-weight-500 g-font-size-17 text-uppercase">+2347036773868</span>
                  <span class="d-block g-color-white-opacity-0_8">Chat us up on Whatsapp</span>
                </div>
              </div>
              <!-- End Media -->
            </div>

            <div class="col-md-4 mx-auto g-py-20">
              <!-- Media -->
              <div class="media g-px-50--lg">
                <i class="d-flex g-color-white g-font-size-40 g-pos-rel g-top-3 mr-4 fa fa-phone u-line-icon-pro"></i>
                <div class="media-body text-left">
                  <span class="d-block g-color-white g-font-weight-500 g-font-size-17 text-uppercase">+2347036773868 </span>
                  <span class="d-block g-color-white-opacity-0_8">Call us NOW</span>
                </div>
              </div>
              <!-- End Media -->
            </div>
          </div>
        </div>
      </div>
      <!-- End Call to Action -->

      <!-- Footer -->
      <footer class="g-bg-main-light-v1">

        <!-- Copyright -->
        <div class="container g-pt-30 g-pb-10">
          <div class="row justify-content-between align-items-center">
            <div class="col-md-6 g-mb-20">
              <p class="g-font-size-13 mb-0">2019 &copy; Beez Smart. All Rights Reserved.</p>
            </div>

            <div class="col-md-6 text-md-right g-mb-20">
              <ul class="list-inline g-color-gray-dark-v5 g-font-size-25 mb-0">
                <!-- <li class="list-inline-item g-cursor-pointer mr-1">
                  <i class="fa fa-cc-visa" title="Visa"
                     data-toggle="tooltip"
                     data-placement="top"></i>
                </li>
                <li class="list-inline-item g-cursor-pointer mx-1">
                  <i class="fa fa-cc-paypal" title="Paypal"
                     data-toggle="tooltip"
                     data-placement="top"></i>
                </li>
                <li class="list-inline-item g-cursor-pointer mx-1">
                  <i class="fa fa-cc-mastercard" title="Master Card"
                     data-toggle="tooltip"
                     data-placement="top"></i>
                </li>
                <li class="list-inline-item g-cursor-pointer ml-1">
                  <i class="fa fa-cc-stripe" title="Stripe"
                     data-toggle="tooltip"
                     data-placement="top"></i>
                </li>
                <li class="list-inline-item g-cursor-pointer ml-1">
                  <i class="fa fa-cc-discover" title="Discover"
                     data-toggle="tooltip"
                     data-placement="top"></i>
                </li>
                <li class="list-inline-item g-cursor-pointer ml-1">
                  <i class="fa fa-cc-jcb" title="JCB"
                     data-toggle="tooltip"
                     data-placement="top"></i>
                </li> -->
              </ul>
            </div>
          </div>
        </div>
        <!-- End Copyright -->
      </footer>
      <!-- End Footer -->

      <a class="js-go-to u-go-to-v2" href="#"
         data-type="fixed"
         data-position='{
           "bottom": 15,
           "right": 15
         }'
         data-offset-top="400"
         data-compensation="#js-header"
         data-show-effect="zoomIn">
        <i class="hs-icon hs-icon-arrow-top"></i>
      </a>
    </main>

    <div class="u-outer-spaces-helper"></div>

    <!-- JS Global Compulsory -->
    <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>
    <script src="../assets/vendor/popper.js/popper.min.js"></script>
    <script src="../assets/vendor/bootstrap/bootstrap.min.js"></script>

    <!-- JS Implementing Plugins -->
    <script src="../assets/vendor/slick-carousel/slick/slick.js"></script>
    <script src="../assets/vendor/hs-megamenu/src/hs.megamenu.js"></script>
    <script src="../assets/vendor/jquery.countdown.min.js"></script>
    <script src="../assets/vendor/malihu-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>

    <!-- JS Unify -->
    <script src="../assets/js/hs.core.js"></script>
    <script src="../assets/js/components/hs.header.js"></script>
    <script src="../assets/js/helpers/hs.hamburgers.js"></script>
    <script src="../assets/js/components/hs.dropdown.js"></script>
    <script src="../assets/js/components/hs.scrollbar.js"></script>
    <script src="../assets/js/components/hs.countdown.js"></script>
    <script src="../assets/js/components/hs.carousel.js"></script>
    <script src="../assets/js/components/hs.tabs.js"></script>
    <script src="../assets/js/components/hs.count-qty.js"></script>
    <script src="../assets/js/components/hs.go-to.js"></script>
    <script src="../assets/js/helpers/hs.rating.js"></script>
   

    <!-- JS Customization -->
   
    <script src="../assets/js/custom.js"></script>
<!-- JS Implementing Plugins -->
            <script  src="../../assets/vendor/appear.js"></script>
            <script  src="../../assets/vendor/circles/circles.min.js"></script>

            <!-- JS Unify -->
            <script  src="../../assets/js/components/hs.chart-pie.js"></script>

            <!-- JS Plugins Init. -->
            <script >
              $(document).ready(function () {
                // initialization of chart pies
                $.HSCore.components.HSChartPie.init('.js-pie');
              });
            </script>



    <!-- Start of HubSpot Embed Code -->
  <script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/6568559.js"></script>
<!-- End of HubSpot Embed Code -->

   
  </body>
</html>
