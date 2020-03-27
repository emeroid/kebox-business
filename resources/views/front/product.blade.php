<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Title -->
    <title>Beezsmart | Product - {{$product->name}}</title>

    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Favicon -->
    <link rel="shortcut icon" href="../favicon.ico">

    <!-- Google Fonts -->
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700,900">

    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="{{asset('assets/vendor/bootstrap/bootstrap.min.css')}}">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="{{asset('assets/vendor/icon-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/icon-line-pro/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/icon-hs/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/animate.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/hamburgers/hamburgers.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/hs-megamenu/src/hs.megamenu.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/slick-carousel/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/malihu-scrollbar/jquery.mCustomScrollbar.min.css')}}">
    <link  rel="stylesheet" href="{{asset('assets/vendor/icon-hs/style.css')}}">
    <link  rel="stylesheet" href="{{asset('assets/vendor/fancybox/jquery.fancybox.min.css')}}">
    
    <!-- CSS Unify Theme -->
    <link rel="stylesheet" href="{{asset('beezsmart/assets/css/styles.e-commerce.css')}}">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
  </head>

  <body>
    <main>
     

      <!-- Product Description -->
      <div id="home" class="container g-pt-50 g-pb-100">
         
        <div class="row g-mb-30">
            <!-- Page heading starts here -->
              <header class="u-heading-v4-2--bottom g-brd-primary g-mb-20">
                <h2 class="h3 u-heading-v2__title text-uppercase g-font-weight-300 mb-0"> 
                    Mascum herbal pride - treat all sexual issues
                </h2>
              </header>
                <!-- Page heading ends here -->
              

            <!-- Page main content starts here -->
                <div class="col-lg-7 g-mb-30--lg align-self-end">
                  <img class="img-fluid" src="../../assets/img-temp/600x400/poster_2.png" alt="Image Description">

                    <!-- Page call to action starts here -->
                      <section class="col g-bg-gray-dark-v7 g-color-white g-pa-30" style="background-image: url(../../assets/img/bg/pattern5.png);">
                        <div class="d-md-flex justify-content-md-center text-center">
                          <div class="align-self-md-center">
                              <div class="lead g-font-weight-600 g-letter-spacing-0_5 text-uppercase g-mr-10--md g-mb-15 g-mb-0--md">
                                <a class="btn btn-xxl btn-block u-btn-blue" href="tel:+2348106429901">
                                  <i class="fa fa-phone"></i> Call Us Now
                                </a>
                              </div>
                          </div>
                          <div class="align-self-md-center">
                            <div class="lead g-font-weight-600 g-letter-spacing-0_5 text-uppercase g-mr-10--md g-mb-15 g-mb-0--md">
                            <a class="btn btn-xxl btn-block u-btn-primary" href="https://api.whatsapp.com/send?phone=2348106429901&text=Hello%21%20I%20am%20interested%20in%20one%20of%20your%20product..&source=&data="><i class="fa fa-whatsapp"></i> WhatsApp Now</a>
                            </div>
                          </div>
                        </div>
                      </section>
                    <!-- Page call to action ends here -->
              
                </div>

              @component('backend.layout.components.text_head')
                  @slot('heading')
                      Facts
                  @endslot

                  @slot('body')
                      stories
                  @endslot
              @endcomponent

           
                @component('backend.layout.components.image')
                  @slot('image')
                      poster_1.png
                  @endslot
                @endcomponent

             
                <!-- Text comp starts-->

                @component('backend.layout.components.text_head')
                  @slot('heading')
                      Facts
                  @endslot

                  @slot('body')
                      stories
                  @endslot
                @endcomponent

          
              
                @component('backend.layout.components.image')
                  @slot('image')
                      poster_3.gif
                  @endslot
                @endcomponent
              </div>

          <!-- Page main content ends here -->

            <section class="col-md-6 g-brd-around g-brd-5 g-brd-pink g-pa-30">
              <div class="row">
                <div class="align-self-center">
      
                  <p class="lead g-mb-20--md g-color-pink"> <strong>Gain back your sex drive now for just &#8358;15,000 </strong>  </p>
      

                </div>
              </div>
            </section>

            <section class="col-md-6 g-brd-around g-brd-5 g-brd-pink g-pa-30">
              <div class="row">
                <div class="align-self-center">
      
                  <p class="lead g-mb-5 g-mb-0--md g-color-black">Use the button bellow to place order</p> 
                  <p class="lead g-mb-5 g-mb-0--md text-center g-color-black">OR</p>
                  <p class="lead g-mb-5 g-mb-0--md g-color-black">Fill in the form and we will get back to you</p>

                </div>
              </div>
            </section>
      </div>

        <!-- Call to Action -->
          @component('backend.layout.components.action')
                  @slot('country_code')
                      234
                  @endslot

                  @slot('mobile')
                      8106429901
                  @endslot

                  @slot('title')
                      Call us Now
                  @endslot

                  @slot('country_code_2')
                      234
                  @endslot

                  @slot('mobile_2')
                      8106429901
                  @endslot

                  @slot('text')
                      I am interested in your product.
                  @endslot

                  @slot('title_2')
                      WhatsApp Now
                  @endslot

          @endcomponent
        <!-- End Call to Action -->

        <!-- Page footer starts here -->
          <div class="shortcode-html">
            <footer class="g-bg-pink g-color-white text-center g-py-100">
              <div class="container">
                <form id="order_create" action="{{route('product.order')}}" method="post" enctype="multipart/form-data">

                {{ csrf_field() }}

                  <div class="row">
                    <div class="col-md-7">
                      <div class="row">
                        <div class="col-md-6">
                          
                          <div class="form-group g-mb-20">
                            <input id="inputGroup10_1" class="form-control g-bg-transparent g-bg-transparent--focus g-brd-white-opacity-0_5 g-brd-white--focus g-color-white g-rounded-50 g-px-20 g-py-12" name="name" type="text" placeholder="Name">

                            <small class="form-control-feedback"> 
                              @if ($errors->has('name'))
                                  <span class="help-block">
                                    <strong class="text-danger">{{ $errors->first('name') }}</strong>
                                  </span>
                              @endif

                          </small>

                          </div>

                          <div class="form-group g-mb-20">
                            <input id="inputGroup10_2" class="form-control g-bg-transparent g-bg-transparent--focus g-brd-white-opacity-0_5 g-brd-white--focus g-color-white g-rounded-50 g-px-20 g-py-12" name="mobile" type="tel" placeholder="Phone">

                            <small class="form-control-feedback"> 
                              @if ($errors->has('mobile'))
                                  <span class="help-block">
                                    <strong class="text-danger">{{ $errors->first('mobile') }}</strong>
                                  </span>
                              @endif

                          </small>
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form-group g-mb-20">
                            <input id="inputGroup1_3" class="form-control g-bg-transparent g-bg-transparent--focus g-brd-white-opacity-0_5 g-brd-white--focus g-color-white g-rounded-50 g-px-20 g-py-12" name="email" type="email" placeholder="Email">

                            <small class="form-control-feedback"> 
                              @if ($errors->has('email'))
                                  <span class="help-block">
                                    <strong class="text-danger">{{ $errors->first('email') }}</strong>
                                  </span>
                              @endif

                          </small>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-5">
                      <div class="form-group g-mb-20">
                        <textarea id="inputGroup11_5" class="form-control g-resize-none g-bg-transparent g-bg-transparent--focus g-brd-white-opacity-0_5 g-brd-white--focus g-color-white g-rounded-20 g-px-20 g-py-10" rows="5" name="text" placeholder="Message"></textarea>
                      </div>

                      <div class="text-right">
                        <button class="btn u-btn-white g-font-size-11 text-uppercase g-font-weight-700 g-rounded-50 g-px-35 g-py-15" type="submit" role="button">Submit</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </footer>
          </div>
          <!-- Page footer ends here -->
        
    </main>

    <div class="u-outer-spaces-helper"></div>

    <!-- JS Global Compulsory -->
    <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/vendor/jquery-migrate/jquery-migrate.min.js')}}"></script>
    <script src="{{asset('assets/vendor/popper.js/popper.min.js')}}"></script>
    <script src="{{asset('assets/vendor/bootstrap/bootstrap.min.js')}}"></script>

    <!-- JS Implementing Plugins -->
    <script src="{{asset('assets/vendor/slick-carousel/slick/slick.js')}}"></script>
    <script src="{{asset('assets/vendor/hs-megamenu/src/hs.megamenu.js')}}"></script>
    <script src="{{asset('assets/vendor/jquery.countdown.min.js')}}"></script>
    <script src="{{asset('assets/vendor/malihu-scrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script  src="{{asset('assets/vendor/fancybox/jquery.fancybox.min.js')}}"></script>
    <script  src="{{asset('assets/js/components/hs.popup.js')}}"></script>

    <!-- JS Unify -->
    <script src="{{asset('assets/js/hs.core.js')}}"></script>
    <script src="{{asset('assets/js/components/hs.header.js')}}"></script>
    <script src="{{asset('assets/js/helpers/hs.hamburgers.js')}}"></script>
    <script src="{{asset('assets/js/components/hs.dropdown.js')}}"></script>
    <script src="{{asset('assets/js/components/hs.scrollbar.js')}}"></script>
    <script src="{{asset('assets/js/components/hs.countdown.js')}}"></script>
    <script src="{{asset('assets/js/components/hs.carousel.js')}}"></script>
    <script src="{{asset('assets/js/components/hs.tabs.js')}}"></script>
    <script src="{{asset('assets/js/components/hs.count-qty.js')}}"></script>
    <script src="{{asset('assets/js/components/hs.go-to.js')}}"></script>
    <script src="{{asset('assets/js/helpers/hs.rating.js')}}"></script>

    <script src="{{asset('assets/vendor/chosen/chosen.jquery.js')}}"></script>
    <script src="{{asset('assets/js/components/hs.select.js')}}"></script>
    <script src="{{asset('assets/js/components/hs.scroll-nav.js')}}"></script>
    

    <!-- JS Customization -->
    <script src="../assets/js/custom.js"></script>

    <!-- JS Plugins Init. -->
    <script>
      $(document).on('ready', function () {
        // initialization of carousel
        $.HSCore.components.HSCarousel.init('.js-carousel');

        // initialization of custom select
        $.HSCore.components.HSSelect.init('.js-custom-select');

        // initialization of header
        $.HSCore.components.HSHeader.init($('#js-header'));
        $.HSCore.helpers.HSHamburgers.init('.hamburger');

        // initialization of HSDropdown component
        $.HSCore.components.HSDropdown.init($('[data-dropdown-target]'), {
          afterOpen: function () {
            $(this).find('input[type="search"]').focus();
          }
        });

        // initialization of go to
        $.HSCore.components.HSGoTo.init('.js-go-to');

        // initialization of HSScrollBar component
        $.HSCore.components.HSScrollBar.init($('.js-scrollbar'));
        // initialization of popups
          $.HSCore.components.HSPopup.init('.js-fancybox');

       
        // initialization of tabs
        $.HSCore.components.HSTabs.init('[role="tablist"]');

      });

       $(window).on('load', function() {
        // initialization of HSScrollNav
        $.HSCore.components.HSScrollNav.init($('#js-scroll-nav'), {
          duration: 700
        });
      });
    </script>

    <!-- Start of HubSpot Embed Code -->
  <script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/6568559.js"></script>
<!-- End of HubSpot Embed Code -->

  </body>
</html>
