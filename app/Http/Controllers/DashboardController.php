<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\Property;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    //-------------------- Dashboard Home -----------------------
    public function index()
    {
        return view('dashboard.index');
    }


    //----------------------- Property Page -------------------------------
    public function properties()
    {
        $properties = Property::latest()->paginate(20);
        return view('dashboard.property.index')->with('properties',$properties);
    }


    //---------------------- Create New Property ---------------------------
    public function createProperty()
    {
        $locations = Location::all();
        return view('dashboard.property.create')->with(['locations'=> $locations]);
    }


    //-------------------- Store New Property ---------------------------------
    public function storeProperty(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'name_tr' => 'required',
            //'featured_image' => 'required|image',
            'location_id' => 'required',
            'price' => 'required|integer',
            'sale' => 'integer',
            'type' => 'integer',
            'bedrooms' => 'integer',
            'bathrooms' => 'integer',
            'net_sqm' => 'integer',
            'pool' => 'integer',
            'overview' => 'required',
            'overview_tr' => 'required',
            'description' => 'required',
            'description_tr' => 'required',
        ]);

        Property::create([
            'name' => $request->name,
            'name_tr' => $request->name_tr,
            // 'featured_image' => $request->featured_image,
            'location_id' => $request->location_id,
            'price' => $request->price,
            'sale' => $request->sale,
            'type' => $request->type,
            'bedrooms' => $request->bedrooms,
            'bathrooms' => $request->bathrooms,
            'net_sqm' => $request->net_sqm,
            'gross_sqm' => $request->gross_sqm,
            'pool' => $request->pool,
            'overview' => $request->overview,
            'overview_tr' => $request->overview_tr,
            'why_buy' => $request->why_buy,
            'why_buy_tr' => $request->why_buy_tr,
            'description' => $request->description,
            'description_tr' => $request->description_tr,
        ]);

        return redirect()->route('adminProperties')->with(['message' => 'Property is added.']);

    }


    //-------------------- Edit Property ---------------------------------
    public function editProperty($property_id)
    {
        $property = Property::findOrFail($property_id);
        $locations = Location::all();
        return view('dashboard.property.edit', [
            'property' => $property,
            'locations' => $locations
        ]);
    }


    //------------------------ Update Property ------------------------------
    public function updateProperty(Request $request, $property_id)
    {
        $request->validate([
            'name' => 'required',
            'name_tr' => 'required',
            //'featured_image' => 'required|image',
            'location_id' => 'required',
            'price' => 'required|integer',
            'sale' => 'integer',
            'type' => 'integer',
            'bathrooms' => 'integer',
            'net_sqm' => 'integer',
            'pool' => 'integer',
            'overview' => 'required',
            'overview_tr' => 'required',
            'description' => 'required',
            'description_tr' => 'required',
        ]);

        Property::find($property_id)->update([
            'name' => $request->name,
            'name_tr' => $request->name_tr,
            // 'featured_image' => $request->featured_image,
            'location_id' => $request->location_id,
            'price' => $request->price,
            'sale' => $request->sale,
            'type' => $request->type,
            'bedrooms' => $request->bedrooms,
            'bathrooms' => $request->bathrooms,
            'net_sqm' => $request->net_sqm,
            'gross_sqm' => $request->gross_sqm,
            'pool' => $request->pool,
            'overview' => $request->overview,
            'overview_tr' => $request->overview_tr,
            'why_buy' => $request->why_buy,
            'why_buy_tr' => $request->why_buy_tr,
            'description' => $request->description,
            'description_tr' => $request->description_tr,
        ]);

        return redirect()->route('adminProperties')->with(['message' => 'Property is Updated.']);
    }


    //------------------ Delete Property ------------------------------------------
    public function destroyProperty($property_id)
    {
        try {
            Property::findOrFail($property_id)->delete();
            return redirect()->route('adminProperties')->with(['message' => 'Property Deleted']);
        } catch (\Throwable $th) {
            return redirect()->route('adminProperties')->with(['message' => $th->getMessage()]);
        }
    }


}
