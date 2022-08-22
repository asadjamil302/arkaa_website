@extends('front.layout_page_partials.app')

@section('css')
<style>
    .ace-responsive-menu > li > a{
        color: #000 !important;
    }
    .ace-responsive-menu{
        background: transparent;
        /* box-shadow: 0px 8px 30px rgb(34 34 34 / 7%); */
    }
    .inner_page_breadcrumb {
        background-image: url("{{$array_image['about_page_breadcrumb']}}");
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;
    }
</style>
@endsection

@section('content')

	<!-- Inner Page Breadcrumb -->
	<section class="inner_page_breadcrumb">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-xl-6">
					<div class="breadcrumb_content">
						<h2 class="breadcrumb_title">About Us</h2>
						<ol class="breadcrumb">
					    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
					    <li class="breadcrumb-item active" aria-current="page">About Us</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- About Text Content -->
	<section class="about-section bb1 pb70">
		<div class="container">
                
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="main-title text-center">
                            <h2>{{$ab['about_heading']}}</h2>
                            <p>{{$ab['about_short_detail']}}</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about_thumb mb30-smd">
                            <img class="img-fluid w100" src="{{$array_image['about_us_page_image']}}" alt="2.jpg">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about_content">
                            <p >{!!$ab['about_description']!!}</p>

                        </div>
                    </div>
                </div>
                <div class="row mt50">
                    <div class="col-md-6 col-lg-3">
                        <div class="funfact_one text-center">
                            <div class="details">
                                <div class="timer text-thm">66.180</div>
                                <p class="ff_title">Homes for sale</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
            <div class="funfact_one text-center">
                <div class="details">
                <div class="timer text-thm">4.809</div>
                <p class="ff_title">Open houses</p>
                </div>
            </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
            <div class="funfact_one text-center">
                <div class="details">
                <div class="timer text-thm">30.469</div>
                <p class="ff_title">Recently sold</p>
                </div>
            </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
            <div class="funfact_one text-center">
                <div class="details">
                <div class="timer text-thm">2.919</div>
                <p class="ff_title">Price reduced</p>
                </div>
            </div>
                    </div>
                </div>

		</div>
	</section>
  
  <!-- Our Testimonials -->

  @include('front.layout_page_partials.testimonial')

  <!-- End Our Testimonials -->
@endsection

@section('script')

@endsection