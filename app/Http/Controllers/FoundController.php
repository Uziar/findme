<?php

namespace App\Http\Controllers;

use App\found;
use Illuminate\Http\Request;

class FoundController extends Controller {
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $founds = found::latest()->get();
        
        return view('found.index',compact('founds'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('found.create');
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
        
        
        found::create([
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
     * @param  \App\found $found
     * @return \Illuminate\Http\Response
     */
    public function show(found $found)
    {
        //
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\found $found
     * @return \Illuminate\Http\Response
     */
    public function edit(found $found)
    {
        //
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\found               $found
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, found $found)
    {
        //
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\found $found
     * @return \Illuminate\Http\Response
     */
    public function destroy(found $found)
    {
        //
    }
}
