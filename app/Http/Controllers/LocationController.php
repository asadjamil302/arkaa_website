<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
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
        $location = Location::all();
        // dd($location);
        return view('admin.location.index', compact('location'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.location.create');

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
            'city'=>['required'],
            'description' => ['required'],
            'meta_title' => ['nullable'],
            'meta_tag' => ['nullable'],
            'meta_description' => ['nullable'],
            

            ]);

        $data = Location::create($input);
        // dd($data);

        return redirect()->route('location.index')->with('success','Location created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function show(Location $location)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function edit(Location $location)
    {
        //
        return view('admin.location.edit', compact('location'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Location $location)
    {
        //
        $input = $request->validate([
            'city'=>['required'],
            'description' => ['required'],
            'meta_title' => ['nullable'],
            'meta_tag' => ['nullable'],
            'meta_description' => ['nullable'],
            

            ]);

        $location->update($input);

        return redirect()->route('location.index')->with('success','Location Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function destroy(Location $location)
    {
        //
        $location->delete();
        return redirect()->route('location.index')->with('success', 'Location has been deleted');
    }
}
