@extends('front.layout_page_partials.app')

@section('css')
<style>
  /* .bg-img1{
  background-image: url("{{$array_image['home_page_background_fixed_image']}}");
  -webkit-background-size: cover;
  background-size: cover;
  background-position: center center;
  height: 860px;
} */
.divider.home-style1{
  background-attachment: fixed;
  background-image: url("{{$array_image['home_page_background_fixed_image']}}");
  background-position: center center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>

@endsection

@section('content')




  
  <!-- Home hero section Design -->

  @include('front.layout_page_partials.hero_section')

  <!-- Home End hero section Design -->

  <!--  Project -->

  @include('front.layout_page_partials.projects')

  <!-- End Project -->

  <!-- Project Slider -->

  @include('front.layout_page_partials.project_slider')

  <!-- End Project Slider -->
  
  <!-- Why Choose us -->

  @include('front.layout_page_partials.why_choose_us')

  
  <!-- End Why Choose us -->
  
  <!-- Our Divider -->
  <section class="divider home-style1 parallax" data-stellar-background-ratio="0.2">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div class="business_exposer text-center">
            {{-- <p class="fz16 text-uppercase text-white fw500">WANT TO INVEST?</p> --}}
            <h2 class="title text-white mb20">WANT TO INVEST?</h2>
            <a class="btn exposer_btn" href="{{route('contact_us')}}">Let's Talk</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- funfact -->
  <section class="our-funfact bb1 pt60 pb30">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-lg-3">
          <div class="funfact_one text-center">
            <div class="details">
              <div class="timer text-thm">30</div>
              <p class="ff_title">Projects</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3">
          <div class="funfact_one text-center">
            <div class="details">
              <div class="timer text-thm">1900</div>
              <p class="ff_title">Happy Clients</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3">
          <div class="funfact_one text-center">
            <div class="details">
              <div class="timer text-thm">1885</div>
              <p class="ff_title">Positive Riviews</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3">
          <div class="funfact_one text-center">
            <div class="details">
              <div class="timer text-thm">13</div>
              <p class="ff_title">Years of Experience</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- Our Testimonials -->

  @include('front.layout_page_partials.testimonial')

  <!-- End Our Testimonials -->

  <!-- Blog -->

  {{-- @include('front.layout_page_partials.blog') --}}


  <!-- End Blog -->

  <!-- Locations -->

  @include('front.layout_page_partials.location')


  <!-- End Locations -->


@endsection