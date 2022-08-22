<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\DynamicPages;
use App\Models\Slider;
use App\Models\Project;
use App\Models\Setting;
use App\Models\Location;
use App\Models\HomeImage;
use App\Models\Homeslider;
use App\Models\Testimonial;
use App\Models\Whychooseus;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    //
    public function index(){

        //All home page image setting store front page show
        $image = HomeImage::all();
        $array_image = array();
        foreach($image as $item=>$name){
            $array_image[$name->name] = $name->image;
            
        }
        //All home page setting store front page show
        $setting = Setting::all();
        $array = array();
        foreach($setting as $item=>$value){
            $array[$value->key] = $value->value;
        }
        //why choose us portion front page show
        $whychooseus = Whychooseus::all();
        //Testimonial portion front page show
        $testimonial = Testimonial::all();
        //Project Slider portion front page show
        $slider = Slider::all();
        //Office Location portion front page show
        $location = Location::all();

        $projects = Project::with('sub_project')->orderBy('order', 'asc')->get();
        // dd($project);

        $dynamicProjects = DynamicPages::all();
        // dd($dynamicProjects);


        //for slider change setting
        $homeslider = Homeslider::all();
        return view('front.front_pages.index',compact('whychooseus','array','setting','testimonial','slider','location','projects','array_image','image','dynamicProjects','homeslider'));
        
    }
    public function about()
    {
        //All home page image setting store front page show
        $image = HomeImage::all();
        $array_image = array();
        foreach($image as $item=>$name){
            $array_image[$name->name] = $name->image;
            
        }
        //All About page setting store front page show
        $about = About::all();
        $ab = array();
        foreach($about as $item=>$value){
            $ab[$value->key] = $value->value;
        }
        //All home page setting store front page show
        $setting = Setting::all();
        $array = array();
        foreach($setting as $item=>$value){
            $array[$value->key] = $value->value;
        }
        //Testimonial portion front page show
        $testimonial = Testimonial::all();

        $projects = Project::with('sub_project')->orderBy('order', 'asc')->get();
        // dd($project);

        $dynamicProjects = DynamicPages::all();

        return view('front.front_pages.about_page',compact('array','setting','testimonial','projects','about','ab','array_image','image','dynamicProjects'));

    }
    public function contact()
    {
        //All home page image setting store front page show
        $image = HomeImage::all();
        $array_image = array();
        foreach($image as $item=>$name){
            $array_image[$name->name] = $name->image;
            
        }
        //All About page setting store front page show
        $about = About::all();
        $ab = array();
        foreach($about as $item=>$value){
            $ab[$value->key] = $value->value;
        }
        //All home page setting store front page show
        $setting = Setting::all();
        $array = array();
        foreach($setting as $item=>$value){
            $array[$value->key] = $value->value;
        }

        $projects = Project::with('sub_project')->orderBy('order', 'asc')->get();
        // dd($project);

        $dynamicProjects = DynamicPages::all();

        return view('front.front_pages.contact_page',compact('array','setting','projects','about','ab','array_image','image','dynamicProjects'));

    }
    
    // for all PROJECTS
    public function all_projects_detail()
    {
        // $project = Project::all();
        // dd($project);
            //All home page image setting store front page show
            $image = HomeImage::all();
            $array_image = array();
            foreach($image as $item=>$name){
                $array_image[$name->name] = $name->image;
                
            }

         //All home page setting store front page show
         $setting = Setting::all();
         $array = array();
         foreach($setting as $item=>$value){
             $array[$value->key] = $value->value;
         }
         //why choose us portion front page show
         $whychooseus = Whychooseus::all();
         //Testimonial portion front page show
         $testimonial = Testimonial::all();
         //Project Slider portion front page show
         $slider = Slider::all();
         //Office Location portion front page show
         $location = Location::all();
 
         $projects = Project::with('sub_project')->orderBy('order', 'asc')->get();
        //  dd($projects);

        $dynamicProjects = DynamicPages::all();
 
         return view('front.front_pages.all_projects',compact('whychooseus','array','setting','testimonial','slider','location','projects','array_image','image','dynamicProjects'));
    }



}
