<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Slider;
use App\Models\Project;
use App\Models\Setting;
use App\Models\Location;
use App\Models\HomeImage;
use App\Models\SubProject;
use App\Models\Testimonial;
use App\Models\Whychooseus;
use Illuminate\Support\Str;
use App\Models\DynamicPages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubProjectController extends Controller
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
        $SubProject = SubProject::with('project')->orderBy('order', 'ASC')->get();

        // dd($SubProject);
        return view('admin.SubProject.index', compact('SubProject'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $project = Project::all();

        return view('admin.SubProject.create',compact('project'));

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
            'slug' => 'required|unique:sub_projects',
            'project_id'=>'required',
            'price' => 'required',
            'project_type'=>'required',
            'address' => 'required',
            'image' => '|image|mimes:jpeg,png,jpg,gif,svg',
            'excerpt' => 'required',
            'description' => 'required',
            'order' => 'integer',
            'payment_plan' => 'required|mimes:png,jpg,jpeg,xlx,csv,txt,pdf',
            'master_plan' => 'required|mimes:png,jpg,jpeg,xlx,csv,txt,pdf',
            'floor_plan' => 'required|mimes:png,jpg,jpeg,xlx,csv,txt,pdf',

            ]);
            // dd($input);
            
            $input['slug'] = Str::slug($request->slug);
            //for image upload
            if ($image = $request->file('image')) {
                $destinationPath = public_path('/images/subproject/');
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);
                $input['image'] = $profileImage;
                
            }
            //for payment plan upload

            if ($image = $request->file('payment_plan')) {
                $destinationPath = public_path('/images/subproject/payment_plan/');
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);
                $input['payment_plan'] = $profileImage;
                
            }
            
            //for master plan upload

            if ($image = $request->file('master_plan')) {
                $destinationPath = public_path('/images/subproject/master_plan/');
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);
                $input['master_plan'] = $profileImage;
                
            }

            //for floor plan upload

            if ($image = $request->file('floor_plan')) {
                $destinationPath = public_path('/images/subproject/floor_plan/');
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);
                $input['floor_plan'] = $profileImage;
                
            }

        $data = SubProject::create($input);

        return redirect()->route('SubProject.index')->with('success','Sub Project created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SubProject  $subProject
     * @return \Illuminate\Http\Response
     */
    public function show(SubProject $SubProject)
    {
        //All home page image setting store front page show
        $image = HomeImage::all();
        $array_image = array();
        foreach($image as $item=>$name){
            $array_image[$name->name] = $name->image;
            
        }
        $all_project= Project::all();
        //
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
        // dd($projects);
        $faqs = Faq::where('sub_project_id',$SubProject->id)->get();
        // dd($faqs);
        
        $dynamicProjects = DynamicPages::all();
        // dd($dynamicProjects);
        return view('front.front_pages.sub_project_detail',compact('whychooseus','array','setting','testimonial','slider','location','projects','SubProject','all_project','faqs','array_image','image','dynamicProjects'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SubProject  $subProject
     * @return \Illuminate\Http\Response
     */
    public function edit(SubProject $SubProject)
    {
        //
        $project = DB::table('Projects')->select('id','title')->get();
        
        return view('admin.SubProject.edit', compact('SubProject','project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SubProject  $subProject
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubProject $SubProject)
    {
        //

        $input = $request->validate([
            'title'=>'required',
            'slug' => 'required',
            'project_id'=>'required',
            'project_type'=>'required',
            'price' => 'required',
            'address' => 'required',
            'image' => '|image|mimes:jpeg,png,jpg,gif,svg',
            'excerpt' => 'required',
            'description' => 'required',
            'order' => 'integer',
            'status' => 'required',
            'is_active' => 'required',
            'payment_plan' => '|mimes:png,jpg,jpeg,xlx,csv,txt,pdf',
            'master_plan' => '|mimes:png,jpg,jpeg,xlx,csv,txt,pdf',
            'floor_plan' => '|mimes:png,jpg,jpeg,xlx,csv,txt,pdf',

            ]);
            
            $input['slug'] = Str::slug($request->slug);
            
            if ($image = $request->file('image')) {
                $destinationPath = public_path('/images/subproject/');
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);
                $input['image'] = $profileImage;
                
            }
            //for payment plan upload

            if ($image = $request->file('payment_plan')) {
                $destinationPath = public_path('/images/subproject/payment_plan/');
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);
                $input['payment_plan'] = $profileImage;
                
            }
            //for master plan upload
            
            if ($image = $request->file('master_plan')) {
                $destinationPath = public_path('/images/subproject/master_plan/');
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);
                $input['master_plan'] = $profileImage;
                
            }
            //for floor plan upload

            if ($image = $request->file('floor_plan')) {
                $destinationPath = public_path('/images/subproject/floor_plan/');
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);
                $input['floor_plan'] = $profileImage;
                
            }

            $SubProject->update($input);
            

        return redirect()->route('SubProject.index')->with('success','Sub Project Updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SubProject  $subProject
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubProject $SubProject)
    {
        //
        $SubProject->delete();
        return redirect()->route('SubProject.index')->with('success','Sub Project deleted successfully');
    }
}
