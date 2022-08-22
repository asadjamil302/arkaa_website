<style>
  .bg-home7{
  background-image: url("{{$array_image['home_page_image']}}");
  -webkit-background-size: cover;
  background-size: cover;
  background-position: center center;
  height: 860px;
}
</style>
<header class="header-nav menu_style_home_one navbar-scrolltofixed stricky main-menu">
    <div class="container"> 
      <!-- Ace Responsive Menu -->
      <nav> 
        <!-- Menu Toggle btn-->
        <div class="menu-toggle">
        	<img class="nav_logo_img img-fluid" src="{{$array_image['website_logo']}}" alt="header-logo.svg">
          <button type="button" id="menu-btn">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
        </div>
        <a href="{{route('home')}}" class="navbar_brand float-left dn-md mb-3">
					<img class="logo1 img-fluid" src="{{$array_image['website_logo']}}" alt="header-logo.svg">
					<img class="logo2 img-fluid" src="{{$array_image['website_logo']}}" alt="header-logo2.svg">
				</a> 
        <!-- Responsive Menu Structure-->
        <ul id="respMenu" class="ace-responsive-menu text-right" data-menu-style="horizontal">
          <li> <a href="{{route('home')}}"><span class="title">{{$array['navbar_home']}}</span></a></li>
          <li> <a href="{{route('about_us')}}"><span class="title">{{$array['navbar_about']}}</span></a></li>
          <li> <a href="{{route('all_projects')}}"><span class="title">{{$array['navbar_project']}}</span></a>
            <ul>
             {{-- @php
                 $projects_data=App\Models\Project::with('sub_project')->get();
                 
             @endphp --}}
            
              @foreach ($projects as $items)
                    

                @if(($items->status == 1) && ($items->is_active == 1))

                  <li> <a href="{{route('project.show', $items)}}"><span class="title">{{$items->title}}</span></a>
                    
                    <ul>

                      @foreach ($items->sub_project as $sub)

                        @if(($sub->status == 1) && ($sub->is_active == 1))

                          <li><a href="{{route('SubProject.show', $sub)}}">{{$sub->title}}</a></li>

                        @endif

                        @if ($loop->index == 3)
                          <li><a href="{{route('project.show', $items)}}">view More...</a></li>
                          @break;
                        @endif
                      @endforeach


                    </ul>
                  </li>


                @endif

              @endforeach


              
            </ul>
          </li>
          <li><a href="#">Blog</a></li>
          <li><a href="{{route('contact_us')}}">{{$array['navbar_contact_us']}}</a></li>
          <li class="list-inline-item list_c"><a href="{{'tel:'.$array['navbar_mobile_number']}}"><span class="flaticon-phone mr7"></span>{{$array['navbar_mobile_number']}}</a></li>
        </ul>
      </nav>
    </div>
</header>




    <!-- Main Header Nav For Mobile -->
    <div id="page" class="stylehome1 h0">
        <div class="mobile-menu">
          <div class="header stylehome1">
            <div class="main_logo_home2 text-center"> <img class="nav_logo_img img-fluid mt10" src="{{$array_image['website_logo']}}" alt="header-logo.svg" style="height: 50px;"></div>
            <ul class="menu_bar_home2">
              <li class="list-inline-item"><a class="custom_search_with_menu_trigger msearch_icon" href="#"></a></li>
              <li class="list-inline-item" style="visibility: hidden;"><a class="muser_icon" href="#" data-toggle="modal" data-target="#logInModal"><span class="flaticon-user"></span></a></li>
              <li class="list-inline-item"><a class="menubar" href="#menu"><span></span></a></li>
            </ul>
          </div>
        </div>
        <!-- /.mobile-menu -->
        <nav id="menu" class="stylehome1">
          <ul>
            <li> <a href="{{route('home')}}"><span class="title">{{$array['navbar_home']}}</span></a></li>
              <li> <a href="{{route('about_us')}}"><span class="title">{{$array['navbar_about']}}</span></a></li>
              <li> <a href="{{route('all_projects')}}"><span class="title">{{$array['navbar_project']}}</span></a>
                <ul>
                  {{-- @php
                      $projects_data=App\Models\Project::with('sub_project')->get();
                      
                  @endphp --}}
                 
                   @foreach ($projects as $items)
                         
     
                     @if(($items->status == 1) && ($items->is_active == 1))
     
                       <li> <a href="{{route('project.show', $items)}}"><span class="title">{{$items->title}}</span></a>
                         
                         <ul>
     
                           @foreach ($items->sub_project as $sub)
     
                             @if(($sub->status == 1) && ($sub->is_active == 1))
     
                               <li><a href="{{route('SubProject.show', $sub)}}">{{$sub->title}}</a></li>
     
                             @endif
     
                             @if ($loop->index == 3)
                               <li><a href="{{route('project.show', $items)}}">view More...</a></li>
                               @break;
                             @endif
                           @endforeach
     
     
                         </ul>
                       </li>
     
     
                     @endif
     
                   @endforeach
     
     
                   
                 </ul>
              </li>
              <li><a href="#">Blog</a></li>
              <li><a href="{{route('contact_us')}}">{{$array['navbar_contact_us']}}</a></li>
              <li class="list-inline-item list_c"><a href="{{'tel:'.$array['navbar_mobile_number']}}"><span class="flaticon-phone mr7"></span>{{$array['navbar_mobile_number']}}</a></li>
          </ul>
        </nav>
    </div>