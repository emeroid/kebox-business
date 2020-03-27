<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Title -->
  <title>@yield('title')</title>

  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <!-- Favicon -->
  <link rel="shortcut icon" href="../favicon.ico">
  <!-- Google Fonts -->
  <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans%3A400%2C300%2C500%2C600%2C700%7CPlayfair+Display%7CRoboto%7CRaleway%7CSpectral%7CRubik">
  <!-- CSS Global Compulsory -->
  <link rel="stylesheet" href="../assets/vendor/bootstrap/bootstrap.min.css">
  <!-- CSS Global Icons -->
  <link rel="stylesheet" href="../assets/vendor/icon-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="../assets/vendor/icon-line/css/simple-line-icons.css">
  <link rel="stylesheet" href="../assets/vendor/icon-etlinefont/style.css">
  <link rel="stylesheet" href="../assets/vendor/icon-line-pro/style.css">
  <link rel="stylesheet" href="../assets/vendor/icon-hs/style.css">

  <link rel="stylesheet" href="backend/assets/vendor/hs-admin-icons/hs-admin-icons.css">

  <link rel="stylesheet" href="../assets/vendor/animate.css">
  <link rel="stylesheet" href="../assets/vendor/malihu-scrollbar/jquery.mCustomScrollbar.min.css">

  <link rel="stylesheet" href="backend/assets/vendor/flatpickr/dist/css/flatpickr.min.css">
  <link rel="stylesheet" href="backend/assets/vendor/bootstrap-select/css/bootstrap-select.min.css">

  <link rel="stylesheet" href="backend/assets/vendor/chartist-js/chartist.min.css">
  <link rel="stylesheet" href="backend/assets/vendor/chartist-js-tooltip/chartist-plugin-tooltip.css">
  <link rel="stylesheet" href="../assets/vendor/fancybox/jquery.fancybox.min.css">

  <link rel="stylesheet" href="../assets/vendor/hamburgers/hamburgers.min.css">

  <!-- CSS Unify -->
  <link rel="stylesheet" href="backend/assets/css/unify-admin.css">

  <!-- CSS Customization -->
  <link rel="stylesheet" href="../assets/css/custom.css">
  @yield('css')
</head>

<body>

