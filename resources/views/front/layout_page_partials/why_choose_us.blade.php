<section id="why-chose" class="whychose_us pb70">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="main-title text-center">
            <h2>{{$array['why_choose_us_title_heading']}}</h2>
            <p>{{$array['why_choose_us_desciption']}}</p>
          </div>
        </div>
      </div>
      <div class="row">
        @foreach ($whychooseus as $item)
        
        <div class="col-md-6 col-xl-3">
          <div class="why_chose_us">
            <div class="icon"> <span class="{{$item->icon}}"></span> </div>
            <div class="details">
              <h4>{{$item->title}}</h4>
              <p>{!!$item->description!!}</p>
            </div>
          </div>
        </div>

        @endforeach
        
      </div>
    </div>
  </section>