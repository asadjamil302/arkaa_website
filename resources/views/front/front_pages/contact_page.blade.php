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
        background-image: url("{{$array_image['contact_page_breadcrumb']}}");
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
						<h2 class="breadcrumb_title">Contact Us</h2>
						<ol class="breadcrumb">
					    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
					    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Our Contact -->
  <section class="our-contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="main-title text-center">
            <h2>{{ $array['contact_page_heading_1'] }}</h2>
            <p>{{ $array['contact_page_paragraph'] }}</p>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-6 col-lg-4 col-xl-3 pr0 pl0 plpr15-lg">
          <div class="contact_icon_box mb50">
            <div class="icon float-left"><span class="flaticon-map"></span></div>
            <div class="details">
              <h5 class="title">Address</h5>
              <p>{{ $array['contact_page_address'] }}</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 col-xl-3">
          <div class="contact_icon_box mb50">
            <div class="icon float-left"><span class="flaticon-phone"></span></div>
            <div class="details">
              <h5 class="title">Contact</h5>
              <p>Mobile: {{$array['contact_page_mobile_number']}}<br>Mail: {{$array['contact_page_email']}}</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 col-xl-3 pr0 pl0 plpr15-lg">
          <div class="contact_icon_box mb50">
            <div class="icon float-left"><span class="flaticon-clock"></span></div>
            <div class="details">
              <h5 class="title">Hour of operation</h5>
              <p>Monday - Friday: {{ $array['contact_page_monday_to_friday_time'] }}<br>Sunday & Saturday: {{ $array['contact_page_saturday_to_sunday_time'] }}</p>
            </div>
          </div>
        </div>
        <div class="col-lg-12">
          {{-- <div class="h550" id="map-canvas"></div> --}}
          <div class="container">
            <div class="map mt-lg-5">
              <iframe src="{{ $array['google_map_location'] }}" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div> 
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="form_grid mt100">
            <h2 class="text-center mb50">Send Us An Email</h2>
            @if(Session::has('success'))
                <div class="alert alert-success">
                    {{Session::get('success')}}
                </div>
            @endif
            <form action="{{route('contact.store')}}" class="contact_form" method="post" id="add_form" >
              @csrf
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <input name="name" class="form-control" required type="text" id="name" placeholder="Name" value="{{old('name')}}">
                    @if ($errors->has('name'))
                      <span class="text-danger">{{ $errors->first('name') }}</span>
                    @endif
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <input name="phone_no" class="form-control" required type="text" id="phone_no" placeholder="Phone" value="{{old('phone_no')}}">
                    @if ($errors->has('phone_no'))
                      <span class="text-danger">{{ $errors->first('phone_no') }}</span>
                    @endif
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <input name="email" class="form-control  email" required type="email" id="email" placeholder="Email" value="{{old('email')}}">
                    @if ($errors->has('email'))
                      <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="form-group">
                    <textarea name="message" class="form-control" rows="6" required id="message" placeholder="Enter Your Message">{{old('message')}}</textarea>
                    @if ($errors->has('message'))
                      <span class="text-danger">{{ $errors->first('message') }}</span>
                    @endif
                  </div>
                  <div class="form-group mb0">
                    <button type="submit" class="btn btn-thm">SUBMIT</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
 

@endsection

@section('script')
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAz77U5XQuEME6TpftaMdX0bBelQxXRlM&amp;callback=initMap"></script>
<script src="{{ asset('front/asset2/js/googlemaps1.js')}}"></script>
@endsection