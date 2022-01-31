<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Location;
use App\Models\Property;
use App\Models\Media;
use Flasher\Laravel\Facade\Flasher;
use Illuminate\Support\Facades\Storage;

class PropertyController extends Controller
{

//------------------------ Index of Property ----------------------------------------------------------------
    public function index()
    {
        $properties = Property::latest()->paginate(20);
        return view('dashboard.property.index')->with('properties', $properties);
    }


//------------------------ Create Property ----------------------------------------------------------------
    public function create()
    {
        $locations = Location::all();
        return view('dashboard.property.create')->with(['locations' => $locations]);
    }


//------------------------ Save/Store Property ----------------------------------------------------------------
    public function store(Request $request)
    {
        // Extended validation for image
        $updated_validation = $this->validateProperty()[] = [
            'featured_image' => 'required|image',
            'gallery_images' => 'required',
        ];

        $request->validate($updated_validation);   // Validation

        // try {
            $property = new Property();    // Property Instance

            $this->saveOrUpdateProperty($property, $request);    // Save all data

            Flasher::addSuccess('Property is added');    // Flasher

            return redirect()->route('properties.index');     // Redirect with success message

        // } catch (\Throwable $th) {
        //     return redirect()->route('properties.index')->with(['message' => $th->getMessage()]); // Redirect with error message
        // }
    }


    public function show($id)
    {
        //
    }


//------------------------ Edit Property ----------------------------------------------------------------
    public function edit($id)
    {
        // try {

            $property = Property::findOrFail($id);   // Find the property

            $locations = Location::all();     // Get all locations

            return view('dashboard.property.edit', [     // return view with data
                'property' => $property,
                'locations' => $locations
            ]);

        // } catch (\Throwable $th) {
        //     // Redirect with error message
        //     return redirect()->route('properties.index')->with(['message' => $th->getMessage()]);
        // }
    }


//------------------------ Update Property ----------------------------------------------------------------
    public function update(Request $request, $id)
    {
        // try {
            $property = Property::findOrFail($id);    // Get the property

            $request->validate($this->validateProperty());   // Validation

            $this->saveOrUpdateProperty($property, $request);    // Update Data

            Flasher::addSuccess('Property is Updated');    // Flasher

            return redirect()->route('properties.index')->with(['message' => 'Property is Updated.']); // Redirect with success message

        // } catch (\Throwable $th) {
        //     // Redirect with error message
        //     return redirect()->route('properties.index')->with(['message' => $th->getMessage()]);
        // }
    }


//------------------------ Delete Property ----------------------------------------------------------------
    public function destroy($id)
    {
        // try {
            $property = Property::findOrFail($id);  // Get Property

            Storage::delete('public/uploads/' . $property->featured_image);   // delete featured image

            foreach ($property->gallery as $media) {     // delete gallery items
                $media = Media::findOrFail($media->id);
                Storage::delete('public/uploads/' . $media->name);
                $media->delete();
            }

            $property->delete();    // Delete the property

            Flasher::addSuccess('Property Deleted');  // Flasher

            return redirect()->route('properties.index')->with(['message' => 'Property Deleted']);  // Redirect with success message

        // } catch (\Throwable $th) {
        //     // Redirect with error message
        //     return redirect()->route('properties.index')->with(['message' => $th->getMessage()]);
        // }
    }


//------------------------ Delete Media ----------------------------------------------------------------
    public function destroyMedia($media_id)
    {
        $media = Media::findOrFail($media_id);   // Get media by id

        Storage::delete('public/uploads/' . $media->name);  // delete the file

        $media->delete();   // Remove from database

        Flasher::addSuccess('Media Deleted');  // Flasher

        return back();  // Back
    }


//------------------------------ Property form validation ------------------------------------
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


//-------------------- Save or Update Property ------------------------------------------
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
            // $file = 'uploads/' . $featured_image_name;
            // if (Storage::exists($file)) {
            //     Storage::delete($file);
            // }
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
