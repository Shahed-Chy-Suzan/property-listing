<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;

class PropertyController extends Controller
{
    public function singleProperty($id)
    {
        $property = Property::findOrFail($id);
        //dd($property->gallery());
        return view('property.single')->with('property',$property);
    }

    public function index(Request $request) {

        $latest_properties = Property::latest();

        if(!empty($request->sale)) {
            $latest_properties = $latest_properties->where('sale', $request->sale);
        }

        if(!empty($request->type)) {
            $latest_properties = $latest_properties->where('type', $request->type);
        }

        if(!empty($request->price)) {
            if($request->price == '500000+') {
                $latest_properties = $latest_properties->where('price', '>', 500000);
            }
            elseif($request->price == '500000') {
                $latest_properties = $latest_properties->where('price', '>', 400000)->where('price', '<=', 500000);
            }
            elseif($request->price == '400000') {
                $latest_properties = $latest_properties->where('price', '>', 300000)->where('price', '<=', 400000);
            }
            elseif($request->price == '300000') {
                $latest_properties = $latest_properties->where('price', '>', 200000)->where('price', '<=', 300000);
            }
            elseif($request->price == '200000') {
                $latest_properties = $latest_properties->where('price', '>', 100000)->where('price', '<=', 200000);
            }
            else {
                $latest_properties = $latest_properties->where('price', '>', 0)->where('price', '<=', 100000);
            }
        }

        if(!empty($request->bedrooms)) {
            $latest_properties = $latest_properties->where('bedrooms', $request->bedrooms);
        }


        $latest_properties = $latest_properties->paginate(12);

        return view('property.index', ['latest_properties' => $latest_properties]);
    }

}
