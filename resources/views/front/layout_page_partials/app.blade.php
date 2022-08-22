<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="arkaa Consultants">
<meta name="description" content="Arkaa - Consultants">
<!-- css file -->
<link rel="stylesheet" href="{{ asset('front/asset2/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{ asset('front/asset2/css/style.css')}}">
<!-- Responsive stylesheet -->
<link rel="stylesheet" href="{{ asset('front/asset2/css/responsive.css')}}">
<!-- Title -->
<title>Leading Property Consultants in Pakistan | Arkaa Consultants</title>
<!-- Favicon -->
<link href="{{ asset('front/asset2/images/favicon.ico')}}" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
<link href="{{ asset('front/asset2/images/favicon.ico')}}" sizes="128x128" rel="shortcut icon" />

@yield('css')

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body >
<div class="wrapper">
  <!-- Header -->

  @include('front.layout_page_partials.header')

    <!-- Search Field Modal -->
    <section class="modal fade search_dropdown" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-hidden="true" style="display: none">
      <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
          <div class="modal-body">
            <div class="popup_modal_wrapper">
              <div class="container">
                <div class="row">
                  <div class="col-lg-6 mb30-md">
                    <div class="adv_src_pmodal">
                      <h6 class="title">Price</h6>
                      <div class="mt20" id="slider"></div>
                      <span id="slider-range-value1"></span>
                      <span id="slider-range-value2"></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  <!-- End Header -->

    {{-- main content portion --}}

          @yield('content')

    {{-- main content portion --}}
  
  
  
  <!-- Footer -->

  @include('front.layout_page_partials.footer')

  <!-- End Footer -->


  <a class="scrollToHome" href="#"><i class="fa fa-angle-up"></i></a> </div>
<!-- Wrapper End --> 
<script src="{{ asset('front/asset2/js/jquery-3.6.0.js') }}"></script> 
<script src="{{ asset('front/asset2/js/jquery-migrate-3.0.0.min.js') }}"></script> 
<script src="{{ asset('front/asset2/js/popper.min.js') }}"></script> 
<script src="{{ asset('front/asset2/js/bootstrap.min.js') }}"></script> 
<script src="{{ asset('front/asset2/js/jquery.mmenu.all.js') }}"></script> 
<script src="{{ asset('front/asset2/js/ace-responsive-menu.js') }}"></script> 
<script src="{{ asset('front/asset2/js/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('front/asset2/js/isotop.js') }}"></script> 
<script src="{{ asset('front/asset2/js/snackbar.min.js') }}"></script> 
<script src="{{ asset('front/asset2/js/simplebar.js') }}"></script> 
<script src="{{ asset('front/asset2/js/parallax.js') }}"></script> 
<script src="{{ asset('front/asset2/js/scrollto.js') }}"></script> 
<script src="{{ asset('front/asset2/js/jquery-scrolltofixed-min.js') }}"></script> 
<script src="{{ asset('front/asset2/js/jquery.counterup.js') }}"></script> 
<script src="{{ asset('front/asset2/js/wow.min.js') }}"></script> 
<script src="{{ asset('front/asset2/js/progressbar.js') }}"></script> 
<script src="{{ asset('front/asset2/js/slider.js') }}"></script>
<script src="{{ asset('front/asset2/js/pricing-slider.j') }}s"></script>
<script src="{{ asset('front/asset2/js/timepicker.j') }}s"></script> 
<script src="{{ asset('front/asset2/js/wow.min.js') }}"></script> 
<!-- Custom script for all pages --> 
<script src="{{ asset('front/asset2/js/script.js') }}"></script>

@yield('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
<script>
  $(document).ready(function () {
      $('#add_form').validate({
          rules: {
              name: {
                  required: true,
                  minlength: 3,
                  maxlength: 255
              },
              phone_no: {
                  required: true,
                  minlength: 8,
                  maxlength:14,
                  digits: true
              },

              email: {
                  required:true,
                  email:true
              },
              message: {
                  required: true,
              }
          },
          messages: {

            name: {
                  required: "Please enter valid name",
                  minlength : "Your name must be at least 3 characters long",
              },
              phone_no: {
                  required: "Please enter valid phone number",
                  minlength : "Your phone number must be at least 8 characters long",
              },
               email: {
                  required: "Please enter valid email",
              },
              message: {
                  required: "Please enter Your message",
              },
          },

      });


  });
</script>

 {{-- code for hide data from inspect element and remove from body tag oncontextmenu="return false;" --}}
{{-- <script>
  document.onkeydown = function (e) {
  if (event.keyCode == 123) {
    return false;
  }
  if (e.ctrlKey && e.shiftKey && e.keyCode == "I".charCodeAt(0)) {
    return false;
  }
  if (e.ctrlKey && e.shiftKey && e.keyCode == "J".charCodeAt(0)) {
    return false;
  }
  if (e.ctrlKey && e.keyCode == "U".charCodeAt(0)) {
    return false;
  }
};

</script> --}}
</body>

</html>