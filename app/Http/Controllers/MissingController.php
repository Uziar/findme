<?php

namespace App\Http\Controllers;

use App\Missing;
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
        
        
        Missing::create([
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
     * @param  \App\Missing $missing
     * @return \Illuminate\Http\Response
     */
    public function show(Missing $missing)
    {
        //
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Missing $missing
     * @return \Illuminate\Http\Response
     */
    public function edit(Missing $missing)
    {
        //
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Missing             $missing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Missing $missing)
    {
        //
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Missing $missing
     * @return \Illuminate\Http\Response
     */
    public function destroy(Missing $missing)
    {
        //
    }
}
