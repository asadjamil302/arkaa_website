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


 
    <form action="{{route('dynamicPages.update',$dynamicPages)}}" method="post" enctype="multipart/form-data">
        @method('patch') 
        @csrf
        <div class="row">
            
            <div class="col-lg-8 col-12">
                <div class="block  block-themed">
                    <div class="block-header bg-gd-aqua">
                        <h3 class="block-title">Dynamic-Page Create</h3>
                    </div>
                    <div class="block-content">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group ">
                                    <label class="col-lg-12" for="title">Title</label>
                                    <div class="col-lg-12">
                                        <input type="text" class="form-control form-control-lg "  required name="title"  value="{{$dynamicPages->title}}">
                                    </div>
                                </div> 
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group ">
                                    <label class="col-lg-12" for="slug">Slug</label>
                                    <div class="col-lg-12">
                                        <input type="text" class="form-control form-control-lg"  required name="slug" value="{{$dynamicPages->slug}}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group ">
                                    <div class="col-lg-12">
                                        <label class="col-form-label" for="description">Description</label>
                                    </div>
                                    <div class="col-lg-12">

                                        <textarea class="js-summernote form-control-lg" id="js-summernote" required name="description">
                                          {{$dynamicPages->description}}
                                        </textarea>
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

               
            {{--  status info --}}
                <div class="block  block-themed">
                    <div class="block-header bg-gd-aqua">
                        <h3 class="block-title">Status</h3>
                    </div>
                    <div class="block-content">
                        <div class="row">
                            <div class="form-group ">
                                <label class="col-lg-4">Status</label>
                                <div class="col-lg-12">
                                    <div class="custom-control custom-radio custom-control-inline mb-5">
                                        <input class="custom-control-input" type="radio" required name="status" value="1" {{($dynamicPages->status=='1')? "checked" :"" }} id="check1" >
                                        <label class="custom-control-label" for="check1">Active</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline mb-5">
                                        <input class="custom-control-input" type="radio" required name="status" value="0" {{($dynamicPages->status=='0')? "checked" :"" }} id="check2" >
                                        <label class="custom-control-label" for="check2">Deactive</label>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            {{--  status info --}}

                
            {{--  tags info --}}
                <div class="block  block-themed">
                    <div class="block-header bg-gd-aqua">
                        <h3 class="block-title">Page Tags</h3>
                    </div>
                    <div class="block-content">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group row">
                                    <label class="col-lg-12" for="example-tags1">Meta Tag</label>
                                    <div class="col-lg-12">
                                        <input type="text" class="js-tags-input form-control form-control-lg" data-height="34px" id="example-tags1" required name="meta_tag" value="{{$dynamicPages->meta_tag}}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group row">
                                    <label class="col-lg-12" for="meta_title">Meta Title</label>
                                    <div class="col-lg-12">
                                        <input type="text" class="form-control form-control-lg"  required name="meta_title"  value="{{$dynamicPages->meta_title}}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group row">
                                    <label class="col-lg-12" for="meta_description">Meta Description</label>
                                    <div class="col-lg-12">
                                        <input type="text" class="form-control form-control-lg"  required name="meta_description"  value="{{$dynamicPages->meta_description}}">
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
