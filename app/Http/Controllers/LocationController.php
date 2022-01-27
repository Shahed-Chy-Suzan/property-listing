<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;

class LocationController extends Controller
{

//------------------------- Index -------------------------------------------------
      public function index()
      {
          $locations = Location::orderBy('id','desc')->get();
          return view('dashboard.locations.index')->with('locations', $locations);
      }


//--------------------------------- Create ------------------------------------------
      public function create()
      {
          return view('dashboard.locations.create');
      }


//------------------------------- Store ------------------------------------------
      public function store(Request $request)
      {
          $request->validate([
              'name'  => ['required', 'max:255']
          ]);

          Location::create($request->only('name'));

          return redirect()->route('adminLocations')->with('message', 'Location Added');

      }


//------------------------- Edit Page --------------------------------------------
      public function edit($locationID)
      {
          $location = Location::findorFail($locationID);
          return view('dashboard.locations.edit')->with('location', $location);
      }


//---------------------------- Upate ----------------------------------------------
      public function update(Request $request, $locationID)
      {
          $request->validate([
              'name'  => ['required', 'max:255']
          ]);

          Location::findorFail($locationID)->update($request->only('name'));

          return redirect()->route('adminLocations')->with('message', 'Location Updated');
      }


//----------------------- Delete ------------------------------------------------
      public function destroy($locationID)
      {
          Location::findorFail($locationID)->delete();
          return redirect()->route('adminLocations')->with('message', 'Location Deleted');
      }
}
