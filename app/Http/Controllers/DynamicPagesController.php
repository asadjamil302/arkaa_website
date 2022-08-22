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

class DynamicPagesController extends Controller
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
        $dynamicPages = DynamicPages::all();
        return view('admin.dynamic_pages.index', compact('dynamicPages'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.dynamic_pages.create');

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
            'slug' => 'required|unique:dynamic_pages',
            'description' => 'required',
            'status' => 'required',
            'meta_title' => 'nullable',
            'meta_tag' => 'nullable',
            'meta_description' => 'nullable',
            
            ]);
        // dd($request);
        $input['slug'] = Str::slug($request->slug);
        $data = DynamicPages::create($input);
        // dd($data);

        return redirect()->route('dynamicPages.index')->with('success','Dynamically Page created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DynamicPages  $dynamicPages
     * @return \Illuminate\Http\Response
     */
    public function show(DynamicPages $dynamicPages)
    {
        //
        
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


        $projects = Project::with('sub_project')->orderBy('order', 'asc')->get();
        // dd($project);

        $dynamicProjects = DynamicPages::all();
        // dd($dynamicProjects);

        return view('front.front_pages.dynamic_pages_detail',compact('array','setting','projects','array_image','image','dynamicPages','dynamicProjects'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DynamicPages  $dynamicPages
     * @return \Illuminate\Http\Response
     */
    public function edit(DynamicPages $dynamicPages)
    {
        //
        return view('admin.dynamic_pages.edit', compact('dynamicPages'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DynamicPages  $dynamicPages
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DynamicPages $dynamicPages)
    {
        //
        // dd($request);

        $input = $request->validate([
            'title'=>'required',
            'slug' => 'required',
            'description' => 'required',
            'status' => 'required',
            'meta_title' => 'nullable',
            'meta_tag' => 'nullable',
            'meta_description' => 'nullable',
            
            ]);
        // dd($input);
        $input['slug'] = Str::slug($request->slug);
        $dynamicPages->update($input);
        return redirect()->route('dynamicPages.index')->with('success','Dynamically Page updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DynamicPages  $dynamicPages
     * @return \Illuminate\Http\Response
     */
    public function destroy(DynamicPages $dynamicPages)
    {
        //
        $dynamicPages->delete();
        return redirect()->route('dynamicPages.index')->with('success', 'Dynamically Page has been deleted');
    }
}
