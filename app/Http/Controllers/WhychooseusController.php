<?php

namespace App\Http\Controllers;

use App\Models\Whychooseus;
use Illuminate\Http\Request;

class WhychooseusController extends Controller
{
        public function __construct()
        {
            $this->middleware('auth');
        }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $whychooseus = Whychooseus::all();
        return view('admin.why_choose_us.index' , compact('whychooseus'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.why_choose_us.create');
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
            'title'=>['required'],
            'icon' =>['required'],
            'description' => ['required'],
            'meta_title' => ['nullable'],
            'meta_tag' => ['nullable'],
            'meta_description' => ['nullable'],
            

            ]);
            // dd($input);
        
        $data = Whychooseus::create($input);
        // dd($data);

        return redirect()->route('whychooseus.index')->with('success','Why Choose Us created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Whychooseus  $whychooseus
     * @return \Illuminate\Http\Response
     */
    public function show(Whychooseus $whychooseus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Whychooseus  $whychooseus
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $whychooseus = Whychooseus::findOrFail($id);

        // dd($whychooseus);
        return view('admin.why_choose_us.edit', compact('whychooseus'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Whychooseus  $whychooseus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
         $input = $request->validate([
            'title'=>['required'],
            'icon' =>['required'],
            'description' => ['required'],
            'meta_title' => ['nullable'],
            'meta_tag' => ['nullable'],
            'meta_description' => ['nullable'],
            

            ]);

            Whychooseus::whereId($id)->update($input);
        return redirect()->route('whychooseus.index')->with('success','Why Choose Us Updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Whychooseus  $whychooseus
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $whychooseus= Whychooseus::findOrFail($id);
        $whychooseus->delete();
        return redirect()->route('whychooseus.index')->with('success','Why Choose Us deleted successfully');
    }
}
