@extends('admin.master.app')

@section('css')

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
            <h3 class="block-title">Update Pages-Images-Setting </h3>
        </div>
        <div class="block-content">
            <form action="{{route('setting.update', $setting)}}" method="post" enctype="multipart/form-data">
            @method('patch');
                @csrf
                    <div class="form-group ">
                        <label class="col-form-label" for="key">Enter the key</label>
                        <div class="">
                            <input type="text" value="{{$setting->key}}" class="form-control  @if($errors->has('key')) is-invalid @endif"  name="key" disabled>
                            @if($errors->has('key'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('key') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    
                    
                    <div class="form-group ">
                        <label class=" col-form-label" for="slug">slug</label>
                        <div class="">
                            <input type="text" value="{{$setting->slug}}" class="form-control @if($errors->has('slug')) is-invalid @endif"  name="slug" disabled>
                            @if($errors->has('slug'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('slug') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group ">
                        <label class=" col-form-label" for="value">Enter the Value</label>
                        <div class="">
                            <textarea class="form-control form-control-lg @if($errors->has('value')) is-invalid @endif"  required name="value" >{{$setting->value}}</textarea>
                            @if($errors->has('value'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('value') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group ">
                        <div class="col-lg-9 ">
                            <button type="submit" class="btn btn-alt-primary">Submit</button>
                        </div>
                    </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('script')

@endsection