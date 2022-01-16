<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\Location;

class HomeController extends Controller
{
    public function home()
    {
        // $latest_properties = Property::all();
        $latest_properties = Property::latest()->get()->take(4);
        $locations = Location::select(['id', 'name'])->get();

        return view('welcome',[
            'latest_properties' => $latest_properties,
            'locations' => $locations
        ]);
        // return view('welcome')->with(['latest_properties' => $latest_properties]);
        // return view('property.single')->with('property',$property);
        // return view('welcome',compact('latest_properties'));
    }
}
