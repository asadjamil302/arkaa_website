@extends('admin.master.app')

@section('content')
<div class="content">


   
        <div class="row gutters-tiny">
            <!-- Earnings -->
            <div class="col-md-6 col-xl-4">
                <a class="block block-rounded block-transparent bg-gd-elegance" href="{{route('project.index')}}">
                    <div class="block-content block-content-full block-sticky-options">
                        <div class="block-options">
                            <div class="block-options-item">
                                <i class="fa fa-th-list text-white-op"></i>
                            </div>
                        </div>
                        <div class="py-20 text-center">
                            <div class="font-size-h2 font-w700 mb-0 text-white" data-toggle="countTo" data-to="{{ $projects }}" data-before="$">0</div>
                            <div class="font-size-sm font-w600 text-uppercase text-white-op">All Cities Projects</div>
                        </div>
                    </div>
                </a>
            </div>
            <!-- END Earnings -->

            <!-- Orders -->
            <div class="col-md-6 col-xl-4">
                <a class="block block-rounded block-transparent bg-gd-dusk" href="{{route('SubProject.index')}}">
                    <div class="block-content block-content-full block-sticky-options">
                        <div class="block-options">
                            <div class="block-options-item">
                                <i class="fa fa-tasks text-white-op"></i>
                            </div>
                        </div>
                        <div class="py-20 text-center">
                            <div class="font-size-h2 font-w700 mb-0 text-white" data-toggle="countTo" data-to="{{ $SubProject }}">0</div>
                            <div class="font-size-sm font-w600 text-uppercase text-white-op">All Cities Sub-Projects</div>
                        </div>
                    </div>
                </a>
            </div>
            <!-- END Orders -->

            <!-- New Customers -->
            <div class="col-md-6 col-xl-4">
                <a class="block block-rounded block-transparent bg-gd-sea" href="{{route('dynamicPages.index')}}">
                    <div class="block-content block-content-full block-sticky-options" >
                        <div class="block-options">
                            <div class="block-options-item">
                                <i class="fa fa-th-list text-white-op"></i>
                            </div>
                        </div>
                        <div class="py-20 text-center">
                            <div class="font-size-h2 font-w700 mb-0 text-white" data-toggle="countTo" data-to="{{ $dynamicPages }}">0</div>
                            <div class="font-size-sm font-w600 text-uppercase text-white-op">All Dynamic Pages</div>
                        </div>
                    </div>
                </a>
            </div>
            <!-- END New Customers -->


        </div>
        <!-- END Statistics -->
        <div class="row gutters-tiny">
            <!-- Earnings -->
            <div class="col-md-6 col-xl-4">
                <a class="block block-rounded block-transparent bg-gd-dusk" href="{{route('slider.index')}}">
                    <div class="block-content block-content-full block-sticky-options">
                        <div class="block-options">
                            <div class="block-options-item">
                                <i class="fa fa-sliders text-white-op"></i>
                            </div>
                        </div>
                        <div class="py-20 text-center">
                            <div class="font-size-h2 font-w700 mb-0 text-white" data-toggle="countTo" data-to="{{ $slider }}">0</div>
                            <div class="font-size-sm font-w600 text-uppercase text-white-op">All Project Slider</div>
                        </div>
                    </div>
                </a>
            </div>
            <!-- END Earnings -->

            <!-- Orders -->
            <div class="col-md-6 col-xl-4">
                <a class="block block-rounded block-transparent bg-gd-dusk" href="{{route('location.index')}}">
                    <div class="block-content block-content-full block-sticky-options">
                        <div class="block-options">
                            <div class="block-options-item">
                                <i class="fa fa-university text-white-op"></i>
                            </div>
                        </div>
                        <div class="py-20 text-center">
                            <div class="font-size-h2 font-w700 mb-0 text-white" data-toggle="countTo" data-to="{{ $location }}">0</div>
                            <div class="font-size-sm font-w600 text-uppercase text-white-op">All Office Locations</div>
                        </div>
                    </div>
                </a>
            </div>
            <!-- END Orders -->

            <!-- New Customers -->
            <div class="col-md-6 col-xl-4">
                <a class="block block-rounded block-transparent bg-gd-sea" href="{{route('testimonial.index')}}">
                    <div class="block-content block-content-full block-sticky-options" >
                        <div class="block-options">
                            <div class="block-options-item">
                                <i class="fa fa-book text-white-op"></i>
                            </div>
                        </div>
                        <div class="py-20 text-center">
                            <div class="font-size-h2 font-w700 mb-0 text-white" data-toggle="countTo" data-to="{{ $whychooseus }}">0</div>
                            <div class="font-size-sm font-w600 text-uppercase text-white-op">All Why Choose Us</div>
                        </div>
                    </div>
                </a>
            </div>
            <!-- END New Customers -->


        </div>
        <div class="row gutters-tiny">      

             <!-- New Customers -->
             <div class="col-md-6 col-xl-4">
                <a class="block block-rounded block-transparent bg-gd-sea" href="{{route('testimonial.index')}}">
                    <div class="block-content block-content-full block-sticky-options" >
                        <div class="block-options">
                            <div class="block-options-item">
                                <i class="fa fa-tumblr text-white-op"></i>
                            </div>
                        </div>
                        <div class="py-20 text-center">
                            <div class="font-size-h2 font-w700 mb-0 text-white" data-toggle="countTo" data-to="{{ $testimonial }}">0</div>
                            <div class="font-size-sm font-w600 text-uppercase text-white-op">All Testimonial</div>
                        </div>
                    </div>
                </a>
            </div>
            <!-- END New Customers -->

        </div>

</div>
@endsection

<!-- END Page Content -->