<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use App\Models\Project;
use App\Models\Setting;
use App\Models\Location;
use App\Models\HomeImage;
use App\Models\Testimonial;
use App\Models\Whychooseus;
use Illuminate\Support\Str;
use App\Models\DynamicPages;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('show');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $project = Project::orderBy('order', 'ASC')->get();
        return view('admin.project.index', compact('project'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.project.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $input = $request->validate([
            'title'=>'required',
            'slug' => 'required|unique:projects',
            'description' => 'required',
            'excerpt' => 'required',
            'status' => 'required',
            'is_active' => 'required',
            'order' => 'integer|unique:projects',
            'meta_title' => 'required',
            'meta_tag' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'meta_description' => 'required',
            
            ]);

        $input['slug'] = Str::slug($request->slug);
      
        if ($image = $request->file('image')) {
                $destinationPath = public_path('/images/project/');
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);
                $input['image'] = $profileImage;
                
            }
        
        $data = Project::create($input);
        return redirect()->route('project.index')->with('success','Project created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
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
        // dd($dynamicProjects);
        
         return view('front.front_pages.project_detail',compact('whychooseus','array','setting','testimonial','slider','location','projects','project','array_image','image','dynamicProjects'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        //
        return view('admin.project.edit', compact('project'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        //
        $input = $request->validate([
            'title'=>'required',
            'slug' => 'required',
            'description' => 'required',
            'excerpt' => 'required',
            'status' => 'required',
            'is_active' => 'required',
            'order' => 'integer',
            'meta_title' => 'required',
            'meta_tag' => 'required',
            'image' => '|image|mimes:jpeg,png,jpg,gif,svg',
            'meta_description' => 'required',
            
            ]);

        $input['slug'] = Str::slug($request->slug);
      
        if ($image = $request->file('image')) {
                $destinationPath = public_path('/images/project/');
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);
                $input['image'] = $profileImage;
                
            }
        $project->update($input);

        return redirect()->route('project.index')->with('success','Project Updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        //
        $project->delete();
        return redirect()->route('project.index')->with('success', 'Project has been deleted');
    }
}
