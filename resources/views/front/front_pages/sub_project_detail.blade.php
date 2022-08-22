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

    /* editor custom css*/
    /* .my-custom-editor h2{
      text-align: center;
      color: red ;
      display: block ;
      width: 100%; */
    }
</style>
@endsection

@section('content')

  <!-- Listing Single Property -->
  <section class="listing-title-area pb0">
    <div class="container">
      <div class="row mb30">
        <div class="col-lg-8 col-xl-7">
          <div class="single_property_title mt30-767">
            <div class="breadcrumb_content style3">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{route('all_projects')}}">Projects</a></li>
                <li class="breadcrumb-item active style2" aria-current="page">{{$SubProject->title}}</li>
              </ol>
            </div>
            <div class="media">
              <div class="media-body">
                <h2 class="mt-0">{{$SubProject->title}}</h2>
                <div class="df db-400 mb20-400">
                  <p class="mr10">{{$SubProject->address}}</p>
                  <a class="theme_badge mr10">{{$SubProject->project_type}}</a>
                </div>
                <ul class="prop_details mb0">
                  <li class="list-inline-item mr20"><a class="mr20" href="mailto:info@arkaaconsultants.com"><span class="fa fa-envelope pr5 vam"></span> E-mail</a></li>
                  <li class="list-inline-item mr20"><a class="mr20" href="sms:+18664504185"><span class="fa fa-commenting-o pr5 vam"></span> Sms</a></li>
                  <li class="list-inline-item mr20"><a class="mr20" href="https://wa.me/+92 311-1127522"><span class="fa fa-whatsapp pr5 vam"></span> Whatsapp</a></li>
                  <li class="list-inline-item mr20"><a class="mr20" href="tel:+92 311-1127522"><span class="fa fa-phone pr5 vam"></span> Call</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-xl-5">
          <div class="single_property_social_share_content text-right tal-md">
            <div class="spss style2 mt30">
              <ul class="mb0">
                <li class="list-inline-item"><a href="#">Booking Starts From</a></li>
              </ul>
            </div>
            <div class="price mt20 mb10"><h3><small class="mr10"></small> {{$SubProject->price}}</h3></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Agent Single Grid View -->
  <section class="our-agent-single pt0 pb70">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-xl-9">
          <div class="row">
            <img src="{{$SubProject->image}}" class="w-100" alt="">
          </div>
 
          <div class="row my-custom-editor">
            <p>{!! $SubProject->description !!}</p>
          </div>

          <div class="row">
            <div class="col-lg-12">
              <div class="property_attachment_area pb40 bb1">
                <h2 class="mb15 project-title-heading">Documents</h2>
                <ul class="document_list mb0">
                  <li class="list-inline-item"><span class="icon flaticon-file"></span>&nbsp;&nbsp;Payment_Plan.pdf <a class="tdu text-thm" href="{{$SubProject->payment_plan}}" download>Download</a></li>
                  <li class="list-inline-item"><span class="icon flaticon-file"></span>&nbsp;&nbsp;Master_Plan.pdf <a class="tdu text-thm" href="{{$SubProject->master_plan}}" download>Download</a></li>
                  <li class="list-inline-item"><span class="icon flaticon-file"></span>&nbsp;&nbsp;Floot_Plan.pdf <a class="tdu text-thm" href="{{$SubProject->floor_plan}}" download>Download</a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="property_sp_floor_plan pb40 mt50 bb1">
                <h2 class="mb15 project-title-heading">FAQ</h2>
                <div class="faq_according style2">
                  <div class="accordion" id="accordionExample">


                    @foreach ($faqs as $item)

                    
                      <div class="card floor_plan">
                        <div class="card-header" id="headingOne">
                          <div class="mb-0">
                            <div class="btn btn-link" role="button" data-toggle="collapse" data-target="#collapseOne-{{$item->id}}" aria-expanded="true" aria-controls="collapseOne">
                              <ul class="mb0">
                                <li class="list-inline-item">{{$item->question}}</li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div id="collapseOne-{{$item->id}}" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                          <div class="card-body">
                            <p class="mb20">{{$item->answer}}</p>
                          </div>
                        </div>
                      </div>
                        
                    @endforeach
                
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-xl-3">
            <div class="listing_single_sidebar">
            <div class="sidebar_agent_search_widget mb30">
              <div class="agent_search_form">
                <a href="tel:+92 311-1127522"><button type="button" class="btn btn-block btn-thm mb10">CALL +92 311-1127522</button></a>
                <a href="https://wa.me/+923111127522"><button type="button" class="btn btn-block btn-whatsapp mb0">WHATSAPP</button></a>
              </div>
            </div>
          </div>

          <div class="sidebar_feature_listing">
            <h4 class="title">All Projects</h4>
                @foreach ($all_project as $item)
                    
            <div class="media">
                <a href="{{route('project.show', $item)}}"> <img class="align-self-start mr-3" src="{{$item->image}}" alt="fls1.jpg"></a>
              <div class="media-body">
                <h5 class="mt-0 post_title"><a href="{{route('project.show', $item)}}">{{$item->title}}</h5></a>
              </div>
            </div>
            @endforeach

          </div>

        </div>
      </div>
    </div>
  </section>

  <!-- Feature Properties -->
  <section class="feature-property bgc-alice-blue">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="main-title text-center">
            <h2>Similar Projects</h2>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="popular_listing_slider1">
            @foreach ($projects as $items)

                @foreach ($items->sub_project as $sub)
                @if (!($SubProject->slug == $sub->slug))
                    
                  <div class="item">
                  <div class="feat_property">
                      <div class="thumb"> <img class="img-whp" src="{{$sub->image}}" alt="fl3.jpg">
                      <div class="thmb_cntnt">
                          <ul class="tag mb0">
                          <li class="list-inline-item"><a href="Lahore-smart-City.html">MEGA</a></li>
                          </ul>
                      </div>
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
                @endif

                @endforeach
            @endforeach
            
                
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection

@section('script')

@endsection