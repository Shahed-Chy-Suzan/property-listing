<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\Property;
use App\Models\Media;
use Illuminate\Support\Facades\Storage;
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


//---------------------- Store New Property ------------------------------------------
    public function storeProperty(Request $request)
    {
        // try {
            // Extended validation for image
            $updated_validation = $this->validateProperty()[] = [
                'featured_image' => 'required|image',
                'gallery_images' => 'required',
            ];

            // Validation
            $request->validate($updated_validation);

            // Property Instance
            $property = new Property();

            // Save all data
            $this->saveOrUpdateProperty($property, $request);

            // Redirect with success message
            return redirect()->route('adminProperties')->with(['message' => 'Property is added.']);

        // } catch (\Throwable $th) {
        //     // Redirect with error message
        //     return redirect()->route('adminProperties')->with(['message' => $th->getMessage()]);
        // }
    }


//------------------------ Edit property page ------------------------------------------
    public function editProperty($property_id)
    {
    //    try {
            // Find the property
            $property = Property::findOrFail($property_id);

            // Get all locations
            $locations = Location::all();

            // return view with data
            return view('dashboard.property.edit', [
                'property' => $property,
                'locations' => $locations
            ]);

    //    } catch (\Throwable $th) {
    //         // Redirect with error message
    //         return redirect()->route('adminProperties')->with(['message' => $th->getMessage()]);
    //    }

    }


//-------------------------- Update Property ---------------------------------------------
    public function updateProperty(Request $request, $property_id)
    {
        // try {
            // Get the property
            $property = Property::findOrFail($property_id);

            // Validation
            $request->validate($this->validateProperty());

            // Update Data
            $this->saveOrUpdateProperty($property, $request);

            // Redirect with success message
            return redirect()->route('adminProperties')->with(['message' => 'Property is Updated.']);

        // } catch (\Throwable $th) {
        //     // Redirect with error message
        //     return redirect()->route('adminProperties')->with(['message' => $th->getMessage()]);
        // }
    }


//------------------------- Delete Property ----------------------------------------
    public function destroyProperty($property_id)
    {
        // try {
            // Get Property
            $property = Property::findOrFail($property_id);

            // delete featured image
            Storage::delete('public/uploads/' . $property->featured_image);

            // delete gallery items
            foreach ($property->gallery as $media) {
                $media = Media::findOrFail($media->id);
                Storage::delete('public/uploads/' . $media->name);
                $media->delete();
            }

            // Delete the property from database
            $property->delete();
            // Redirect with success message
            return redirect()->route('adminProperties')->with(['message' => 'Property Deleted']);

        // } catch (\Throwable $th) {
        //     // Redirect with error message
        //     return redirect()->route('adminProperties')->with(['message' => $th->getMessage()]);
        // }
    }


//--------------------------- Delete Media -----------------------------------------
    public function deleteMedia($media_id)
    {
        // Get media by id
        $media = Media::findOrFail($media_id);

        // delete the file
        Storage::delete('public/uploads/' . $media->name);

        // Remove from database
        $media->delete();

        // Back
        return back();
    }



//----------------------- Property form validation --------------------------
    public function validateProperty()
    {
        return [
            'name' => 'required',
            'name_tr' => 'required',
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
        ];
    }


//------------------ Save or Update Property -----------------------------------
    public function saveOrUpdateProperty($property, $request)
    {
        $property->name = $request->name;
        $property->name_tr = $request->name_tr;

        // Get Default value from databse
        $featured_image_name = $property->featured_image;
        // Check if image is empty or not
        if (!empty($request->file('featured_image'))) {
            // Check if the file already exits or not
            if ($featured_image_name) {
                if (file_exists(public_path('storage/uploads/' . $featured_image_name))) {
                    unlink(public_path('storage/uploads/' . $featured_image_name));
                }
            }
            // Get unique name of the image
            $featured_image_name = time() . mt_rand(100,999) . '-' . $request->featured_image->getClientOriginalName();
            // Store image in Storage
            $request->featured_image->storeAs('public/uploads', $featured_image_name);
        }
        // Feature image name into database
        $property->featured_image = $featured_image_name;

        $property->location_id = $request->location_id;
        $property->price = $request->price;
        $property->sale = $request->sale;
        $property->type = $request->type;
        $property->bedrooms = $request->bedrooms;
        $property->bathrooms = $request->bathrooms;
        $property->drawing_rooms = $request->drawing_rooms;
        $property->net_sqm = $request->net_sqm;
        $property->gross_sqm = $request->gross_sqm;
        $property->pool = $request->pool;
        $property->overview = $request->overview;
        $property->overview_tr = $request->overview_tr;
        $property->why_buy = $request->why_buy;
        $property->why_buy_tr = $request->why_buy_tr;
        $property->description = $request->description;
        $property->description_tr = $request->description_tr;

        // Save or update data
        $property->save();

        // Storing Media - Property Gallery
        if (!empty($request->file('gallery_images'))) {
            foreach ($request->gallery_images as $image) {
                $gallery_image_name = time() . mt_rand(100,999) . '-' . $image->getClientOriginalName();
                $image->storeAs('public/uploads', $gallery_image_name);
                // Insert into PropertyMedia
                Media::create([
                    'name'  => $gallery_image_name,
                    'property_id'   => $property->id
                ]);
            }
        }
    }


}
