<section class="our-testimonial">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="main-title text-center">
                    <h2>{{ $array['our_testimonial_title_heading'] }}</h2>
                    <p>{{ $array['our_testimonial_desciption'] }}</p>
                </div>
            </div>
        </div>


        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="testimonials">
                  @foreach ($testimonial as $item)
                      
                    <div class="cards">
                        <div class="layer"></div>
                        <div class="content">
                            <p>{!! $item->description !!} </p>

                            <div class="image">
                                <img src="{{$item->image}}">
                            </div>
                            <div class="details">
                                <h2>{{$item->title}}<br><span>{{$item->designation}}</span></h2>
                            </div>
                        </div>

                    </div>


                  @endforeach

                </div>
            </div>
        </div>
    </div>
</section>
