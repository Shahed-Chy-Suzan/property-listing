<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\Page;
use App\Models\Property;
use App\Models\PropertyEnquire;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

//----------------------------------- Dashboard Home ---------------------------------------
    public function index()
    {
        $counter = [
            'properties' => count(Property::all()),
            'location' => count(Location::all()),
            'page' => count(Page::all()),
            'user' => count(User::all()),
            'message' => count(PropertyEnquire::all()),
        ];

        return view('dashboard.index')->with('counter', $counter);
    }

}
