<?php

namespace App\Http\Controllers;

use App\missing;
use Illuminate\Http\Request;

class MissingController extends Controller {
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('missing.create');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name'  => "required|",
            'last_name'   => "required|",
            'age'         => "required|",
            'place'       => "required|",
            'description' => "required|",
            'applicant'   => "required|",
            'address'     => "required|",
            'email'       => "required|",
            'contact'     => "required|",
        ]);
        
        
        missing::create([
            'first_name'  => $request->first_name,
            'last_name'   => $request->last_name,
            'age'         => $request->age,
            'place'       => $request->place,
            'description' => $request->description,
            'applicant'   => $request->applicant,
            'address'     => $request->address,
            'email'       => $request->email,
            'contact'     => $request->contact,
        ]);
        
        return redirect('/');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\missing $missing
     * @return \Illuminate\Http\Response
     */
    public function show(missing $missing)
    {
        //
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\missing $missing
     * @return \Illuminate\Http\Response
     */
    public function edit(missing $missing)
    {
        //
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\missing             $missing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, missing $missing)
    {
        //
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\missing $missing
     * @return \Illuminate\Http\Response
     */
    public function destroy(missing $missing)
    {
        //
    }
}
