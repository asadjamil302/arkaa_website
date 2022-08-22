<style>
  .bg-ptrn2 {
  background-attachment: scroll;
  background-image: url("{{$array_image['home_page_background_project_slider_image']}}");
  background-position: center;
  background-repeat: no-repeat;
  -webkit-background-size: cover;
  background-size: cover;
}
</style>
<section class="property-city bg-ptrn2 bgc-dark pb70">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="main-title">
            <h2 class="text-white">Most Visited Projects</h2>
            <!-- <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit donec sollicitudin</p> -->
          </div>
        </div>
        <div class="col-lg-6">
          <div class="heading_read_more text-right tal-md mt0-md">
            <a href="{{route('all_projects')}}" class="btn style2 text-white">Browse All</a>
          </div>
        </div>
      </div>



      <div class="row">
        <div class="col-lg-12">
          <div class="new_listing_slider_home6 mt50-md">

            @foreach ($slider as $item)
                

            <div class="item">
              <div class="feat_property home6 list">
                <div class="details">
                  <div class="tc_content">
                    <div class="thmb_cntnt">
                      <ul class="tag mb0">
                        <li class="list-inline-item"><a href="{{route('contact_us')}}">HOT</a></li>
                      </ul>
                      <!-- <ul class="tag2 mb0">
                        <li class="list-inline-item"><a href="#">FOR SALE</a></li>
                      </ul> -->
                    </div>
                    <h4 class="title">{{$item->title}}</h4>
                    <p class="mb30">{!! $item->description !!}</p>
                  </div>
                  <div class="fp_footer mt50">
                    <ul class="fp_meta float-left mb0">
                      <li class="list-inline-item">
                        <a class="price">
                          <span class="heading-color fw600">{{$item->price}}</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="thumb">
                  <img class="img-whp" src="{{$item->image}}" alt="fph61.jpg">
                </div>
              </div>
            </div>

            @endforeach

          </div>
        </div>
      </div>
    </div>
  </section>