@include('backend.layout.header')

  <main class="container-fluid px-0 g-pt-65">
    <div class="row no-gutters g-pos-rel g-overflow-x-hidden">
      
      @include('backend.layout.sidebar')

        @yield('content')
           
         

        <!-- Footer -->
        <footer id="footer" class="u-footer--bottom-sticky g-bg-white g-color-gray-dark-v6 g-brd-top g-brd-gray-light-v7 g-pa-20">
          <div class="row align-items-center">
            <!-- Footer Nav -->
            <div class="col-md-4 g-mb-10 g-mb-0--md">
              <ul class="list-inline text-center text-md-left mb-0">
                <li class="list-inline-item">
                  <a class="g-color-gray-dark-v6 g-color-secondary--hover" href="#">FAQ</a>
                </li>
                <li class="list-inline-item">
                  <span class="g-color-gray-dark-v6">|</span>
                </li>
                <li class="list-inline-item">
                  <a class="g-color-gray-dark-v6 g-color-secondary--hover" href="#">Support</a>
                </li>
                <li class="list-inline-item">
                  <span class="g-color-gray-dark-v6">|</span>
                </li>
                <li class="list-inline-item">
                  <a class="g-color-gray-dark-v6 g-color-secondary--hover" href="#">Contact Us</a>
                </li>
              </ul>
            </div>
            <!-- End Footer Nav -->

            <!-- Footer Socials -->
            <div class="col-md-4 g-mb-10 g-mb-0--md">
              <ul class="list-inline g-font-size-16 text-center mb-0">
                <li class="list-inline-item g-mx-10">
                  <a href="#" class="g-color-facebook g-color-secondary--hover">
                    <i class="fa fa-facebook-square"></i>
                  </a>
                </li>
                <li class="list-inline-item g-mx-10">
                  <a href="#" class="g-color-google-plus g-color-secondary--hover">
                    <i class="fa fa-google-plus"></i>
                  </a>
                </li>
                <li class="list-inline-item g-mx-10">
                  <a href="#" class="g-color-black g-color-secondary--hover">
                    <i class="fa fa-github"></i>
                  </a>
                </li>
                <li class="list-inline-item g-mx-10">
                  <a href="#" class="g-color-twitter g-color-secondary--hover">
                    <i class="fa fa-twitter"></i>
                  </a>
                </li>
              </ul>
            </div>
            <!-- End Footer Socials -->

            <!-- Footer Copyrights -->
            <div class="col-md-4 text-center text-md-right">
              <small class="d-block g-font-size-default">&copy; 2019 Htmlstream. All Rights Reserved.</small>
            </div>
            <!-- End Footer Copyrights -->
          </div>
        </footer>
        <!-- End Footer -->
    </div>
  </main>

  <!-- JS Global Compulsory -->
  <script src="backend/assets/vendor/jquery/jquery.min.js"></script>
  <script src="backend/assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>

  <script src="../assets/vendor/popper.js/popper.min.js"></script>
  <script src="../assets/vendor/bootstrap/bootstrap.min.js"></script>

  <script src="../assets/vendor/cookiejs/jquery.cookie.js"></script>


  <!-- jQuery UI Core -->
  <script src="../assets/vendor/jquery-ui/ui/widget.js"></script>
  <script src="../assets/vendor/jquery-ui/ui/version.js"></script>
  <script src="../assets/vendor/jquery-ui/ui/keycode.js"></script>
  <script src="../assets/vendor/jquery-ui/ui/position.js"></script>
  <script src="../assets/vendor/jquery-ui/ui/unique-id.js"></script>
  <script src="../assets/vendor/jquery-ui/ui/safe-active-element.js"></script>

  <!-- jQuery UI Helpers -->
  <script src="../assets/vendor/jquery-ui/ui/widgets/menu.js"></script>
  <script src="../assets/vendor/jquery-ui/ui/widgets/mouse.js"></script>

  <!-- jQuery UI Widgets -->
  <script src="../assets/vendor/jquery-ui/ui/widgets/datepicker.js"></script>

  <!-- JS Plugins Init. -->
  <script src="../assets/vendor/appear.js"></script>
  <script src="backend/assets/vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
  <script src="backend/assets/vendor/flatpickr/dist/js/flatpickr.min.js"></script>
  <script src="../assets/vendor/malihu-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
  <script src="backend/assets/vendor/chartist-js/chartist.min.js"></script>
  <script src="backend/assets/vendor/chartist-js-tooltip/chartist-plugin-tooltip.js"></script>
  <script src="backend/assets/vendor/fancybox/jquery.fancybox.min.js"></script>

  <!-- JS Unify -->
  <script src="../assets/js/hs.core.js"></script>
  <script src="backend/assets/js/components/hs.side-nav.js"></script>
  <script src="../assets/js/helpers/hs.hamburgers.js"></script>
  <script src="backend/assets/js/components/hs.range-datepicker.js"></script>
  <script src="../assets/js/components/hs.datepicker.js"></script>
  <script src="../assets/js/components/hs.dropdown.js"></script>
  <script src="../assets/js/components/hs.scrollbar.js"></script>
  <script src="backend/assets/js/components/hs.area-chart.js"></script>
  <script src="backend/assets/js/components/hs.donut-chart.js"></script>
  <script src="backend/assets/js/components/hs.bar-chart.js"></script>
  <script src="../assets/js/helpers/hs.focus-state.js"></script>
  <script src="backend/assets/js/components/hs.popup.js"></script>

  <!-- JS Custom -->
  <script src="../assets/js/custom.js"></script>
  @yield('js')
  <!-- JS Plugins Init. -->
  <script>
    $(document).on('ready', function () {
      // initialization of custom select
      $('.js-select').selectpicker();

      // initialization of hamburger
      $.HSCore.helpers.HSHamburgers.init('.hamburger');

      // initialization of charts
      $.HSCore.components.HSAreaChart.init('.js-area-chart');
      $.HSCore.components.HSDonutChart.init('.js-donut-chart');
      $.HSCore.components.HSBarChart.init('.js-bar-chart');

      // initialization of sidebar navigation component
      $.HSCore.components.HSSideNav.init('.js-side-nav', {
        afterOpen: function() {
          setTimeout(function() {
            $.HSCore.components.HSAreaChart.init('.js-area-chart');
            $.HSCore.components.HSDonutChart.init('.js-donut-chart');
            $.HSCore.components.HSBarChart.init('.js-bar-chart');
          }, 400);
        },
        afterClose: function() {
          setTimeout(function() {
            $.HSCore.components.HSAreaChart.init('.js-area-chart');
            $.HSCore.components.HSDonutChart.init('.js-donut-chart');
            $.HSCore.components.HSBarChart.init('.js-bar-chart');
          }, 400);
        }
      });
      
      // initialization of HSDropdown component
      $.HSCore.components.HSDropdown.init($('[data-dropdown-target]'), {dropdownHideOnScroll: false});

      // initialization of text editors
      $.HSCore.components.HSTextEditor.init('.js-text-editor');

    });
  </script>
</body>

</html>
