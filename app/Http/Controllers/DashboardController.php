<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use App\Models\Project;
use App\Models\Location;
use App\Models\Testimonial;
use App\Models\Whychooseus;
use App\Models\DynamicPages;
use App\Models\SubProject;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $projects = Project::count();

        $SubProject = SubProject::count();

         //why choose us portion front page show
         $whychooseus = Whychooseus::count();
         //Testimonial portion front page show
         $testimonial = Testimonial::count();
         //Project Slider portion front page show
         $slider = Slider::count();

         //Office Location portion front page show
         $location = Location::count();

         $dynamicPages = DynamicPages::count();
 
        return view('admin.dashboard.index',compact('whychooseus','testimonial','slider','location','dynamicPages','projects','SubProject'));
    }
}
