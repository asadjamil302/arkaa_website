<section class="footer_one home1">
    <div class="container pb90">
      <div class="row">
        <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
          <div class="footer_contact_widget">
            <h4>Contact Us</h4>
            <ul class="list-unstyled">
              <li class="text-white df"><span class="flaticon-map mr15"></span>{{$array['footer_address_location']}}</li>
              <li class="text-white"><span class="flaticon-phone mr15"></span><a href="{{'tel:'.$array['footer_phone_number']}}">{{$array['footer_phone_number']}}</a></li>
              <li class="text-white"><span class="flaticon-mail-inbox-app mr15"></span><a href="{{'mailto:'.$array['footer_email']}}">{{$array['footer_email']}}</a></li>
            </ul>
          </div>
          <div class="footer_social_widget mt20">
            <ul class="mb0">
              <li class="list-inline-item"><a href="{{$array['social_facebook_icon']}}"><i class="fa fa-facebook"></i></a></li>
              <li class="list-inline-item"><a href="{{$array['social_twitter_icon']}}"><i class="fa fa-twitter"></i></a></li>
              <li class="list-inline-item"><a href="{{$array['social_instagram_icon']}}"><i class="fa fa-instagram"></i></a></li>
              <li class="list-inline-item"><a href="{{$array['social_linkedin_icon']}}"><i class="fa fa-linkedin"></i></a></li>
              <li class="list-inline-item"><a href="{{$array['social_youtube_icon']}}"><i class="fa fa-youtube"></i></a></li>

            </ul>
          </div>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
          <div class="footer_qlink_widget">
            <h4>Top Cities</h4>
            <ul class="list-unstyled">
              @foreach ($projects as $item)
              <li><a href="{{route('project.show', $item)}}">{{$item->title}}</a></li>

              @endforeach

            </ul>
          </div>
        </div>

        <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
          <div class="footer_qlink_widget pl0">
            <h4>Quick Links</h4>
            <ul class="list-unstyled">
              <li><a href="{{route('about_us')}}">{{$array['navbar_about']}}</a></li>
              <li><a href="{{route('contact_us')}}">{{$array['navbar_contact_us']}}</a></li>
              <li><a href="#">Blog</a></li>
              @foreach ($dynamicProjects as $item)
                @if ($item->status == 1)
          
                  <li><a href="{{route('dynamicPages.show', $item)}}">{{$item->title}}</a></li>

                @endif
              @endforeach

            </ul>
          </div>
        </div>
      </div>
    </div>
    <hr>
    <div class="container pt10 pb30">
      <div class="row">
        <div class="col-md-12">
          <div class="copyright-widget mt10 mb15-767">
            <p class="text-center">Copyright © 2022 arkaaconsultants. All Right Reserved.</p>
          </div>
        </div>
      </div>
    </div>
  </section>