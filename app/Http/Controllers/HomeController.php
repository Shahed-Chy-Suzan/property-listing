<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;

class HomeController extends Controller
{
    public function home()
    {
        $latest_properties = Property::all();
        return view('welcome',[
            'latest_properties' => $latest_properties
        ]);
        // return view('welcome')->with(['latest_properties' => $latest_properties]);
        // return view('welcome',compact('latest_properties'));
    }
}
