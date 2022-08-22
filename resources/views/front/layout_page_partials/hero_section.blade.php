
@foreach ($homeslider as $item)
    
  @if ($item->status == 1)
      
    <section class="home-seven home7-overlay bg-home7">
        <div class="container">
          <div class="row posr">
            <div class="col-md-6 col-lg-6">
              <div class="home_content home7">
                <p class="fz16 text-white text-uppercase">Enhance your Lifestyle with ARKAA</p>
                <h2 class="title text-white fz60 fw700">Invest in Kings Town, A Promising Project</h2>
              </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-4 offset-xl-1">
              <div class="divider_contact_form home7">
                <div class="wrapper">
                  <form action="{{route('contact.store')}}" method="post" id="add_form" >
                    @csrf
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>NAME</label>
                          <input class="form-control form_control" type="text" name="name" id="name" placeholder="Ali Tuf.." value="{{old('name')}}">
                          @if ($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                          @endif
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>PHONE NUMBER</label>
                          <input class="form-control form_control" type="text" name="phone_no" id="phone_no" placeholder="(1) 123 567 976" value="{{old('phone_no')}}">
                          @if ($errors->has('phone_no'))
                            <span class="text-danger">{{ $errors->first('phone_no') }}</span>
                          @endif
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>EMAIL</label>
                          <input class="form-control form_control" type="email" id="email" name="email" placeholder="arkaaconsultants@gmail.com" value="{{old('email')}}">
                          @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                          @endif
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <div class="form-group">
                          <label>YOUR MESSAGE</label>
                          <textarea class="form-control" rows="5" name="message" id="message" placeholder="Message">{{old('message')}}</textarea>
                          @if ($errors->has('message'))
                            <span class="text-danger">{{ $errors->first('message') }}</span>
                          @endif
                        </div>
                        <div class="form-group mb0">
                          <button type="submit" class="btn btn-block form_btn">Send Message</button>
                        </div>
                      </div>
                      <div class="row">

                        @if(Session::has('success'))
                          <div class="alert alert-success">
                              {{Session::get('success')}}
                          </div>
                        @endif
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>

          </div>
        </div>
    </section>
  @endif

  @if ($item->status == 0)
    <div class="row" style="margin-top: -100px">
      <div class="col-md-12">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="https://res.cloudinary.com/arkaa-consultants/image/upload/v1639145435/home_slider/750/pvc-large_vhvu0q.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="https://res.cloudinary.com/arkaa-consultants/image/upload/v1638359671/home_slider/750/arkaa_slider_4_large_cajn4n.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="https://res.cloudinary.com/arkaa-consultants/image/upload/v1639145435/home_slider/750/lsc-large_iqgmyo.jpg" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  @endif
      




@endforeach