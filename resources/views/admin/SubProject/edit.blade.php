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

    <form action="{{route('SubProject.update', $SubProject)}}" method="post" enctype="multipart/form-data">
        @method('patch')
        @csrf
        <div class="row">
            {{-- service info --}}
            <div class="col-lg-8 col-12">
                <div class="block  block-themed">
                    <div class="block-header bg-gd-aqua">
                        <h3 class="block-title">Sub Project Edit</h3>
                    </div>
                    <div class="block-content">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group row ">
                                    <div class="col-lg-12">
                                        <label class="col-lg-12" for="title">Title</label>
                                    </div>
                                    <div class="col-lg-12">
                                        <input type="text" class="form-control  form-control-lg @if($errors->has('title')) is-invalid @endif"  required name="title" placeholder="Enter Project Name" value="{{$SubProject->title}}">
                                        @if($errors->has('title'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('title') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group row ">
                                    <div class="col-lg-12">
                                        <label class="col-lg-12" for="slug">Slug</label>

                                    </div>
                                    <div class="col-lg-12">
                                        <input type="text" class="form-control form-control-lg @if($errors->has('slug')) is-invalid @endif"  required name="slug" placeholder="Enter Slug" value="{{$SubProject->slug}}">
                                        @if($errors->has('slug'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('slug') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group row ">
                                    <div class="col-lg-12">
                                        <label for="example-select2" class="col-lg-12">Select Project</label>

                                    </div>
                                    <div class="col-lg-12">
                                        <select class="select2 form-control  form-control-lg multiple-select " id="example2-select2-multiple" required name="project_id" style="width: 100%;" data-placeholder="Choose one.." >
                                            <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->

                                            @foreach($project as $item)
                                                <option value="{{$item->id}}"{{ ( $item->id == $SubProject->project_id) ? 'selected' : '' }}>{{$item->title}}</option>
                                            @endforeach


                                        </select>
                                    </div>

                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group row ">
                                    <div class="col-lg-12">
                                        <label class="col-lg-12" for="project_type">Type</label>
                                    </div>
                                    <div class="col-lg-12">
                                        <input type="text" class="form-control form-control-lg @if($errors->has('project_type')) is-invalid @endif"  required name="project_type" placeholder="Enter project type commercial or residance or whatever u want" value="{{$SubProject->project_type}}">
                                        @if($errors->has('project_type'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('project_type') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group row ">
                                    <div class="col-lg-12">
                                        <label class="col-lg-12" for="price">Price</label>
                                    </div>
                                    <div class="col-lg-12">
                                        <input type="text" class="form-control form-control-lg @if($errors->has('price')) is-invalid @endif"  required name="price" placeholder="Enter price" value="{{$SubProject->price}}">
                                        @if($errors->has('price'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('price') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group row ">
                                    <div class="col-lg-12">
                                        <label class="col-lg-12" for="address">Address</label>
                                    </div>
                                    <div class="col-lg-12">
                                        <textarea class="form-control form-control-lg @if($errors->has('address')) is-invalid @endif"  required name="address"  placeholder="address.." >{{$SubProject->address}}</textarea>
                                        @if($errors->has('address'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('address') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group row ">
                                    <div class="col-lg-12">
                                        <label class="col-lg-12" for="excerpt">Excerpt</label>
                                    </div>
                                    <div class="col-lg-12">
                                        <textarea class="form-control form-control-lg @if($errors->has('excerpt')) is-invalid @endif"  required name="excerpt"  placeholder="excerpt.." >{{$SubProject->excerpt}}</textarea>
                                        @if($errors->has('excerpt'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('excerpt') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group row ">
                                    <div class="col-lg-12">
                                        <label class="col-lg-12" for="description">Description</label>
                                    </div>
                                    <div class="col-lg-12">

                                        <textarea class="form-control form-control-lg js-summernote @if($errors->has('description')) is-invalid @endif"  required name="description"  placeholder="description.." >{!!$SubProject->description!!}</textarea>

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
            {{-- end service info --}}
            
            {{-- service left info --}}
            <div class="col-lg-4 col-12">

                {{-- service image info --}}
                <div class="block block-themed">
                    <div class="block-header bg-gd-aqua">
                        <h3 class="block-title">Upload Image</h3>
                    </div>

                    <div class="block-content block-content-full text-center">
                        <img class="img-avatar img-avatar-thumb" src="{{$SubProject->image}}" alt="">
                    </div>

                    <div class="block-content">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group row ">
                                    <div class="col-lg-12">
                                        <label class=" col-lg-12" for="image">Upload Image</label>

                                    </div>
                                    <div class="col-lg-12">
                                        <input type="file" class="form-control form-control-lg  @if($errors->has('image')) is-invalid @endif"   name="image" value="{{$SubProject->image}}">
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
                {{-- end service image info --}}
                {{-- Sub project files info --}}
                <div class="block block-themed">
                    <div class="block-header bg-gd-aqua">
                        <h3 class="block-title">Upload Files</h3>
                    </div>
                    <div class="block-content">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group row ">
                                    <div class="col-lg-12">
                                        <label class="col-lg-12" for="payment_plan">Upload Payment Plans</label>

                                    </div>
                                    <div class="col-lg-12">
                                        <input type="file" class="form-control form-control-lg  @if($errors->has('payment_plan')) is-invalid @endif"  name="payment_plan" value="{{$SubProject->payment_plan}}">
                                        {{$SubProject->payment_plan}}
                                        @if($errors->has('payment_plan'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('payment_plan') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
    
                            <div class="col-lg-12">
                                <div class="form-group row ">
                                    <div class="col-lg-12">
                                        <label class=" col-lg-12" for="master_plan">Upload Master Plans</label>

                                    </div>
                                    <div class="col-lg-12">
                                        <input type="file" class="form-control form-control-lg  @if($errors->has('master_plan')) is-invalid @endif"  name="master_plan" value="{{$SubProject->master_plan}}">
                                        {{$SubProject->master_plan}}
                                        @if($errors->has('master_plan'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('master_plan') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group row ">
                                    <div class="col-lg-12">
                                        <label class=" col-lg-12" for="floor_plan">Upload Floor Plan</label>

                                    </div>
                                    <div class="col-lg-12">
                                        <input type="file" class="form-control form-control-lg  @if($errors->has('floor_plan')) is-invalid @endif"   name="floor_plan" value="{{$SubProject->floor_plan}}">
                                        {{$SubProject->floor_plan}}
                                        @if($errors->has('floor_plan'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('floor_plan') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                {{-- end Sub project files info --}}

                {{-- service order info --}}
                <div class="block  block-themed">
                    <div class="block-header bg-gd-aqua">
                        <h3 class="block-title">Sub-Project order & Status</h3>
                    </div>
                    <div class="block-content">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="col-lg-12">Status</label>
                                    <div class="col-lg-12">
                                        <div class="custom-control custom-radio custom-control-inline mb-5">
                                            <input class="custom-control-input" type="radio" required name="status" value="1" {{($SubProject->status=='1')? "checked" :"" }} id="check1" >
                                            <label class="custom-control-label" for="check1">Active</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline mb-5">
                                            <input class="custom-control-input" type="radio" required name="status" value="0" {{($SubProject->status=='0')? "checked" :"" }} id="check2" >
                                            <label class="custom-control-label" for="check2">Deactive</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="col-lg-12">IsActive (To Show in dropdown homepage)</label>
                                    <div class="col-lg-12">
                                        <div class="custom-control custom-radio custom-control-inline mb-5">
                                            <input class="custom-control-input" type="radio" required name="is_active" value="1" {{($SubProject->is_active=='1')? "checked" :"" }} id="check11" >
                                            <label class="custom-control-label" for="check11">Active</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline mb-5">
                                            <input class="custom-control-input" type="radio" required name="is_active" value="0" {{($SubProject->is_active=='0')? "checked" :"" }} id="check22" >
                                            <label class="custom-control-label" for="check22">Deactive</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group row">
                                    <div class="col-lg-12">
                                        <label class="col-lg-12" for="order">Order</label>
                                    </div>
                                    <div class="col-lg-12">
                                       
                                        <input type="text" class="form-control form-control-lg @if($errors->has('order')) is-invalid @endif"  required name="order" placeholder="Set Order" value="{{$SubProject->order}}">
                                        @if($errors->has('order'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('order') }}</strong>
                                        </span>
                                        @endif
                                        
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                {{-- project order info --}}


                {{-- project tags info --}}
                <div class="block  block-themed">
                    <div class="block-header bg-gd-aqua">
                        <h3 class="block-title">Sub-Project Tags</h3>
                    </div>
                    <div class="block-content">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group row">
                                    <label class="col-lg-12" for="example-tags1">Meta Tag</label>
                                    <div class="col-lg-12">
                                        <input type="text" class="js-tags-input form-control form-control-lg  @if($errors->has('meta_tag')) is-invalid @endif" data-height="34px" id="example-tags1" name="meta_tag" value="{{$SubProject->meta_tag}}">
                                            
                                            @if($errors->has('meta_tag'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('meta_tag') }}</strong>
                                            </span>
                                            @endif
                                            
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group row ">
                                    <div class="col-lg-12">
                                        <label class="col-lg-12" for="meta_title">Meta Title</label>
                                    </div>
                                    <div class="col-lg-12">
                                        <input type="text" class="form-control form-control-lg @if($errors->has('meta_title')) is-invalid @endif"   name="meta_title" placeholder="Enter Meta title" value="{{$SubProject->meta_title}}">
                                        @if($errors->has('meta_title'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('meta_title') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group row ">
                                    <div class="col-lg-12">
                                        <label class="col-lg-12" for="meta_description">Meta Description</label>
                                    </div>
                                    <div class="col-lg-12">
                                        <input type="text" class="form-control form-control-lg @if($errors->has('meta_description')) is-invalid @endif"   name="meta_description" placeholder="Enter Meta description" value="{{$SubProject->meta_description}}">
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
                {{-- project end tags info --}}




                
            </div>



        </div>
    </form>
</div>
@endsection
@section('script')
   <!-- Page JS Plugins -->
 
   <script src="{{asset('assets/js/plugins/jquery-auto-complete/jquery.auto-complete.min.js')}}"></script>
   <script src="{{asset('assets/js/plugins/select2/js/select2.full.min.js')}}"></script>
   <script src="{{asset('assets/js/plugins/jquery-tags-input/jquery.tagsinput.min.js')}}"></script>
   <script>jQuery(function(){ Codebase.helpers([ 'select2', 'tags-inputs']); });</script>
   
   <script src="{{asset('assets/js/plugins/summernote/summernote-bs4.min.js')}}"></script>
   <script src="{{asset('assets/js/plugins/ckeditor/ckeditor.js')}}"></script>
   <script src="{{asset('assets/js/plugins/simplemde/simplemde.min.js')}}"></script>
   <script>jQuery(function(){ Codebase.helpers(['summernote']); });</script>
@endsection
