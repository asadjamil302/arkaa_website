@extends('admin.master.app')

@section('css')


<link rel="stylesheet" href="{{asset('assets/js/plugins/jquery-tags-input/jquery.tagsinput.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/js/plugins/jquery-auto-complete/jquery.auto-complete.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/js/plugins/select2/css/select2.min.css')}}">
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


 
    <form action="{{route('slider.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            
            <div class="col-lg-8 col-12">
                <div class="block  block-themed">
                    <div class="block-header bg-gd-aqua">
                        <h3 class="block-title">Slider Create</h3>
                    </div>
                    <div class="block-content">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group ">
                                    <label class="col-lg-12" for="title">Title</label>
                                    <div class="col-lg-12">
                                        <input type="text" class="form-control form-control-lg @if($errors->has('title')) is-invalid @endif"  required name="title" placeholder="Enter Title" value="{{old('title')}}">
                                        @if($errors->has('title'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('title') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div> 
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group ">
                                    <label class="col-lg-12" for="price">Price</label>
                                    <div class="col-lg-12">
                                        <input type="text" class="form-control form-control-lg @if($errors->has('price')) is-invalid @endif"  required name="price" placeholder="Enter price" value="{{old('price')}}">
                                        @if($errors->has('price'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('price') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div> 
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group ">
                                    <div class="col-lg-12">
                                        <label class="col-form-label" for="description">Description</label>
                                    </div>
                                    <div class="col-lg-12">

                                        <textarea class="form-control-lg form-control-lg js-summernote @if($errors->has('description')) is-invalid @endif" required name="description" >
                                            {{old('description')}}
                                        </textarea>

                                        @if($errors->has('description'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('description') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                        </div>

            
                        <div class="form-group row">
                            <div class="col-lg-6 ml-auto">
                                <button type="submit" class="btn btn-alt-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
     
            
         
            <div class="col-lg-4 col-12">

               
                <div class="block block-themed">
                    <div class="block-header bg-gd-aqua">
                        <h3 class="block-title">Upload Image</h3>
                    </div>

                    <div class="block-content block-content-full text-center">
                        <img class="img-avatar img-avatar-thumb" src="{{asset('assets/media/avatars/avatar1.jpg')}}" alt="">
                    </div>

                    <div class="block-content">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group ">
                                    <label class="col-lg-12" for="image">Upload Image</label>
                                    <div class="col-lg-12">
                                        <input type="file" class="form-control form-control-lg @if($errors->has('image')) is-invalid @endif" name="image" >
                                        @if($errors->has('image'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('image') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                {{--  tags info --}}
                <div class="block  block-themed">
                    <div class="block-header bg-gd-aqua">
                        <h3 class="block-title">Slider Tags</h3>
                    </div>
                    <div class="block-content">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group row">
                                    <label class="col-lg-12" for="example-tags1">Meta Tag</label>
                                    <div class="col-lg-12">
                                        <input type="text" class="js-tags-input form-control form-control-lg @if($errors->has('meta_tag')) is-invalid @endif" data-height="34px" id="example-tags1" name="meta_tag" value="{{old('meta_tag')}}">
                                            @if($errors->has('meta_tag'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('meta_tag') }}</strong>
                                                </span>
                                            @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group row">
                                    <label class="col-lg-12" for="meta_title">Meta Title</label>
                                    <div class="col-lg-12">
                                        <input type="text" class="form-control form-control-lg @if($errors->has('meta_title')) is-invalid @endif"  required name="meta_title" placeholder="Enter Meta Title" value="{{old('meta_title')}}">
                                        @if($errors->has('meta_title'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('meta_title') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group row">
                                    <label class="col-lg-12" for="meta_description">Meta Description</label>
                                    <div class="col-lg-12">
                                        <input type="text" class="form-control form-control-lg @if($errors->has('meta_description')) is-invalid @endif"  required name="meta_description" placeholder="Enter Meta Description" value="{{old('meta_description')}}">
                                        @if($errors->has('meta_description'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('meta_description') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                            </div>


                        </div>

                    </div>
                </div>
                {{--  end tags info --}}




                
            </div>



        </div>
    </form>


</div>
@endsection
@section('script')

<script src="{{asset('assets/js/plugins/jquery-auto-complete/jquery.auto-complete.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/select2/js/select2.full.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/jquery-tags-input/jquery.tagsinput.min.js')}}"></script>
<script>jQuery(function(){ Codebase.helpers([ 'select2', 'tags-inputs']); });</script>

<script src="{{asset('assets/js/plugins/summernote/summernote-bs4.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/ckeditor/ckeditor.js')}}"></script>
<script src="{{asset('assets/js/plugins/simplemde/simplemde.min.js')}}"></script>
<script>jQuery(function(){ Codebase.helpers(['summernote']); });</script>


@endsection
