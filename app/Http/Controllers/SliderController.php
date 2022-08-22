<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
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
        $slider = Slider::all();
        // dd($slider);
        return view('admin.slider.index', compact('slider'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        //
        $input = $request->validate([
            'title'=>['required'],
            'price'=>['required'],
            'image' => '|image|mimes:jpeg,png,jpg,gif,svg',
            'description' => ['required'],
            'meta_title' => ['nullable'],
            'meta_tag' => ['nullable'],
            'meta_description' => ['nullable'],
            

            ]);

            if ($image = $request->file('image')) {
                $destinationPath = public_path('/images/slider/');
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);
                $input['image'] = $profileImage;
                
            }
        
        $data = Slider::create($input);
        // dd($data);

        return redirect()->route('slider.index')->with('success','Slider created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        //
        return view('admin.slider.edit', compact('slider'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {
        //
        $input = $request->validate([
            'title'=>['required'],
            'price'=>['required'],
            'image' => '|image|mimes:jpeg,png,jpg,gif,svg',
            'description' => ['required'],
            'meta_title' => ['nullable'],
            'meta_tag' => ['nullable'],
            'meta_description' => ['nullable'],
            

            ]);

            if ($image = $request->file('image')) {
                $destinationPath = public_path('/images/slider/');
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);
                $input['image'] = $profileImage;
                
            }
        
       
        $slider->update($input);

        return redirect()->route('slider.index')->with('success','Slider Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        //
        $slider->delete();
        return redirect()->route('slider.index')->with('success', 'Slider has been deleted');
    }
}
