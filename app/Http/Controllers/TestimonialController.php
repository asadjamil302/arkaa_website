<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
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
        $testimonial = Testimonial::all();
        return view('admin.testimonial.index', compact('testimonial'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.testimonial.create');
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
            'image' => '|image|mimes:jpeg,png,jpg,gif,svg',
            'description' => ['required'],
            'meta_title' => ['nullable'],
            'meta_tag' => ['nullable'],
            'meta_description' => ['nullable'],
            

            ]);

            if ($image = $request->file('image')) {
                $destinationPath = public_path('/images/testimonial/');
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);
                $input['image'] = $profileImage;
                
            }
        
        $data = Testimonial::create($input);
        // dd($data);

        return redirect()->route('testimonial.index')->with('success','Testimonial created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonial $testimonial)
    {
        //
        return view('admin.testimonial.edit', compact('testimonial'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        //
        $input = $request->validate([
            'title'=>['required'],
            'image' => '|image|mimes:jpeg,png,jpg,gif,svg',
            'description' => ['required'],
            'meta_title' => ['nullable'],
            'meta_tag' => ['nullable'],
            'meta_description' => ['nullable'],
            

            ]);

            if ($image = $request->file('image')) {
                $destinationPath = public_path('/images/testimonial/');
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);
                $input['image'] = $profileImage;
                
            }
        
       
        $testimonial->update($input);

        return redirect()->route('testimonial.index')->with('success','Testimonial Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonial $testimonial)
    {
        //
        $testimonial->delete();
        return redirect()->route('testimonial.index')->with('success', 'Testimonial has been deleted');
    }
}
