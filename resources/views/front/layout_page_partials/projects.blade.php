<section class="feature-property">
    <div class="container">

      @foreach ($projects as $items)

        <!-- lahore Project -->
        <div class="row"></div>
          <div class="col-lg-8">
            <div class="main-title">
              <h2>Projects In {{$items->title}}</h2>
            </div>
          </div>
        </div>
          <div class="row">
            <div class="col-lg-12">
              <div class="popular_listing_slider1 home10">
                @foreach ($items->sub_project as $sub)
                  <div class="item">
                    <div class="feat_property">
                      <div class="thumb"> <a href="{{route('SubProject.show', $sub)}}"><img class="img-whp" src="{{$sub->image}}" alt="fl3.jpg"></a>
                      </div>
                      <div class="details">
                        <div class="tc_content">
                          <div class="d-flex justify-content-between">
                            <p class="mb-2">{{$items->title}}</p>
                            <p class="mb-2">{{$sub->price}}</p>
                          </div>
                          <h4><a href="{{route('SubProject.show', $sub)}}">{{$sub->title}}</a></h4>
                        </div>
                      </div>
                    </div>
                  </div>
                @endforeach
              </div>
            </div>
          </div>

      @endforeach


    </div>
  </section>