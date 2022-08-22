<?php

namespace App\Http\Controllers;

use App\Models\Homeslider;
use Illuminate\Http\Request;

class HomesliderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('store','destroy','create','show');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $homeslider =Homeslider::all();
        return view('admin.setting.homeslider.index', compact('homeslider'));
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
     * @param  \App\Models\Homeslider  $homeslider
     * @return \Illuminate\Http\Response
     */
    public function show(Homeslider $homeslider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Homeslider  $homeslider
     * @return \Illuminate\Http\Response
     */
    public function edit(Homeslider $homeslider)
    {
        //
        return view('admin.setting.homeslider.edit', compact('homeslider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Homeslider  $homeslider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Homeslider $homeslider)
    {
        //
        $input = $request->validate([
            'status'=>'required',
            ]);
        $homeslider->update($input);
        return redirect()->route('homeslider.index')->with('success','Home Page Slider updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Homeslider  $homeslider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Homeslider $homeslider)
    {
        //
    }
}
