@extends('admin.master.app')

@section('css')

        <!-- Page JS Plugins CSS -->
        <link rel="stylesheet" href="{{asset('assets/js/plugins/summernote/summernote-bs4.css')}}">
        <link rel="stylesheet" href="{{asset('assets/js/plugins/simplemde/simplemde.min.css')}}">
@endsection
@section('content')
<div class="content">
    @if (session('success'))
        <div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            {{ session('success') }}
        </div>
     @endif


    <div class="block block-themed">
        <div class="block-header bg-gd-aqua">
            <h3 class="block-title">Edit Image Page-Setting</h3>
        </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="block-content">
                        <form action="{{route('home_image.update', $homeImage)}}" method="post" enctype="multipart/form-data">
                            @method('patch')   
                            @csrf
                                    <div class="form-group ">
                                        <label class="col-lg-4 col-form-label" for="name">name</label>
                                        <div class="col-lg-12">
                                            <input type="text" value="{{$homeImage->name}}" class="form-control  @if($errors->has('name')) is-invalid @endif"  required name="name" placeholder="Enter name" disabled>
                                            @if($errors->has('name'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>  
                                    <div class="form-group ">
                                        <label class="col-lg-4 col-form-label" for="slug">Slug</label>
                                        <div class="col-lg-12">
                                            <input type="text" value="{{$homeImage->slug}}"  class="form-control @if($errors->has('slug')) is-invalid @endif"  required name="slug" placeholder="Enter Slug" disabled>
                                            @if($errors->has('slug'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('slug') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label class="col-lg-4 col-form-label" for="image">Upload Image</label>
                                        <div class="col-lg-12">
                                            <input type="file" value="{{$homeImage->image}}"  class="form-control @if($errors->has('image')) is-invalid @endif"   name="image">
                                            @if($errors->has('image'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('image') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <img src="{{$homeImage->image}}" style="height: 200px; width:200px;" class="rounded float-left">
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-12 ml-auto text-right">
                                            <button type="submit" class="btn btn-alt-primary">Submit</button>
                                        </div>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

    </div>
</div>
@endsection
@section('script')
   <!-- Page JS Plugins -->
   <script src="{{asset('assets/js/plugins/summernote/summernote-bs4.min.js')}}"></script>
   <script src="{{asset('assets/js/plugins/ckeditor/ckeditor.js')}}"></script>
   <script src="{{asset('assets/js/plugins/simplemde/simplemde.min.js')}}"></script>

   <!-- Page JS Helpers (Summernote + CKEditor + SimpleMDE plugins) -->
   <script>jQuery(function(){ Codebase.helpers(['summernote']); });</script>
@endsection
