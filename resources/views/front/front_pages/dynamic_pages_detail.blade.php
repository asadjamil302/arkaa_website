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
        background-image: url("{{$array_image['all_dynamic_page_breadcrumb']}}");
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;
    }
</style>
@endsection

@section('content')

    <div class="our-listing pb30-991">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                	<div class="inner_page_breadcrumb">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-xl-6">
                                    <div class="breadcrumb_content py-5">
                                        <h2 class="breadcrumb_title">{{$dynamicPages->title}}</h2>
                                        <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                                        {{-- <li class="breadcrumb-item active" aria-current="page">{{$project->title}}</li> --}}
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row py-5">
                <div class="col-lg-12">
                    <p>{!!$dynamicPages->description!!}</p>

                </div>
            </div>

        </div>
    </div>
@endsection

@section('script')

@endsection