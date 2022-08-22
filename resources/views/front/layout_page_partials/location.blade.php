<section class="our-contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="main-title text-center">
            <h2>We're always eager to hear from you!</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">

        @foreach ($location as $item)

        <div class="col-md-6 col-lg-3 col-xl-3 pr0 pl0 plpr15-lg">
          <div class="contact_icon_box mb50">
            <div class="icon float-left"><span class="flaticon-phone"></span></div>
            <div class="details">
              <h5 class="title">{{$item->city}}</h5>
              <p>{!! $item->description !!}</p>
            </div>
          </div>
        </div>
        @endforeach

      </div>
    </div>
  </section>