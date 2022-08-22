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
            <form action="{{route('homeslider.update', $homeslider)}}" method="post" enctype="multipart/form-data">
            @method('patch');
                @csrf

                <div class="col-12">
                    <div class="form-group">
                        <label class="col-lg-12">Status</label>
                        <div class="col-lg-12">
                            <div class="custom-control custom-radio custom-control-inline mb-5">
                                <input class="custom-control-input" type="radio" required name="status" value="1" {{($homeslider->status=='1')? "checked" :"" }} id="check1" >
                                <label class="custom-control-label" for="check1">Active</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline mb-5">
                                <input class="custom-control-input" type="radio" required name="status" value="0" {{($homeslider->status=='0')? "checked" :"" }} id="check2" >
                                <label class="custom-control-label" for="check2">Deactive</label>
                            </div>
                        </div>
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