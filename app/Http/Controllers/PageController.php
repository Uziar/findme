<?php


namespace App\Http\Controllers;


use App\Missing;
use App\Found;

class PageController extends Controller {
    
    public function index()
    {
        $founds = Found::latest()->approved()->get();
        $missings = Missing::latest()->approved()->get();
        return view('welcome',compact("founds","missings"));
    }
    
}