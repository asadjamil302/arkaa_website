<nav id="sidebar">
    <!-- Sidebar Content -->
    <div class="sidebar-content">
        <!-- Side Header -->
        <div class="content-header content-header-fullrow px-15">

            <!-- Normal Mode -->
            <div class="content-header-section text-center align-parent sidebar-mini-hidden">
                <!-- Close Sidebar, Visible only on mobile screens -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none align-v-r" data-toggle="layout" data-action="sidebar_close">
                    <i class="fa fa-times text-danger"></i>
                </button>
                <!-- END Close Sidebar -->

                <!-- Logo -->

                <!-- END Logo -->
            </div>
            <!-- END Normal Mode -->
        </div>
        <!-- END Side Header -->



        <!-- Side Navigation -->
        <div class="content-side content-side-full">
            <ul class="nav-main">
                    <li>
                        <a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i><span class="sidebar-mini-hide">Dashboard</span></a>
                    </li>  
                    {{-- project --}}

                    <li>
                        <a class="nav-submenu" data-toggle="nav-submenu" href="{{route('project.create')}}"><i class="fa fa-th-list"></i><span class="sidebar-mini-hide">Cities</span></a>
                        <ul>
                            <li>
                                <a href="{{route('project.index')}}">List City Projects</a>
                            </li>
                        </ul>
                    </li>

                    {{-- End project --}}

                    {{-- Sub project --}}

                    <li>
                        <a class="nav-submenu" data-toggle="nav-submenu" href="{{route('SubProject.create')}}"><i class="fa fa-tasks"></i><span class="sidebar-mini-hide">Cities Sub Project</span></a>
                        <ul>
                            <li>
                                <a href="{{route('SubProject.index')}}">List Cities Sub-Projects</a>
                            </li>
    
                        </ul>
                    </li>

                    {{-- End Sub project --}}
                    {{--  MAIN faq  SETTING --}}

                    <li>
                        <a class="nav-submenu" data-toggle="nav-submenu" href="{{route('faq.index')}}"><i class="si si-question"></i><span class="sidebar-mini-hide">F.A.Q</span></a>
                        <ul>
                            <li>
                                <a href="{{route('faq.index')}}">All F.A.Q</a>

                            </li>
    
                        </ul>
                    </li>
                    {{--  MAIN end  faq SETTING --}}
   
                    {{-- Why Choose US --}}
                    <li>
                        <a class="nav-submenu" data-toggle="nav-submenu" href="{{route('whychooseus.index')}}"><i class="fa fa-book"></i><span class="sidebar-mini-hide">Why choose us</span></a>
                        <ul>
                            <li>
                                <a class="active" href="{{route('whychooseus.index')}}"><span class="sidebar-mini-hide">List Why choose us</span></a>
                            </li>
                        
                        </ul> 
                    </li>
                    {{-- testimonial --}}

                    <li>
                        <a class="nav-submenu" data-toggle="nav-submenu" href="{{route('testimonial.index')}}"><i class="fa fa-tumblr"></i><span class="sidebar-mini-hide">Testimonial</span></a>
                        <ul>
                            <li>
                                <a href="{{route('testimonial.index')}}">List Testimonial</a>

                            </li>
    
                        </ul>
                    </li>

                    {{-- end testimonial --}}

                    {{-- End Slider Section --}}
                    <li>
                        <a class="nav-submenu" data-toggle="nav-submenu" href="{{route('slider.index')}}"><i class="fa fa-sliders"></i><span class="sidebar-mini-hide">Project Sider</span></a>
                        <ul>
                            <li>
                                <a class="active" href="{{route('slider.index')}}"><span class="sidebar-mini-hide">List Project Sider</span></a>
                            </li>
                        
                        </ul> 
                    </li>

                    {{-- End Slider Section --}}

                    {{-- End Location Section --}}
                    <li>
                        <a class="nav-submenu" data-toggle="nav-submenu" href="{{route('location.index')}}"><i class="fa fa-university"></i><span class="sidebar-mini-hide">Office Location</span></a>
                        <ul>
                            <li>
                                <a class="active" href="{{route('location.index')}}"><span class="sidebar-mini-hide">List Office Location</span></a>
                            </li>
                        
                        </ul> 
                    </li>

                    {{-- End Location Section --}}

                    {{-- MAIN GENERAL SETTING --}}
                <li>
                    <a class="nav-submenu" data-toggle="nav-submenu" href="{{route('setting.index')}}"><i class="fa fa-cogs"></i><span class="sidebar-mini-hide">Page Settings</span></a>
                    <ul>
                        {{-- ALL PAGES SETTING --}}
                        <li>
                            <a href="{{route('setting.index')}}">List Home Page Setting</a>
                        </li>
                        {{-- END ALL PAGE SETTING --}}

                        {{-- About PAGES SETTING --}}
                        <li>
                            <a href="{{route('about.index')}}">List About Page Setting</a>
                        </li>
                        {{-- END About PAGE SETTING --}}
                        
                        {{-- Home Images PAGES SETTING --}}

                        <li>
                            <a href="{{route('home_image.index')}}">All Home-Images Settings</a>
                        </li>
                        {{-- Home Images PAGES SETTING --}}

                        {{-- ALL Dynamic pages--}}
                        <li>
                            <a href="{{route('dynamicPages.index')}}">All Dynamic Pages</a>

                        </li>
                        {{-- END ALL Dynamic pages--}}
                        
                        {{-- ALL Home page slider Setting --}}
                        <li>
                            <a href="{{route('homeslider.index')}}">Home Page Slider Setting</a>

                        </li>
                        {{-- END ALL Home page slider Setting --}}
                    </ul>
                </li>

                {{-- END MAIN GENERAL SETTING --}}

            </ul>
        </div>
        <!-- END Side Navigation -->
    </div>
    <!-- Sidebar Content -->
</nav>