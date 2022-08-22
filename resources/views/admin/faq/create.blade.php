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
            <h3 class="block-title">F.A.Q Create</h3>
        </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="block-content">
                            <form action="{{route('faq.store')}}" method="post"  enctype="multipart/form-data" >
                                @csrf
                                
                                    <div class="form-group ">
                                        <div class="col-lg-12">
                                            <label for="example-select2" class="col-lg-12">Select Project</label>
    
                                        </div>
                                        <div class="col-lg-12">
                                            <select class="select2 form-control  form-control-lg multiple-select " id="sub_project_id" required name="sub_project_id" style="width: 100%;" data-placeholder="Choose one.." >
                                                <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
    
                                                @foreach($SubProject as $item)
                                                    <option value="{{$item->id}}">{{$item->title}}</option>
                                                @endforeach
    
                                            </select>
                                        </div>
    
                                    </div>
                               
                                    <div class="form-group ">
                                        <label class="col-lg-4 col-form-label" for="question">Question</label>
                                        <div class="col-lg-12">
                                            <input type="text" class="form-control  @if($errors->has('question')) is-invalid @endif"  id="question" required name="question" placeholder="Enter question" value="{{old('question')}}">
                                            @if($errors->has('question'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('question') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group ">
                                        <label class="col-lg-4 col-form-label" for="answer">Answer</label>
                                        <div class="col-lg-12">
                                            <input type="text" class="form-control @if($errors->has('answer')) is-invalid @endif"  required name="answer" placeholder="Enter Answer" value="{{old('answer')}}">
                                            @if($errors->has('answer'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('answer') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-lg-12 ml-auto text-center">
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

@endsection