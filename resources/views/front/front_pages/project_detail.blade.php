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
        background-image: url("{{$array_image['project_page_breadcrumb']}}");
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
                                        <h2 class="breadcrumb_title">ALL PROJECTS IN {{$project->title}}</h2>
                                        <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">{{$project->title}}</li>
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
                    <h2 class="text-center">Real Estate in {{$project->title}}</h2>
                    <p style="text-align: justify"> {{$project->excerpt}}</p>
                </div>
            </div>
            
            <div class="row">
                <div class="col-xl-12">
                <div class="row">

                    @foreach ($project->sub_project as $item)

                    {{-- @dd($item->sub_project[0]->title); --}}
                    
                    <div class="col-lg-6 col-xl-3">
                        <div class="feat_property">
                            <div class="thumb"> 
                                <img class="img-whp" src="{{$item->image}}" alt="fl3.jpg">
                            </div>
                            <div class="details">
                                <div class="tc_content">
                                    <div class="d-flex justify-content-between">
                                    <p class="mb-2">{{$project->title}}</p>
                                    <p class="mb-2">{{$item->price}}</p>
                                    {{-- <p class="mb-2">PKR 268,500 - 17,450,000</p> --}}
                                    </div>

                                    <h4><a href="{{route('SubProject.show', $item)}}">{{$item->title}}</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')

@endsection