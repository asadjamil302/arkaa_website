<?php

namespace App\Http\Controllers;

use App\Models\HomeImage;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class HomeImageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('show','store','destroy','create');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        $image = HomeImage::all();
        return view('admin.setting.home_image.index', compact('image'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HomeImage  $homeImage
     * @return \Illuminate\Http\Response
     */
    public function show(HomeImage $homeImage)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HomeImage  $homeImage
     * @return \Illuminate\Http\Response
     */
    public function edit(HomeImage $homeImage)
    {
        //
        return view('admin.setting.home_image.edit', compact('homeImage'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HomeImage  $homeImage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HomeImage $homeImage)
    {
        //
        $input = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg', 
        ]);

        $input['slug'] = Str::slug($request->slug);
        if ($image = $request->file('image')) {
            $destinationPath = public_path('/images/home_images/');
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = $profileImage;
            
        }

        $homeImage->update($input);
        return redirect()->route('home_image.index')->with('success','Home Image updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HomeImage  $homeImage
     * @return \Illuminate\Http\Response
     */
    public function destroy(HomeImage $homeImage)
    {
        //
    }
}
